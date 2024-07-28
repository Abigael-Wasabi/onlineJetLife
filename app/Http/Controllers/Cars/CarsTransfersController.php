<?php

namespace App\Http\Controllers\Cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CarsTransfersController extends Controller
{
    protected mixed $amadeusApiKey;
    protected mixed $amadeusApiSecret;
    protected string $amadeusApiUrl = 'https://test.api.amadeus.com/';

    public function __construct(){
        $this->amadeusApiKey = env('amadeus_api_key');
        $this->amadeusApiSecret = env('amadeus_api_secret');
    }
//sample input
//{
//"startLocationCode": "CDG",
//"endAddressLine": "Avenue Anatole France, 5",
//"endCityName": "Paris",
//"endZipCode": "75007",
//"endCountryCode": "FR",
//"endName": "Souvenirs De La Tour",
//"endGeoCode": "48.859466,2.2976965",
//"transferType": "PRIVATE",
//"startDateTime": "2024-08-01T10:30:00",
//"passengers": 2,
//"stopOvers": [
//{
//"duration": "PT2H30M",
//"sequenceNumber": 1,
//"addressLine": "Avenue de la Bourdonnais, 19",
//"countryCode": "FR",
//"cityName": "Paris",
//"zipCode": "75007",
//"name": "De La Tours",
//"geoCode": "48.859477,2.2976985",
//"stateCode": "FR"
//}
//],
//"startConnectedSegment": {
//    "transportationType": "FLIGHT",
//    "transportationNumber": "AF380",
//    "departure": {
//        "localDateTime": "2024-08-01T09:00:00",
//      "iataCode": "NCE"
//    },
//    "arrival": {
//        "localDateTime": "2024-08-01T10:00:00",
//      "iataCode": "CDG"
//    }
//  },
//  "passengerCharacteristics": [
//    {
//        "passengerTypeCode": "ADT",
//      "age": 20
//    },
//    {
//        "passengerTypeCode": "CHD",
//      "age": 10
//    }
//  ]
//}

    public function transferSearch(Request $request): JsonResponse
    {
        try{
            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$accessToken,
                'Content-Type' => 'application/json',
            ])->post($this->amadeusApiUrl.'v1/shopping/transfer-offers', $request->json()->all());

            Log::info('Amadeus Transfer Search API Response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if($response->failed()){
                return response()->json([
                    'error' => 'Failed to search transfer offers',
                    'details' => $response->json(),
                ], $response ->status());
            }
            return response()->json($response->json());
        } catch(\Exception $e){
            return response()->json(['error' => 'Failed to search transfer offers', 'message' => $e->getMessage()], 500);
        }
    }

    public function bookingTransfer(Request $request): JsonResponse
    {
        try{
            $transferId  = $request->input('transferId');
            $travelerInfo = $request->input('transferInfo');
            $paymentInfo = $request->input('paymentInfo');

            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$accessToken,
                'Content-Type' => 'application/json',
            ])->post($this->amadeusApiUrl.'v1/ordering/transfers-orders', [
                'data' => [
                    'transferOffer' => [
                        'id' => $transferId,
                    ],
                    'travelers' => $travelerInfo,
                    'payments' => $paymentInfo,
                ],
            ]);

            Log::info('Amadeus Transfer Booking API Response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to book order',
                    'details' => $response->json(),
                ], $response ->status());
            }
            return response()->json($response->json());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to book transfer', 'message' => $e->getMessage()], 500);
        }
    }

    public function transferManagement(Request $request, $orderId): JsonResponse
    {
        try {
            $action = $request->input('action'); // action can be 'cancel' or 'update'
            $accessToken = $this->getAccessToken();

            if ($action === 'cancel') {
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $accessToken,
                ])->delete($this->amadeusApiUrl . 'v1/booking/transfer-orders/' . $orderId);
            } else {
                // handle other actions like update if needed
                // this part needs to be defined based on Amadeus API capabilities for transfer management
                throw new \Exception('Unsupported action for transfer management');
            }

            Log::info('Amadeus Transfer Management API Response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to manage transfer',
                    'details' => $response->json(),
                ], $response->status());
            }
            return response()->json($response->json());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to manage transfer', 'message' => $e->getMessage()], 500);
        }
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
    }
