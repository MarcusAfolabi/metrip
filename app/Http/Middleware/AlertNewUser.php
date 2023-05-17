<?php

namespace App\Http\Middleware;

use App\Notifications\NewUserAlert;
use Closure;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Notification;

class AlertNewUser
{
    public function handle($request, Closure $next)
    {
        $sessionId = $request->session()->getId();

        // Check if the session ID is new or already existing in the cache
        if (!Cache::has($sessionId)) {
            // Perform the API request and retrieve IP details
            $ipAddress = $request->ip();
            $ipDetails = $this->getIPDetails($ipAddress);

            // Send the alert notification
            $notification = new NewUserAlert(
                $sessionId,
                $ipAddress,
                $ipDetails['country'],
                $ipDetails['city'],
                $ipDetails['region']
            );

            $adminEmail = 'info@metrip.com'; // Replace with the admin's email address
            Notification::route('mail', $adminEmail)->notify($notification);

            // Cache the session ID to avoid sending multiple alerts for the same session
            Cache::put($sessionId, true, now()->addHours(24));
        }

        return $next($request);
    }

    private function getIPDetails($ipAddress)
    {
        $cacheKey = 'ip_details_' . $ipAddress;

        // Check if the IP details exist in the cache
        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }

        // Perform the API request and retrieve the IP details
        $url = 'https://ipwho.is/' . $ipAddress;
        $response = file_get_contents($url);
        $data = json_decode($response, true);

        $ipDetails = [
            'country' => isset($data['country']) ? $data['country'] : 'Unknown',
            'city' => isset($data['city']) ? $data['city'] : '',
            'region' => isset($data['region']) ? $data['region'] : '',
        ];

        // Store the IP details in the cache for future use
        Cache::put($cacheKey, $ipDetails, now()->addHours(24));

        return $ipDetails;
    }
}
