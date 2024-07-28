<?php

namespace App\Http\Controllers\Flights;

use App\Http\Controllers\Controller;
use App\Models\FlightsAirline;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AirlineSearchController extends Controller
{
    public function search(Request $request): JsonResponse
    {
        // Search query from the request
        $name = $request->get('name');
        $country = $request->get('country');
        $code = $request->get('code');

        $airlines = FlightsAirline::query();

        if ($name) {
            $airlines->where('name', 'like', '%' . $name . '%');
        }

        if ($country) {
            $airlines->where('country', 'like', '%' . $country . '%');
        }

        if ($code) {
            $airlines->where('code', $code);
        }
        // Executing the query
        $results = $airlines->get();

        if ($results->isEmpty()) {
            return response()->json(['error' => 'No airlines found'], 404);
        }

        // Returns the result as JSON
        return response()->json($results);
    }
}
