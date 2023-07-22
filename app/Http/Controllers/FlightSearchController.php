<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class FlightSearchController extends Controller
{
    public function search(Request $request, Client $client)
    {
        $url = 'https://test.api.amadeus.com/v2/shopping/flight-offers';
        $access_token = 'FZA0VIFy51Wyyn8hsrvw1HF3hodz';

        $data = [
            'originDestinations' => [
                [
                    'id' => 1,
                    'originLocationCode' => 'BOS',
                    'destinationLocationCode' => 'PAR',
                    'departureDateTimeRange' => [
                        'date' => '2021-12-27'
                    ]
                ]
            ],
            'travelers' => [
                [
                    'id' => 1,
                    'travelerType' => 'ADULT'
                ]
            ],
            'sources' => [
                'GDS'
            ]
        ];

        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Bearer ' . $access_token
                ],
                'json' => $data
            ]);

            return $response->getBody();
        } catch (GuzzleException $exception) {
            return $exception;
        }
    
    }
}
