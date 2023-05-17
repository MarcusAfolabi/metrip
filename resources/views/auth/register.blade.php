@extends('layouts.main')
@section('title', "Register on Metrip")
@section('description', "Have access to your amazing places at exclusive deals")
@section('keyword', "register, airline, aircraft, air, bag, crew, travel, airline, airport, places, google place, map, flight, tickets, booking, embassy, book")
@section('main')
@php
$ipAddress = session('ip_address');

function hasInternet() {
$connected = @fsockopen("www.google.com", 80); // attempt to connect to Google
if ($connected) {
fclose($connected);
return true; // internet connection is available
}
return false; // internet connection is not available
}

if (hasInternet()) {
$url = "https://ipwho.is/{$ipAddress}";
$data = json_decode(file_get_contents($url));
$country = $data->country; // get the country name
$city = $data->city; // get the city name
$state = $data->region; // get the state name
$dial = $data->calling_code; // get the city name
$zipcode = $data->postal; // get the city name
}

$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$length = 8;

$userid = 'MT' . substr(str_shuffle($characters), 0, $length);


@endphp

<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf <div class="row y-gap-20">

                            <div class="col-12">
                                <button class="button col-12 -outline-red-1 text-red-1 py-15 rounded-8 mt-15">
                                    <i class="icon-apple text-15 mr-10"></i>
                                    Google
                                </button>
                            </div>

                            <div class="col-12">
                                <h1 class="text-22 fw-500 text-center">Or </h1>
                            </div>
                            <div class="col-12">
                                <x-validation-errors class="mb-4" />

                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                                @endif
                            </div>

                            <div class="col-12">
                                <div class="form-input ">
                                    <input type="text" type="name" name="first_name" :value="old('first_name')" required>
                                    <label class="lh-1 text-14 text-light-1">First Name</label>
                                </div>
                            </div>

                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="text" type="last_name" name="last_name" :value="old('last_name')" required autofocus autocomplete="name">
                                    <label class="lh-1 text-14 text-light-1">Last Name</label>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="email" type="email" name="user_email" :value="old('user_email')" required autocomplete="username" id="email">
                                    <label class="lh-1 text-14 text-light-1">Email</label>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="password" name="user_password" required autocomplete="new-password">
                                    <label class="lh-1 text-14 text-light-1">Password</label>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" required>
                                    <label class="lh-1 text-14 text-light-1">Confirm Password</label>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="d-flex ">
                                    <div class="form-checkbox mt-5">
                                        <input type="checkbox" id="remember_me" name="remember">
                                        <div class="form-checkbox__mark">
                                            <div class="form-checkbox__icon icon-check"></div>
                                        </div>
                                    </div>

                                    <div class="text-15 lh-15 text-light-1 ml-10">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Email me exclusive promotions.') }}</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                @if (hasInternet())
                                <input hidden name="country" value="{{ $country }}" />
                                <input hidden name="state" value="{{ $state }}" />
                                <input hidden name="city" value="{{ $city }}" />
                                <input hidden name="dial" value="{{ $dial }}" />
                                <input hidden name="zipcode" value="{{ $zipcode }}" />
                                <input hidden name="userid" value="{{ $userid }}" />
                                @endif
                            </div>


                            <div class="button py-20 -dark-1 bg-blue-1 text-white">
                                <button type="submit" class=" text-white">
                                    Sign Up
                                </button>
                            </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    </div>
</section>
<script>
function validateEmail(email) {
  // Regular expression pattern for email validation
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  
  // Return true if the email matches the pattern, otherwise return false
  return emailRegex.test(email);
}
var email = "example@example.com";
var isValid = validateEmail(email);
console.log(isValid); // Output: true
</script>
@endsection