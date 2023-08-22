<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use WpOrg\Requests\Requests;
use App\Services\AmadeusService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;

class FlightSearchController extends Controller
{

    public function index()
    {
       
        return view('flight.index');
    }


    public function search(Request $request)
    {
        $url = config('app.url');
        $token = config('app.key');
        $endpoint = $url . '/shopping/flight-offers';

        $headers = [
            "Authorization" => "Bearer $token",
            "Accept" => "application/json",
            "Content-Type" => "application/json",
        ];
        $params = [
            'originLocationCode' => $request->origin,
            'destinationLocationCode' => $request->destination,
            'departureDate' => $request->departure_date,
        ];


        $response = Http::withHeaders($headers)->get($endpoint, [
            'query' => $params,
        ]);

        return json_decode($response->getBody(), true);

        if ($response->successful() && $response['status'] === 'Success') {
            $data = $response->json()['data'];
            Log::info($response);
            // $data = array_column($data, 'value', 'key');
            return view('flight.index', compact('data'));
        } else {
            return redirect()->back()->with('error', 'Failed to retrieve account details.');
        }
    }



    public function showResults(Request $request)
    {
        $results = $request->input('results');

        return view('flight.results', compact('results'));
    }
}
