<?php
//
//namespace App\Http\Controllers\Flights;
//
//use App\Http\Controllers\Controller;
//use App\Models\Flight;
//use Illuminate\Http\Client\ConnectionException;
//use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;
//use App\Models\Booking;
//use App\Models\Luggage;
//use App\Models\Seats;
//use App\Models\Passenger;
//use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Log;
//
//class BkingController extends Controller
//{
//
//    protected mixed $amadeusApiKey;
//    protected mixed $amadeusApiSecret;
//    protected string $amadeusApiUrl = 'https://test.api.amadeus.com/';
//
//    public function __construct()
//    {
//        $this->amadeusApiKey = env('AMADEUS_API_KEY');
//        $this->amadeusApiSecret = env('AMADEUS_API_SECRET');
//    }
//    public function store(Request $request): JsonResponse
//    {
//        try{
//        Log::info('Store Passengers Request:', $request->all());
//        // Validate the request
//        $request->validate([
//            'passengers' => 'required|array|min:1',
//            'passengers.*.type' => 'required|string|in:adult,child,infant',
//            'passengers.*.travellerId' => 'required|max:255',
//            'passengers.*.first_name' => 'required|string|max:255',
//            'passengers.*.last_name' => 'required|string|max:255',
//            'passengers.*.date_of_birth' => 'required|date',
//            'passengers.*.email' => 'required|email|max:255',
//            'passengers.*.phone_number' => 'required|string|max:20',
//            'passengers.*.passport_number' => 'required_if:passengers.*.type,adult|string|max:20',
//            'passengers.*.birth_certificate_number' => 'required_if:passengers.*.type,child,infant|string|max:20',
//            'passengers.*.nationality' => 'required|string',
//            'luggage' => 'required|array',
//            'seats' => 'required|array',
//            'flightOffer' => 'required|string'
//        ]);
//
//            // Decode the flight offer
//            $decodedOffer = base64_decode($request->input('flightOffer'));
//            $offer = json_decode($decodedOffer, true);
//
//            if (json_last_error() !== JSON_ERROR_NONE) {
//                Log::error('Error decoding flight offer:', ['error' => json_last_error_msg()]);
//                return response()->json(['message' => 'Invalid flight offer data'], 400);
//            }
//
//        //Create a new booking
//        $booking = Booking::create([
//            'offer_id' => $offer['id'],
//            'flight_details' => json_encode($offer),
//            'passenger_info' => json_encode($request->input('passengers')),
//            'luggage_info' => json_encode($request->input('luggage')),
//            'seats_info' => json_encode($request->input('seats'))
//        ]);
//
//            if (!$booking) {
//                Log::error('Error creating booking:', ['offer' => $offer]);
//                return response()->json(['message' => 'Failed to create booking'], 500);
//            }
//
////            Log::info('Passenger Data:', ['passenger' => $passenger]);
//
//            // Save passengers
//            foreach ($request->input('passengers') as $passenger) {
//                $passengerCreated = Passenger::create([
//                'booking_id' => $booking->id,
//                'type' => $passenger['type'],
//                'travellerId' => $passenger['travellerId'],
//                'first_name' => $passenger['first_name'],
//                'last_name' => $passenger['last_name'],
//                'date_of_birth' => $passenger['date_of_birth'],
//                'email' => $passenger['email'],
//                'phone_number' => $passenger['phone_number'],
//                'passport_number' => $passenger['passport_number'] ?? null,
//                'birth_certificate_number' => $passenger['birth_certificate_number'] ?? null,
//                'nationality' => $passenger['nationality']
//            ]);
//
//                Log::info('Passenger Data:', ['passenger' => $passenger]);
//
//
//            if (!$passengerCreated) {
//                Log::error('Error saving passenger:', ['passenger' => $passenger]);
//                return response()->json(['message' => 'Failed to save passenger'], 500);
//            }
//        }
//
//            // Save luggage
//            foreach ($request->input('luggage') as $luggage) {
//                $luggageCreated = Luggage::create([
//                    'booking_id' => $booking->id,
//                    'type' => $luggage['type'],
//                    'weight' => $luggage['weight']
//                ]);
//
//                if (!$luggageCreated) {
//                    Log::error('Error saving luggage:', ['luggage' => $luggage]);
//                    return response()->json(['message' => 'Failed to save luggage'], 500);
//                }
//            }
//
//            // Save seats
//            foreach ($request->input('seats') as $seat) {
//                $seatCreated = Seats::create([
//                    'booking_id' => $booking->id,
//                    'seat_number' => $seat['seat_number'],
//                    'class' => $seat['class'],
//                    'type' => $seat['type'] ?? null
//                ]);
//
//            if (!$seatCreated) {
//                Log::error('Error saving seat:', ['seat' => $seat]);
//                return response()->json(['message' => 'Failed to save seat'], 500);
//            }
//        }
//
//
//            $bookingData = [
//                'data' => [
//                    'type' => 'flight-order',
//                    'flightOffers' => [$offer],
//                    'travelers' => $request->input('passengers'),
//                    'remarks' => [
//                        'general' => [
//                            [
//                                'subType' => 'GENERAL_MISCELLANEOUS',
//                                'text' => 'ONLINE BOOKING WITH OnlineJetLife'
//                            ]
//                        ]
//                    ],
//                    'ticketingAgreement' => [
//                        'option'=> 'DELAY_TO_CANCEL',
//                        'delay' => '6D'
//                    ],
////                    'contacts' => [
////                        [
////                            'addresseeName' => [
////                                'firstName' => $passengers[0]['name']['firstName'],
////                                'lastName' => $travelers[0]['name']['lastName']
////                            ],
////                            'companyName' => 'OnlineJetLife',
////                            'purpose' => 'STANDARD',
////                            'phones' => $travelers[0]['contact']['phones'],
////                            'address' => [
////                                'lines' => [
////                                    '123 Moi Avenue'
////                                ],
////                                'postalCode' => '12345',
////                                'cityName' => 'Nairobi',
////                                'countryCode' => 'KE'
////                            ]
////                        ]
////                    ]
//                ]
//            ];
//
//            $orderResponse = $this->createOrder($bookingData, $booking->id);
//
//            if ($orderResponse->getStatusCode() === 200) {
//                $orderConfirmation = $orderResponse->json();
//                // Update the local DB with the order confirmation
//                $booking->booking_info = $orderConfirmation;
//                $booking->status = Booking::STATUS_CONFIRMED;
//                $booking->save();
//            } else {
//                Log::error('Error from Amadeus:', ['response' => $orderResponse->body()]);
//                return response()->json(['message' => 'Failed to create flight order with Amadeus'], 500);
//            }
//
//
//        return response()->json(['message' => 'Booking created successfully'], 201);
//        } catch (\Exception $e) {
//            Log::error('General error occurred:', ['error' => $e->getMessage()]);
//            return response()->json(['message' => 'An error occurred while processing the request'], 500);
//        }
//    }
//
//
//
//
////    private function getAccessToken()
////    {
////        try {
////            $response = Http::asForm()->post('https://test.api.amadeus.com/v1/security/oauth2/token', [
////                'grant_type' => 'client_credentials',
////                'client_id' => $this->amadeusApiKey,
////                'client_secret' => $this->amadeusApiSecret,
////            ]);
////
////            $data = $response->json();
////
////            Log::info('Amadeus API token response', $data);
////
////            if (isset($data['access_token'])) {
////                return $data['access_token'];
////            } else {
////                throw new \Exception('Access token not found in response');
////            }
////        } catch (\Exception $e) {
////            Log::error('Error fetching access token: ' . $e->getMessage());
////            throw new \Exception('Error fetching access token: ' . $e->getMessage());
////        }
////    }
//}


namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Models\Booking;
use App\Models\Flight;
use App\Models\Passenger;
use App\Models\Luggage;
use App\Models\Seats;


class BkingController extends Controller
{
    public function store(Request $request)
    {
        //validate passenger details
        $validator = Validator::make($request->all(), [
            'offer_id' => 'required|string',
            'flight_details' => 'required|string',
            'passenger_info' => 'required|array',
            'passenger_info.*.type' => 'required|string',
            'passenger_info.*.first_name' => 'required|string',
            'passenger_info.*.last_name' => 'required|string',
            'passenger_info.*.date_of_birth' => 'required|date',
            'passenger_info.*.email' => 'required|email',
            'passenger_info.*.phone_number' => 'required|string',
            'passenger_info.*.passport_number' => 'nullable|string',
            'passenger_info.*.birth_certificate_number' => 'nullable|string',
            'passenger_info.*.nationality' => 'required|string',
            'luggage_info' => 'required|array',
            'luggage_info.*.type' => 'required|string',
            'luggage_info.*.weight_in_kg' => 'required|numeric',
            'seats_info' => 'required|array',
            'seats_info.*.seat_number' => 'required|string',
            'seats_info.*.class' => 'required|string',
            'seats_info.*.type' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        try {
            // Decode flight offer details
            $flightDetails = base64_decode($request->input('flight_details'));

            // Create booking
            $booking = new Booking();
            $booking->offer_id = $request->input('offer_id');
            $booking->flight_details = json_decode($flightDetails, true);
            $booking->passenger_info = json_encode($request->input('passenger_info'));
            $booking->luggage_info = json_encode($request->input('luggage_info'));
            $booking->seats_info = json_encode($request->input('seats_info'));
            $booking->save();

            // Store passengers
            foreach ($request->input('passenger_info') as $passenger) {
                $newPassenger = new Passenger();
                $newPassenger->booking_id = $booking->id;
                $newPassenger->type = $passenger['type'];
                $newPassenger->first_name = $passenger['first_name'];
                $newPassenger->last_name = $passenger['last_name'];
                $newPassenger->date_of_birth = $passenger['date_of_birth'];
                $newPassenger->email = $passenger['email'];
                $newPassenger->phone_number = $passenger['phone_number'];
                $newPassenger->passport_number = $passenger['passport_number'];
                $newPassenger->birth_certificate_number = $passenger['birth_certificate_number'];
                $newPassenger->nationality = $passenger['nationality'];
                $newPassenger->save();
            }

            // Store luggage
            foreach ($request->input('luggage_info') as $luggage) {
                $newLuggage = new Luggage();
                $newLuggage->booking_id = $booking->id;
                $newLuggage->type = $luggage['type'];
                $newLuggage->weight_in_kg = $luggage['weight_in_kg'];
                $newLuggage->save();
            }

            // Store seats
            foreach ($request->input('seats_info') as $seat) {
                $newSeat = new Seats();
                $newSeat->booking_id = $booking->id;
                $newSeat->seat_number = $seat['seat_number'];
                $newSeat->class = $seat['class'];
                $newSeat->type = $seat['type'];
                $newSeat->save();
            }
            // Make API call to create flight order
            $flightModel = new Flight();
            $response = $flightModel->createOrder($request->all(), $booking->id);


            // Handle the response
            if ($response->getStatusCode() === 200) {
                return response()->json(['status' => true, 'message' => 'Booking created and flight order successful.', 'data' => $response->getData()], 200);
            } else {
                return response()->json(['status' => false, 'message' => 'Booking created but failed to create flight order.', 'error' => $response->getData()], 500);
            }
        } catch (\Exception $e) {
            Log::error('Error creating booking', ['exception' => $e->getMessage()]);
            return response()->json(['status' => false, 'message' => 'Error creating booking: ' . $e->getMessage()], 500);
        }
    }
}
