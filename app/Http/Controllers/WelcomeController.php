<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Exception\GuzzleException;

class WelcomeController extends Controller
{
    public function index(Client $client)
    {
        $url = 'https://test.api.amadeus.com/v1/security/oauth2/token';
        try {
            $response = $client->post($url, [
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => 'qje0ZBZcQE4w333AJBDTAMFXOPMP0ntA',
                    'client_secret' => 'G0HfszLGcJ7ysdCt'
                ]
            ]);
            $response = $response->getBody();
            $access_token = json_decode($response)->access_token;
            // dd($access_token);
            Session::put('access_token', $access_token);
            return view('welcome', compact('access_token'));
        } catch (GuzzleException $exception) {
            dd($exception);
        }
    }
    // public function index(Client $client)
    // {
    //     $url = 'https://test.api.amadeus.com/v1/security/oauth2/token';

    //     try {
    //         $response = $client->post($url, [
    //             'headers' => [
    //                 'Accept' => 'application/json',
    //             ],
    //             'form_params' => [
    //                 'grant_type' => 'client_credentials',
    //                 'client_id' => env('AMADEUS_CLIENT_ID'),
    //                 'client_secret' => env('AMADEUS_CLIENT_SECRET'),
    //             ],
    //         ]);

    //         $responseBody = json_decode($response->getBody());

    //         if (isset($responseBody->access_token)) {
    //             // Instead of directly storing in session, you could use cache
    //             cache(['access_token' => $responseBody->access_token], now()->addSeconds($responseBody->expires_in));

    //             return view('welcome', ['access_token' => $responseBody->access_token]);
    //         } else {
    //             // Handle API response error gracefully
    //             // You can redirect to an error page or show an error message
    //         }
    //     } catch (GuzzleException $exception) {
    //         // Handle Guzzle exceptions
    //     }
    // }
}
