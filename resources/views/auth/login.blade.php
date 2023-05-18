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
                    <form method="POST" action="{{ route('login') }}">
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
                                    <input type="email" type="email" name="user_email" :value="old('user_email')" required autocomplete="username">
                                    <label class="lh-1 text-14 text-light-1">Email</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-input ">
                                    <input type="password" name="user_pass" required autocomplete="new-password">
                                    <label class="lh-1 text-14 text-light-1">Password</label>
                                </div>
                            </div>

                            <a href="{{ route('password.request') }}" class="text-14 fw-500 text-blue-1 underline">Forgot your password?</a>

                            <div class="button py-20 -dark-1 bg-blue-1 text-white">
                                <button type="submit" class=" text-white">
                                    Sign In
                                </button>
                            </div>
                            <div class="col-6">
                            Don't have an account yet?<a href="{{ route('register') }}" class="text-14 fw-500 text-blue-1 underline"> Sign up for free</a>
                            </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

@endsection