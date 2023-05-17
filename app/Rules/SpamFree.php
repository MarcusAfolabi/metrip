<?php

namespace App\Rules;

use Closure;
use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\ValidationRule;

class SpamFree implements ValidationRule
{
    
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
    public function passes($attribute, $value)
    {
        $client = new Client();

        $response = $client->get('https://api.stopforumspam.org/api', [
            'query' => [
                'email' => $value,
                'f' => 'json',
            ],
        ]);

        $data = json_decode($response->getBody(), true);

        return $data['success'] && $data['email']['appears'] === false;
    }

    public function message()
    {
        return 'The email address entered is from a known spam source.';
    }
}
