@extends('layouts.main')
@section('title', "Metrip")
@section('description', "Discover amazing places at exclusive deals")
@section('keyword', "travel, airline, airport, places, google place, map, flight, tickets, booking, embassy, book")
@section('main')

<x-validation-errors class="mb-4" />

@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif

<!-- <form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <x-label for="email" value="{{ __('Email') }}" />
        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    </div>

    <div class="mt-4">
        <x-label for="password" value="{{ __('Password') }}" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
    </div>

    <div class="block mt-4">
        <label for="remember_me" class="flex items-center">
            <x-checkbox id="remember_me" name="remember" />
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
        </a>
        @endif

        <x-button class="ml-4">
            {{ __('Log in') }}
        </x-button>
    </div>
</form> -->
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
                                <div class="form-input ">
                                    <input type="text" type="name" name="name" :value="old('name')" required>
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
                                    <input type="email" type="email" name="email" :value="old('email')" required autocomplete="username">
                                    <label class="lh-1 text-14 text-light-1">Email</label>
                                </div>

                            </div>

                            <div class="col-12">

                                <div class="form-input ">
                                    <input type="password" name="password" required autocomplete="new-password">
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
                            

                            <div class="col-12">

                                <a href="#" class="button py-20 -dark-1 bg-blue-1 text-white">
                                    Sign In <div class="icon-arrow-top-right ml-15"></div>
                                </a>

                            </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
    </div>
</section>

@endsection