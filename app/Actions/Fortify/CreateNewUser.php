<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Mail\WelcomeMail;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Notifications\AdminNotification;
use Egulias\EmailValidator\Validation\RFCValidation;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notification;
use Laravel\Fortify\Contracts\CreatesNewUsers;
// use Odenktools\Scoutapm\Tests\Fixtures\Rules\RfcValidation;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    // public function create(array $input): User
    // {
    //     Validator::make($input, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'rfc', 'dns', 'max:255', 'unique:users'],
    //         'password' => $this->passwordRules(),
    //         'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
    //     ])->validate();

    //     return User::create([
    //         'name' => $input['name'],
    //         'email' => $input['email'],
    //         'password' => Hash::make($input['password']),
    //     ]);
    // }
    public function create(array $input): User
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'user_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'country' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'dial' => ['required', 'numeric'],
            'zipcode' => ['required', 'string', 'max:255'],
            'userid' => ['required', 'string', 'max:255'],
            'user_password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $user = User::create([
            'first_name' => $input['first_name'],
            'last_name' => $input['last_name'],
            'user_email' => $input['user_email'],
            'country' => $input['country'],
            'state' => $input['state'],
            'city' => $input['city'],
            'dial' => $input['dial'],
            'zipcode' => $input['zipcode'],
            'userid' => $input['userid'], 
            'user_password' => Hash::make($input['user_password']),
        ]);

        // Send welcome email to the newly registered user
        Mail::to($user->user_email)->send(new WelcomeMail($user));

        // Send notification to the admin email
        Notification::route('mail', [
            'info@metrip.com' => 'Alert! New User registerd',
        ])->notify(new AdminNotification($user));

        return $user;
    }
}
