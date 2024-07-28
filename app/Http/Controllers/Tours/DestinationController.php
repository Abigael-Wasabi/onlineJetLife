<?php

namespace App\Http\Controllers\Tours;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class DestinationController extends Controller
{
    protected mixed $amadeusApiKey;
    protected mixed $amadeusApiSecret;
    protected string $amadeusApiUrl = 'https://test.api.amadeus.com/';


    public function __construct() {
        $this->amadeusApiKey = env('AMADEUS_API_KEY');
        $this->amadeusApiSecret = env('AMADEUS_API_SECRET');
    }

    /**
     * Retrieving points of interest.
     *
     * @param Request $request
     * @return JsonResponse
     */

    public function PointsOfInterest(Request $request): JsonResponse
    {
        try{
            $latitude = $request->input('latitude');
            $longitude = $request->input('longitude');

            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get($this->amadeusApiUrl . 'v1/reference-data/locations/pois', [
                'latitude' => $latitude,
                'longitude' => $longitude,
            ]);
            Log::info('Amadeus POI API Response',[
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to retrieve points of interest data',
                    'details' => $response->json(),
                ], $response->status());
            }
            return response()->json($response->json());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch points of interest data', 'message' => $e->getMessage()], 500);
        }
    }


    public  function  PointsOfInterestBySquare(Request $request): JsonResponse
    {
        try{
            $north = $request->input('north');
            $south = $request->input('south');
            $west = $request->input('west');
            $east = $request->input('east');

            //ensuring all params r present
            if (!$north || !$west || !$south || !$east) {
                return response()->json([
                    'error' => 'Missing required parameters: north, west, south, east.',
                ], 400);
            }

            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get($this->amadeusApiUrl . 'v1/reference-data/locations/pois/by-square', [
                'north' => $north,
                'south' => $south,
                'west' => $west,
                'east' => $east,
            ]);
            Log::info('Amadeus POI API Response',[
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to retrieve points of interest by square data',
                    'details' => $response->json(),
                ], $response->status());
            }
            return response()->json($response->json());
        }catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch points of interest by square', 'message' => $e->getMessage()], 500);
        }
    }

//
//"poisId": "poi:12345"
//


    public function PointsOfInterestById($poisId): JsonResponse
    {
        try{
            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get ( $this->amadeusApiUrl . 'v1/reference-data/locations/pois/'. $poisId);

            Log::info('Amadeus POI API Response',[
                'status' => $response->status(),
                'body' => $response->body(),
            ]);
            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to retrieve tour activities data',
                    'details' => $response->json(),
                ], $response->status());
            }
            return response()->json($response->json());
        }catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch tour activities data', 'message' => $e->getMessage()], 500);
        }
    }

    public function getToursAndActivities(Request $request): JsonResponse
    {
        try {
            $latitude = $request->input('latitude');
            $longitude = $request->input('longitude');
            $radius = $request->input('radius', 1); //optional!!default to 1km if not provided
            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get($this->amadeusApiUrl . 'v1/shopping/activities', [
                'latitude' => $latitude,
                'longitude' => $longitude,
                'radius' => $radius,
            ]);
            Log::info('Amadeus activities API Response',[
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to retrieve tour activities data',
                    'details' => $response->json(),
                ], $response->status());
            }
                return response()->json($response->json());
        } catch (\Exception $e){
                return response()->json(['error' => 'Failed to fetch tour activities data', 'message' => $e->getMessage()], 500);
        }
    }


    public function getToursAndActivitiesByBoundingBox(Request $request): JsonResponse
    {
        try{
        $north = $request->input('north');
        $south = $request->input('south');
        $west  = $request->input('west');
        $east  = $request->input('east');
        //ensuring all params r present
        if (!$north || !$west || !$south || !$east) {
            return response()->json([
                'error' => 'Missing required parameters: north, west, south, east.',
            ], 400);
        }

        $accessToken = $this->getAccessToken();

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
        ])->get($this->amadeusApiUrl . 'v1/shopping/activities/by-square', [
            'north' => $north,
            'south' => $south,
            'east' => $east,
            'west' => $west,
        ]);

        Log::info('Amadeus Activities by Bounding Box API Response', [
            'status' => $response->status(),
            'body' => $response->body(),
        ]);
        if ($response->failed()) {
            return response()->json([
                'error' => 'Failed to retrieve tour activities data',
                'details' => $response->json(),
            ], $response->status());
        }
        return response()->json($response->json());
    }catch (\Exception $e){
        return response()->json(['error' => 'Failed to fetch tour activities data', 'message' => $e->getMessage()], 500);}
    }

//
//"activityId": "activity:12345"
//

    public function getToursAndActivitiesById($activityId): JsonResponse
    {
        try{
            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->get($this->amadeusApiUrl . 'v1/shopping/activities/'. $activityId);

            Log::info('Amadeus Activity Details API Response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to retrieve tour activities data',
                    'details' => $response->json(),
                ], $response->status());
            }
            return response()->json($response->json());
        }catch (\Exception $e){
            return response()->json(['error' => 'Failed to retrieve activity', 'message' => $e->getMessage()], 500);
        }
    }


//
//"keyword": "Nairobi",
//"countryCode": "KE",
//"max": 10,
//"include": "AIRPORTS"
//


    public function searchCity(Request $request): JsonResponse
        {
            try {
                $keyword = $request->input('keyword');
                $countryCode = $request->input('countryCode');
                $max = $request->input('max', 10);//default to 10
                $include = $request->input('include');

                $accessToken = $this->getAccessToken();

                //query params
                $queryParams = [
                    'keyword' => $keyword,
                    'max' => $max,
                ];
                if ($countryCode) {
                    $queryParams['countryCode'] = $countryCode;
                }
//                if ($include) {
//                    $queryParams['include'] = $include;
//                }

                if ($include) {//checks if include param is provided in the request
                    //only adds the include param if its a valid value
                    $validIncludes = ['AIRPORTS'];//sets an array of valid values in the include parameter
                    if (in_array(strtoupper($include), $validIncludes)) {//checks if the include value,which is converted to uppercase is present in the $validIncludes array.
                        $queryParams['include'] = strtoupper($include);//If the value is valid its added to the $queryParams array.
                    }
                }

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $accessToken,
                ])->get($this->amadeusApiUrl . 'v1/reference-data/locations/cities', $queryParams);

                Log::info('Amadeus City Search API Response',[
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                //checking if response fails
                if ($response->failed()) {
                    return response()->json([
                        'error' => 'Failed to retrieve cities data',
                        'details' => $response->json(),
                    ], $response->status());
                }
                return response()->json($response->json());
            } catch (\Exception $e) {
                return response()->json(['error' => 'Failed to search city', 'message' => $e->getMessage()], 500);
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
