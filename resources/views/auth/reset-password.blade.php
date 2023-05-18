@extends('layouts.main')
@section('title', "Login to Metrip")
@section('description', "Discover amazing places at exclusive deals")
@section('keyword', "travel, airline, airport, places, google place, map, flight, tickets, booking, embassy, book")
@section('main')
<section class="layout-pt-lg layout-pb-lg bg-blue-2">
    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="px-50 py-50 sm:px-20 sm:py-20 bg-white shadow-4 rounded-4">


                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- <div class="block">
                            <x-label for="email" value="{{ __('Email') }}" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                        </div>

                        <div class="mt-4">
                            <x-label for="password" value="{{ __('Password') }}" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div> -->
                        <div class="col-12">
                            <div class="form-input ">
                                <input type="email" type="email" name="user_email" :value="old('user_email')" required autocomplete="username">
                                <label class="lh-1 text-14 text-light-1">Email</label>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="form-input ">
                                <input type="password"  name="user_pass" :value="old('user_pass')" required autocomplete="username">
                                <label class="lh-1 text-14 text-light-1">Password</label>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="form-input ">
                                <input type="password" type="email" name="user_pass_confirmation" :value="old('user_pass_confirmation')" required autocomplete="username">
                                <label class="lh-1 text-14 text-light-1">Confirm Password</label>
                            </div>
                        </div>

                        <!-- <div class="mt-4">
                            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div> -->

                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Reset Password') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection