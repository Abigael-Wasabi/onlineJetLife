<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GetAccessToken extends Controller
{
    protected mixed $amadeusApiKey;
    protected mixed $amadeusApiSecret;
    protected string $amadeusApiUrl = 'https://test.api.amadeus.com/';

    public function __construct()
    {
        $this->amadeusApiKey = env('AMADEUS_API_KEY');
        $this->amadeusApiSecret = env('AMADEUS_API_SECRET');
    }
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
                throw new \Exception('Access token not found in response');
            }
        } catch (\Exception $e) {
            Log::error('Error fetching access token: ' . $e->getMessage());
            throw new \Exception('Error fetching access token: ' . $e->getMessage());
        }
    }
}
