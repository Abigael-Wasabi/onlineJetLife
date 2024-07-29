<?php

namespace App\Models;

use App\Http\Controllers\Flights\PriceSummaryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;


class Flight extends Model
{
    use HasFactory;

    protected $amadeusApiKey;
    protected $amadeusApiSecret;
    protected $amadeusApiUrl = 'https://test.api.amadeus.com/';

    protected $httpClient;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->amadeusApiKey = env('AMADEUS_API_KEY');
        $this->amadeusApiSecret = env('AMADEUS_API_SECRET');
//        $this->httpClient = new Client([
//            'base_uri' => $this->amadeusApiUrl,
//            'headers' => [
//                'Authorization' => 'Bearer ' . $this->getAccessToken(),
//            ],
//        ]);
    }

    private function getAccessToken()
    {
        try {
            $response = Http::asForm()->post('https://test.api.amadeus.com/v1/security/oauth2/token', [
                'grant_type' => 'client_credentials',
                'client_id' => $this->amadeusApiKey,
                'client_secret' => $this->amadeusApiSecret,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                Log::info('Amadeus API token response', $data);

                if (isset($data['access_token'])) {
                    return $data['access_token'];
                } else {
                    Log::error('Access token not found in response', $data);
                    throw new \Exception('Access token not found in response');
                }
            } else {
                Log::error('Error fetching access token, HTTP status: ' . $response->status(), [
                    'response' => $response->body(),
                ]);
                throw new \Exception('Error fetching access token, HTTP status: ' . $response->status());
            }
        } catch (\Exception $e) {
            Log::error('Exception caught while fetching access token: ' . $e->getMessage(), [
                'exception' => $e,
            ]);
            throw new \Exception('Exception caught while fetching access token: ' . $e->getMessage());
        }
    }


    public function getAirportCity($query)
    {
        //$sql =  DB::table('flights_airports');
        $sql = Airport::where('code', $query)->first();
        //$sql->orderByRaw("(CASE WHEN ('code' LIKE '%$query%' AND 'cityName' LIKE '%$query%') THEN 1 WHEN ('code' LIKE '%$query%' AND 'cityName' NOT LIKE '%$query%') THEN 2 ELSE 3 END)");
        return $sql != null ? $sql->city : '';

    }

    public function getAirportName($query)
    {
        //$sql =  DB::table('flights_airports');
        $sql = Airport::where('code', $query)->first();
        //$sql->orderByRaw("(CASE WHEN ('code' LIKE '%$query%' AND 'cityName' LIKE '%$query%') THEN 1 WHEN ('code' LIKE '%$query%' AND 'cityName' NOT LIKE '%$query%') THEN 2 ELSE 3 END)");
        return $sql != null ? $sql->airport : '';

    }

    public function travelClass($classID)
    {
        $classID = strtoupper($classID);
        $travelClassMap = [
            'E' => 'ECONOMY',
            'B' => 'BUSINESS',
            'P' => 'PREMIUM_ECONOMY',
            'F' => 'FIRST'
        ];
        if (array_key_exists($classID, $travelClassMap)) {
            return $travelClassMap[$classID];
        } else {
            return $travelClassMap['E'];
        }
    }



    public function createOrder($bookingData, $bookingId): JsonResponse
    {
        try {
            $accessToken = $this->getAccessToken();
            //Logging request input
//            Log::info('Request Input:', $bookingData->all());

//            $flightOffers = $bookingData['flightOffers'] ?? null;
            $flightOffers = $bookingData['data']['flightOffers'] ?? null;

            if (empty($flightOffers)) {
                return response()->json(['error' => 'No flight offers provided.'], 400);
            }

            Log::info('Flight Offers:', ['flightOffers' => $flightOffers]);
            Log::info('Flight Offers:', ['flightOffers' => $bookingData['data']['flightOffers']]);

            //order creation request payload
            $orderPayload = [
                'data' => [
                    'type' => 'flight-order',
                    'flightOffers' => $bookingData['data']['flightOffers'],
                    'travelers' => $bookingData['data']['travelers'],
                    'remarks' => $bookingData['data']['remarks'],
                    'ticketingAgreement' => $bookingData['data']['ticketingAgreement'],
                    'contacts' => $bookingData['data']['contacts'],
                ]
            ];

            Log::info('Order Payload:', ['orderPayload' => $orderPayload]);

            //creating the flight order
            $orderResponse = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json'
            ])->post($this->amadeusApiUrl . 'v1/booking/flight-orders', $orderPayload);

            if ($orderResponse->failed()) {
                Log::error('Failed to create flight order', ['response' => $orderResponse->body()]);
                return response()->json(['error' => 'Failed to create flight order'], 400);
            }
            $orderConfirmation = $orderResponse->json();
            Log::info('Order Confirmation:', ['orderConfirmation' => $orderConfirmation]);
            if ($orderResponse->successful()) {
                $orderConfirmation = $orderResponse->json();
                Log::info('Order Confirmation:', ['orderConfirmation' => $orderConfirmation]);
            } else {
                Log::error('Order creation failed with Amadeus', ['response' => $orderResponse->body()]);
                return response()->json(['error' => 'Order creation failed with Amadeus'], 400);
            }

            //update the local db with the order confirmation
            $booking = Booking::where('id', $bookingId)->first();
            $booking->booking_info = json_encode($orderResponse);
            $booking->status = Booking::STATUS_CONFIRMED;
            $booking->save();
//            return response()->json(['status' => true, 'message' => 'No flight offers provided.'], 400);
//            $booking = Booking::where('id', $bookingId)->first();
//            if ($booking) {
//                $booking->booking_info = json_encode($orderConfirmation);
//                $booking->status = 'original';
//                $booking->save();
//            }
            $emailSample = new PriceSummaryController();
            $emailResult = $emailSample->sendTicket($orderConfirmation);

            return response()->json([
                'status' => true,
                'message' => 'Flight order created successfully.',
                'orderConfirmation' => $orderConfirmation,
                'emailResult' => $emailResult
            ], 200);
        } catch (ConnectionException $e) {
            return response()->json(['status' => false, 'message' => 'Connect error' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Error creating a flight order' . $e->getMessage()], 500);
        }
    }

}
