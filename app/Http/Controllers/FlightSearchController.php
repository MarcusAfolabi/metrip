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
use Illuminate\Http\Client\RequestException;
use Illuminate\Pagination\LengthAwarePaginator;

class FlightSearchController extends Controller
{

    public function index()
    {
        $token = Session::get('access_token');

        return view('flight.index');
    }


    // public function search(Request $request)
    // {
    //     $url = config('app.url');
    //     $token = config('app.key');
    //     $endpoint = $url . '/shopping/flight-offers';

    //     $headers = [
    //         "Authorization" => "Bearer $token",
    //         "Accept" => "application/json",
    //         "Content-Type" => "application/json",
    //     ];
    //     $params = [
    //         'originLocationCode' => $request->departfrom,
    //         'destinationLocationCode' => $request->arrivalto,
    //         'departureDate' => $request->flightdate_from,
    //         'adults' => $request->flightadults,

    //     ];


    //     $response = Http::withHeaders($headers)->get($endpoint, [
    //         'query' => $params,
    //     ]);

    //     return json_decode($response->getBody(), true);

    //     if ($response->successful() && $response['status'] === 'Success') {
    //         $data = $response->json()['data'];
    //         dd($data);
    //         Log::info($response);
    //         // $data = array_column($data, 'value', 'key');
    //         return view('flight.index', compact('data'));
    //     } else {
    //         return redirect()->back()->with('error', 'Failed to retrieve account details.');
    //     }
    // }
    public function search(Request $request)
    {
        $token = Session::get('access_token');

        $url = 'https://test.api.amadeus.com/v2/shopping/flight-offers';
        $access_token = $token;
        $data = [
            'originLocationCode' => 'LOS',
            'destinationLocationCode' => 'NBO',
            'departureDate' => '2023-09-12',
            'adults' => 1
        ];
        $dat = http_build_query($data);
        $url .= '?' . $dat;
       
        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $access_token
            ])->get($url);

            $flightData = $response->json();
            $flights = $flightData['data'];

            $perPage = 10;
            $currentPage = $request->input('page', 1);
            $pagedFlights = collect($flights)->slice(($currentPage - 1) * $perPage, $perPage)->all();

            $flightData = new LengthAwarePaginator(
                $pagedFlights,
                count($flights),
                $perPage,
                $currentPage,
                ['path' => $request->url(), 'query' => $request->query()]
            );
            Session::put('flightData', $flightData);

            Log::info($flightData);
            return view('flight.index', compact('flightData'));
        } catch (RequestException $exception) {
            dd($exception);
        }
    }






    public function showResults(Request $request)
    {
        $results = $request->input('results');

        return view('flight.results', compact('results'));
    }
}
