<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewUserAlert extends Notification implements ShouldQueue
{
    use Queueable;

    public $sessionId;
    public $ipAddress;
    public $country;
    public $city;
    public $region;

    public function __construct($sessionId, $ipAddress, $country, $city, $region)
    {
        $this->sessionId = $sessionId;
        $this->ipAddress = $ipAddress;
        $this->country = $country;
        $this->city = $city;
        $this->region = $region;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New User Alert')
            ->greeting('Hello Admin,')
            ->line('A new user has visited Metrip web app.')
            ->line('Session ID: ' . $this->sessionId)
            ->line('IP Address: ' . $this->ipAddress)
            ->line('Country: ' . $this->country)
            ->line('City: ' . $this->city)
            ->line('Region: ' . $this->region);
    }
}
