<?php

namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class SeatController extends Controller
{
    protected mixed $amadeusApiKey;
    protected mixed $amadeusApiSecret;
    protected string $amadeusApiUrl = 'https://test.api.amadeus.com/';

    public function __construct()
    {
        $this->amadeusApiKey = env('AMADEUS_API_KEY');
        $this->amadeusApiSecret = env('AMADEUS_API_SECRET');
    }

    /**
     * Retrieve the seat map for a flight offer.
     *
     * @param Request $request
     * @return JsonResponse
     */

    public function getSeatMap(Request $request): JsonResponse
    {
        try {
            $request->validate([
                'flightOffers' => 'required|array',
            ]);

            $flightOffers = $request->input('flightOffers');

            //retrieving access token
            $accessToken = $this->getAccessToken();

            //Making an API request to Amadeus
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
            ])->post($this->amadeusApiUrl . 'v1/shopping/seatmaps', [
                'data' => $flightOffers
            ]);

            //Logging the response for debugging
            Log::info('Amadeus Seatmap API Response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->failed()) {
                return response()->json([
                    'error' => 'Failed to retrieve seat map',
                    'details' => $response->json()
                ], $response->status());
            }

            return response()->json($response->json());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch seat map', 'message' => $e->getMessage()], 500);
        }
    }



    /**
     * Retrieve access token for Amadeus API.
     *
     * @return string
     * @throws \Exception
     */
    private function getAccessToken(): string
    {
        try {
            $response = Http::asForm()->post('https://test.api.amadeus.com/v1/security/oauth2/token', [
                'grant_type' => 'client_credentials',
                'client_id' => $this->amadeusApiKey,
                'client_secret' => $this->amadeusApiSecret,
            ]);

            $data = $response->json();

            Log::info('Amadeus API token response', $data);

            if (isset($data['access_token'])) {
                return $data['access_token'];
            } else {
                throw new \Exception('Access token not found in response');
            }
        } catch (\Exception $e) {
            Log::error('Error fetching access token: ' . $e->getMessage());
            throw new \Exception('Error fetching access token: ' . $e->getMessage());
        }
    }
}
