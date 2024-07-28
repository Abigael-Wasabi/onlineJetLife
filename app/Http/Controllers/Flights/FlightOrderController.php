<?php

namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\request;
use Illuminate\Support\Facades\Log;

class FlightOrderController extends Controller
{
    protected mixed $amadeusApiKey;
    protected mixed $amadeusApiSecret;
    protected string $amadeusApiUrl = 'https://test.api.amadeus.com/';

    public function __construct()
    {
        $this->amadeusApiKey = env('AMADEUS_API_KEY');
        $this->amadeusApiSecret = env('AMADEUS_API_SECRET');
    }



    public function retrieve($flightOrderId)
    {
        try {
            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
            ])->get($this->amadeusApiUrl . 'v1/booking/flight-orders/' . $flightOrderId);

            Log::info('Amadeus API retrieve order response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to retrieve flight order.'], $response->status());
            }
        } catch (Exception $e) {
            Log::error('Error retrieving flight order: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to retrieve flight order.'], 500);
        }
    }

    public function cancel($flightOrderId): JsonResponse
    {
        try {
            $accessToken = $this->getAccessToken();

            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
            ])->delete($this->amadeusApiUrl . 'v1/booking/flight-orders/' . $flightOrderId);

            Log::info('Amadeus API cancel order response', [
                'status' => $response->status(),
                'body' => $response->body(),
            ]);

            if ($response->successful()) {
                return response()->json(['message' => 'Flight order canceled successfully.']);
            } else {
                return response()->json(['error' => 'Failed to cancel flight order.'], $response->status());
            }
        } catch (Exception $e) {
            Log::error('Error canceling flight order: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to cancel flight order.'], 500);
        }
    }


    /**
     * @throws Exception
     */
    private function getAccessToken()
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
                throw new Exception('Access token not found in response');
            }
        } catch (Exception $e) {
            Log::error('Error fetching access token: ' . $e->getMessage());
            throw new Exception('Error fetching access token: ' . $e->getMessage());
        }
    }
}
