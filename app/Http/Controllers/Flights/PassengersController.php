<?php
//
//namespace App\Http\Controllers\Flights;
//
//use App\Http\Controllers\Controller;
//use App\Models\Booking;
//use App\Models\Flight;
//use App\Models\Luggage;
//use App\Models\Passenger;
//use App\Models\Seats;
//use Illuminate\Database\Eloquent\ModelNotFoundException;
//use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Log;
//
//
//class PassengersController extends Controller
//{
//    protected mixed $amadeusApiKey;
//    protected mixed $amadeusApiSecret;
//    protected string $amadeusApiUrl = 'https://test.api.amadeus.com/';
//
//    public function __construct()
//    {
//        $this->amadeusApiKey = env('AMADEUS_API_KEY');
//        $this->amadeusApiSecret = env('AMADEUS_API_SECRET');
//    }
//
//
////    public function store(Request $request): JsonResponse
////    {
////        Log::info('Store Passengers Request:', $request->all());
////        // Validate request
////        $request->validate([
////            'offer_id' => 'required|string',
////            'passengers' => 'required|array|min:1',
////            'passengers.*.type' => 'required|string|in:adult,child,infant',
////            'passengers.*.travellerId' => 'required|max:255',
////            'passengers.*.first_name' => 'required|string|max:255',
////            'passengers.*.last_name' => 'required|string|max:255',
////            'passengers.*.date_of_birth' => 'required|date',
////            'passengers.*.email' => 'required|email|max:255',
////            'passengers.*.phone_number' => 'required|string|max:20',
////            'passengers.*.passport_number' => 'required_if:passengers.*.type,adult|string|max:20|nullable',
////            'passengers.*.birth_certificate_number' => 'required_if:passengers.*.type,child,infant|string|max:20|nullable',
////            'passengers.*.nationality' => 'required|string',
////            'luggage' => 'required|array',
////            'seats' => 'required|array',
////            'flightOffer' => 'required|string'
////        ]);
////
////        // Debugging: Log the validation passed
////        Log::info('Validation passed');
////
////        try {
////            $passengerData = $request->input('passengers');
////            $luggageData = $request->input('luggage');
////            $seatsData = $request->input('seats');
////
////            Log::info('Passenger Data:', $passengerData);
////            Log::info('Luggage Data:', $luggageData);
////            Log::info('Seats Data:', $seatsData);
////
////            //Decoding flight offer
////            $offer = json_decode(base64_decode($request->input('flightOffer')), true);
////            $offerId = $offer['id'];
////
////            if (json_last_error() !== JSON_ERROR_NONE) {
////                Log::error('Error decoding flight offer:', ['error' => json_last_error_msg()]);
////                return response()->json(['message' => 'Invalid flight offer data'], 400);
////            }
////            // Log decoded offer
////            Log::info('Decoded Offer:', $offer);
////
////            // Create travelers array
////            $travelers = array_map(function ($traveler) {
////                return [
////                    'id' => $traveler['travellerId'],
////                    'dateOfBirth' => $traveler['date_of_birth'],
////                    "name" => [
////                        'firstName' => $traveler['first_name'],
////                        'lastName' => $traveler['last_name'],
////                    ],
////                    'contact' => [
////                        'emailAddress' => $traveler['email'],
////                        'phones' => [
////                            [
////                                'deviceType' => 'MOBILE',
////                                'countryCallingCode' => substr($traveler['phone_number'], 0, 3), //country code is the first 3 digits
////                                'number' => substr($traveler['phone_number'], 3) //rest is the phone number
////                            ]
////                        ]
////                    ],
////                    'documents' => [
////                        [
////                            'documentType' => 'PASSPORT',
////                            'number' => $traveller['passport_number'] ?? '',
////                            'expiryDate' => '2025-10-20', //dynamically set
////                            'issuanceCountry' => $traveler['nationality'],
////                            'nationality' => $traveler['nationality'],
////                            'birthPlace' => 'Nairobi' //dynamically set
////                        ]
////                    ],
////                    'address' => [
////                        'lines' => [
////                            '123 Moi Avenue'
////                        ],
////                        'postalCode' => '12345',
////                        'cityName' => 'Nairobi',
////                        'countryCode' => 'KE'
////                    ]
////                ];
////            }, $passengerData);
////
////            // Log travelers array for debugging
////            Log::info('Travelers:', $travelers);
////
////            //Ensuring travelers array is not empty
////            if (empty($travelers)) {
////                Log::error('Travelers array is empty');
////                return response()->json(['message' => 'Travelers data is required'], 400);
////            }
////
//////            $travelersData = $request->input('passengers');
//////            $travelers = array();
//////            foreach ($travelersData as $traveller) {
//////                $travelers[] = array(
//////                    'id' => $traveller['travellerId'],
//////                    'dateOfBirth' => $traveller['date_of_birth'],
//////                    "name" => array(
//////                        'firstName' => $traveller['first_name'],
//////                        'lastName' => $traveller['last_name'],
//////                    ),
//////                    'email' => $traveller['email'],
//////                    'phoneNumber' => $traveller['phone_number'],
//////                    'nationality' => $traveller['nationality'],
//////                    'passportNumber' => $traveller['passport_number'],
//////                    'birthCertificateNumber' => $traveller['birth_certificate_number'],
//////                );
//////            }
////
////
////            $bookingData = [
////                'data' => [
////                    'type' => 'flight-order',
////                    'flightOffers' => [$offer],
////                    'travelers' => $travelers,
////                    'remarks' => [
////                        'general' => [
////                            [
////                                'subType' => 'GENERAL_MISCELLANEOUS',
////                                'text' => 'ONLINE BOOKING WITH OnlineJetLife'
////                            ]
////                        ]
////                    ],
////                    'ticketingAgreement' => [
////                                   'option'=> 'DELAY_TO_CANCEL',
////                                   'delay' => '6D'
////                    ],
////                    'contacts' => [
////                        [
////                            'addresseeName' => [
////                                'firstName' => $travelers[0]['name']['firstName'],
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
////                ]
////            ];
////
////            Log::info('Booking Data:', $bookingData);
////
////            $booking = Booking::create([
////                'offer_id' => $offerId,
////                'flight_details' => json_encode($offer), //flight details will be filled accordingly
////                'booking_info' => json_encode($bookingData),
////                'passenger_info' => json_encode($bookingData['data']['travelers']),
////                'luggage_info' => json_encode($luggageData),
////                'seats_info' => json_encode($seatsData),
////                'status' => Booking::STATUS_PENDING,
////            ]);
////
////            if (!$booking) {
////                Log::error('Error creating booking:', ['offer' => $offer]);
////                return response()->json(['message' => 'Failed to create booking'], 500);
////            }
////
//////            //             Saving passengers
//////            foreach ($passengerData as $data) {
//////                $data['booking_id'] = $booking->id;
//////                Passenger::create($data);
//////            }
//////
//////            // Saving luggage
//////            foreach ($luggageData as $item) {
//////                $item['booking_id'] = $booking->id;
//////                $booking->luggage()->create($item);
//////            }
//////            // Saving seats
//////            foreach ($seatsData as $seat) {
//////                $seat['booking_id'] = $booking->id;
//////                Seats::create($seat);
//////            }
////
////            // Save passengers
////            foreach ($request->input('passengers') as $passenger) {
////                $passengerCreated = Passenger::create([
////                    'booking_id' => $booking->id,
////                    'type' => $passenger['type'],
////                    'travellerId' => $passenger['travellerId'],
////                    'first_name' => $passenger['first_name'],
////                    'last_name' => $passenger['last_name'],
////                    'date_of_birth' => $passenger['date_of_birth'],
////                    'email' => $passenger['email'],
////                    'phone_number' => $passenger['phone_number'],
////                    'passport_number' => $passenger['passport_number'] ?? null,
////                    'birth_certificate_number' => $passenger['birth_certificate_number'] ?? null,
////                    'nationality' => $passenger['nationality']
////                ]);
////
////                Log::info('Passenger Data:', ['passenger' => $passenger]);
////
////
////                if (!$passengerCreated) {
////                    Log::error('Error saving passenger:', ['passenger' => $passenger]);
////                    return response()->json(['message' => 'Failed to save passenger'], 500);
////                }
////            }
////
////
////
////            // Save luggage
////            foreach ($request->input('luggage') as $luggage) {
////                $luggageCreated = Luggage::create([
////                    'booking_id' => $booking->id,
////                    'type' => $luggage['type'],
////                    'weight' => $luggage['weight']
////                ]);
////
////                if (!$luggageCreated) {
////                    Log::error('Error saving luggage:', ['luggage' => $luggage]);
////                    return response()->json(['message' => 'Failed to save luggage'], 500);
////                }
////            }
////
////            // Save seats
////            foreach ($request->input('seats') as $seat) {
////                $seatCreated = Seats::create([
////                    'booking_id' => $booking->id,
////                    'seat_number' => $seat['seat_number'],
////                    'class' => $seat['class'],
////                    'type' => $seat['type'] ?? null
////                ]);
////
////                if (!$seatCreated) {
////                    Log::error('Error saving seat:', ['seat' => $seat]);
////                    return response()->json(['message' => 'Failed to save seat'], 500);
////                }
////            }
////
////            //BOOK WITH AMADEUS
////            $flightModel = new Flight();
////            Log::info('Calling createOrder function in Flight model', ['bookingData' => $bookingData, 'bookingId' => $booking->id]);
////            $order = $flightModel->createOrder($bookingData, $booking->id);
////            Log::info('createOrder response', ['order' => $order]);
////
////
////            if ($order['status']) {
////                return response()->json(['message' => 'Your flight booking was completed successfully.', 'booking_id' => $booking->id], 201);
////            } else {
////                return response()->json(['message' => 'Your booking was not successful. Please contact us or try again.', 'booking_id' => $booking->id], 400);
////                //Do something here if order was not successful
////            }
////
////
////        } catch (ModelNotFoundException $e) {
////            Log::error('Booking not found', ['error' => $e->getMessage()]);
////            return response()->json(['message' => 'Booking not found'], 404);
////        } catch (\Exception $e) {
////            Log::error('An error occurred while storing booking and passengers', ['error' => $e->getMessage()]);
////            return response()->json(['error' => 'An error occurred while storing booking and passengers'], 500);
////        }
////    }
//
//
//
//    public function store(Request $request): JsonResponse
//    {
//        try{
//            Log::info('Store Passengers Request:', $request->all());
//            // Validate the request
//            $request->validate([
//                'passengers' => 'required|array|min:1',
//                'passengers.*.type' => 'required|string|in:adult,child,infant',
//                'passengers.*.travellerId' => 'required|max:255',
//                'passengers.*.first_name' => 'required|string|max:255',
//                'passengers.*.last_name' => 'required|string|max:255',
//                'passengers.*.date_of_birth' => 'required|date',
//                'passengers.*.email' => 'required|email|max:255',
//                'passengers.*.phone_number' => 'required|string|max:20',
//                'passengers.*.passport_number' => 'required_if:passengers.*.type,adult|string|max:20|nullable',
//                'passengers.*.birth_certificate_number' => 'required_if:passengers.*.type,child,infant|string|max:20|nullable',
//                'passengers.*.nationality' => 'required|string',
//                'luggage' => 'required|array',
//                'seats' => 'required|array',
//                'flightOffer' => 'required|string'
//            ]);
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
//            //Create a new booking
//            $booking = Booking::create([
//                'offer_id' => $offer['id'],
//                'flight_details' => json_encode($offer),
//                'passenger_info' => json_encode($request->input('passengers')),
//                'luggage_info' => json_encode($request->input('luggage')),
//                'seats_info' => json_encode($request->input('seats'))
//            ]);
//
//            if (!$booking) {
//                Log::error('Error creating booking:', ['offer' => $offer]);
//                return response()->json(['message' => 'Failed to create booking'], 500);
//            }
//
////            Log::info('Passenger Data:', ['passenger' => $passenger]);
//
//            // Save passengers
//            $passengers = $request->input('passengers');
//            foreach ($passengers as $passenger) {
//                $passengerCreated = Passenger::create([
//                    'booking_id' => $booking->id,
//                    'type' => $passenger['type'],
//                    'travellerId' => $passenger['travellerId'],
//                    'first_name' => $passenger['first_name'],
//                    'last_name' => $passenger['last_name'],
//                    'date_of_birth' => $passenger['date_of_birth'],
//                    'email' => $passenger['email'],
//                    'phone_number' => $passenger['phone_number'],
//                    'passport_number' => $passenger['passport_number'] ?? null,
//                    'birth_certificate_number' => $passenger['birth_certificate_number'] ?? null,
//                    'nationality' => $passenger['nationality']
//                ]);
//
//                Log::info('Passenger Data:', ['passenger' => $passenger]);
//
//
//                if (!$passengerCreated) {
//                    Log::error('Error saving passenger:', ['passenger' => $passenger]);
//                    return response()->json(['message' => 'Failed to save passenger'], 500);
//                }
//            }
//
//            // Save luggage
//            foreach ($request->input('luggage') as $luggage) {
//                $luggageCreated = Luggage::create([
//                    'booking_id' => $booking->id,
//                    'type' => $luggage['type'],
//                    'weight_in_kg' => $luggage['weight_in_kg']
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
//                if (!$seatCreated) {
//                    Log::error('Error saving seat:', ['seat' => $seat]);
//                    return response()->json(['message' => 'Failed to save seat'], 500);
//                }
//            }
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
//                    'contacts' => [
//                        [
//                            'addresseeName' => [
//                                'firstName' => $passengers[0]['name']['firstName'],
//                                'lastName' => $travelers[0]['name']['lastName']
//                            ],
//                            'companyName' => 'OnlineJetLife',
//                            'purpose' => 'STANDARD',
//                            'phones' => $travelers[0]['contact']['phones'],
//                            'address' => [
//                                'lines' => [
//                                    '123 Moi Avenue'
//                                ],
//                                'postalCode' => '12345',
//                                'cityName' => 'Nairobi',
//                                'countryCode' => 'KE'
//                            ]
//                        ]
//                    ]
//                ]
//            ];
//
////            $flightModel = new Flight();
////            $orderResponse = $this->createOrder($bookingData, $booking->id);
////            $order = $flightModel->createOrder($bookingData, $booking->id);
////
////            if ($orderResponse->getStatusCode() === 200) {
////                $orderConfirmation = $orderResponse->json();
////                // Update the local DB with the order confirmation
////                $booking->booking_info = $orderConfirmation;
////                $booking->status = Booking::STATUS_CONFIRMED;
////                $booking->save();
////            } else {
////                Log::error('Error from Amadeus:', ['response' => $orderResponse->body()]);
////                return response()->json(['message' => 'Failed to create flight order with Amadeus'], 500);
////            }
//
//            //BOOK WITH AMADEUS
//            $flightModel = new Flight();
//            Log::info('Calling createOrder function in Flight model', ['bookingData' => $bookingData, 'bookingId' => $booking->id]);
//            $order = $flightModel->createOrder($bookingData, $booking->id);
//            Log::info('createOrder response', ['order' => $order]);
//
//
//            if ($order['status']) {
//                return response()->json(['message' => 'Your flight booking was completed successfully.', 'booking_id' => $booking->id], 201);
//            } else {
//                return response()->json(['message' => 'Your booking was not successful. Please contact us or try again.', 'booking_id' => $booking->id], 400);
//                //Do something here if order was not successful
//            }
//
//
////            return response()->json(['message' => 'Booking created successfully'], 201);
//        } catch (\Exception $e) {
//            Log::error('General error occurred:', ['error' => $e->getMessage()]);
//            return response()->json(['message' => 'An error occurred while processing the request'], 500);
//        }
//    }
//
//
//}
