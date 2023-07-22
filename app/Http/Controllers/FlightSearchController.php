<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class FlightSearchController extends Controller
{
    public function index()
    {
        return view('flight.index');
    }

    public function search(Request $request, Client $client)
    {
        $request->validate([
            'departure' => 'required|string',
            'destination' => 'required|string',
            'date' => 'required|date',
            'passengers' => 'required|integer|min:1',
            'type' => 'required|string|in:round_trip,one_way',
        ]);

        $apiKey = 'FZA0VIFy51Wyyn8hsrvw1HF3hodz';
        $url = 'https://api.amadeus.com/v2/shopping/flight-offers';

        $params = [
            'apikey' => $apiKey,
            'originLocationCode' => $request->departure,
            'destinationLocationCode' => $request->destination,
            'departureDate' => $request->date,
            'adults' => $request->passengers,
            'travelClass' => ($request->type === 'round_trip') ? 'ECONOMY' : 'BUSINESS',
        ];

        $client = new Client();

        try {
            $response = $client->get($url, [
                'query' => $params,
            ]);

            $data = json_decode($response->getBody(), true);
            // Process the API response and retrieve flight search results
            $flights = $data['data'] ?? [];
        // } catch (Exception $e) {
        } catch (GuzzleException $e) {
            // Handle API request errors
            return back()->with('error', 'Failed to fetch flight data. Please try again later.');
        }

        return view('flight.results', ['flights' => $flights]);

 
    }
}
