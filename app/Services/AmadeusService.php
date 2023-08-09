<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class AmadeusService
{
    protected $baseUrl = 'https://test.api.amadeus.com/v2/'; // Replace with the appropriate base URL for production
    protected $apiKey = 'FZA0VIFy51Wyyn8hsrvw1HF3hodz';

    public function searchFlights($params)
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
        ])->get($this->baseUrl . 'shopping/flight-offers', $params);

        return $response->json();
    }
}
