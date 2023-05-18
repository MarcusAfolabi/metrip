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

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('Forgot your password? Just let us know your email address and we will email you a password reset link') }}
                    </div>

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif

                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="col-12 mt-3">
                            <div class="form-input ">
                                <input type="email" type="email" name="user_email" :value="old('user_email')" required autocomplete="username">
                                <label class="lh-1 text-14 text-light-1">Email</label>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button>
                                {{ __('Email Password Reset Link') }}
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