@extends('layouts.main')
@section('title', "Flight around the world")
@section('description', "Search the latest flight and enjoy this season with family and friends")
@section('main')
<section class="layout-pt-md layout-pb-md bg-light-2">
    <div class="container">
        <div class="row y-gap-30">

            <div class="d-none d-md-block col-xl-3 col-lg-4">

            </div>

            <div class="col-xl-12 col-lg-12">
                <div class="row y-gap-10 justify-between items-center">
                    <div class="col-auto">
                        <button class="button -blue-1 h-40 px-30 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                            <i class="icon-up-down text-14 mr-10"></i>
                            <span class="fw-500">{{ $flightData->count() }} flights </span> &nbsp;found
                        </button>
                    </div>
                </div>


                <div class="js-accordion">

                    @foreach ($flightData as $flight)
                    @php
                    $departureTime = \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['departure']['at']);
                    $arrivalTime = \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['arrival']['at']);

                    $departureTime2 = \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['departure']['at']);
                    $arrivalTime2 = \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['arrival']['at']);


                    $duration = $arrivalTime->diff($departureTime);
                    $duration2 = $arrivalTime2->diff($departureTime2);
                    $hours = $duration->h;
                    $minutes = $duration->i;

                    $hours2 = $duration2->h;
                    $minutes2 = $duration2->i;
                    @endphp
                    <div class="accordion__item py-30 px-30 bg-white rounded-4 base-tr mt-30" data-x="flight-item-1" data-x-toggle="shadow-2">
                        <div class="row y-gap-30 justify-between">
                            <!-- Departure details -->
                            <div class="col">
                                <div class="row y-gap-10 items-center">
                                    <!-- Departure time and airport code -->
                                    <div class="col-auto">
                                        <div class="lh-15 fw-500">{{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['departure']['at'])->format('h:i A') }}</div>
                                        <div class="text-15 lh-15 text-light-1">{{ $flight['itineraries'][0]['segments'][0]['departure']['iataCode'] }}</div>
                                    </div>

                                    <!-- Flight duration and number of stops -->
                                    <div class="col text-center">
                                        <div class="flightLine">
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <!-- <div class="text-15 lh-15 text-light-1 mt-10">{{ $flight['itineraries'][0]['duration'] }}</div> -->
                                        <div class="text-15 lh-15 text-light-1 mt-10">
                                            {{ $hours }}h {{ $minutes }}m
                                        </div>
                                    </div>

                                    <!-- Arrival time and airport code -->
                                    <div class="col-auto">
                                        <div class="lh-15 fw-500">{{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['arrival']['at'])->format('h:i A') }}</div>
                                        <div class="text-15 lh-15 text-light-1">{{ $flight['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Price and deals information -->
                            <div class="col-md-auto">
                                <div class="d-flex items-center h-full">
                                    <div class="pl-30 border-left-light h-full md:d-none"></div>

                                    <div>
                                        <div class="text-right md:text-left mb-10">
                                            <div class="text-18 lh-16 fw-500">{{ $flight['price']['currency'] }} {{ $flight['price']['total'] }}</div>
                                            <div class="text-15 lh-16 text-light-1">{{ $flight['numberOfBookableSeats'] }} deals</div>
                                        </div>

                                        <div class="accordion__button">
                                            <button class="button -dark-1 px-30 h-50 bg-blue-1 text-white" data-x-click="flight-item-1">
                                                View Deal <div class="icon-arrow-top-right ml-15"></div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion__content">
                            <div class="border-light rounded-4 mt-30">
                                <div class="py-20 px-30">
                                    <div class="row justify-between items-center">
                                        <div class="col-auto">
                                            <div class="fw-500 text-dark-1">Depart • {{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['departure']['at'])->format('D, M j') }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-14 text-light-1"> {{ $hours2 }}h {{ $minutes2 }}m</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-30 px-30 border-top-light">
                                    <div class="row y-gap-10 justify-between">
                                        <div class="col-auto">
                                            <div class="d-flex items-center mb-15">
                                                <div class="w-28 d-flex justify-center mr-15">
                                                    <img src="{{ asset('img/flights/1.png') }}" alt="image">
                                                </div>

                                                <div class="text-14 text-light-1">Pegasus Airlines 1169</div>
                                            </div>

                                            <div class="relative z-0">
                                                <div class="border-line-2"></div>

                                                <div class="d-flex items-center">
                                                    <div class="w-28 d-flex justify-center mr-15">
                                                        <div class="size-10 border-light rounded-full bg-white"></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="lh-14 fw-500">{{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['departure']['at'])->format('h:i A') }}</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="lh-14 fw-500">{{ $flight['itineraries'][0]['segments'][0]['departure']['iataCode'] }}</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex items-center mt-15">
                                                    <div class="w-28 d-flex justify-center mr-15">
                                                        <img src="{{ asset('img/flights/plane.svg') }}" alt="image">
                                                    </div>


                                                    <div class="text-15 lh-15 text-light-1 mt-10">
                                                        {{ $hours2 }}h {{ $minutes2 }}m
                                                    </div>

                                                    <!-- <div class="text-14 text-light-1">{{ $flight['itineraries'][0]['segments'][0]['duration'] }}</div> -->
                                                </div>

                                                <div class="d-flex items-center mt-15">
                                                    <div class="w-28 d-flex justify-center mr-15">
                                                        <div class="size-10 border-light rounded-full bg-border"></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="lh-14 fw-500">{{ \Carbon\Carbon::parse($flight['itineraries'][0]['segments'][0]['arrival']['at'])->format('h:i A') }}</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="lh-14 fw-500">{{ $flight['itineraries'][0]['segments'][0]['arrival']['iataCode'] }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto text-right md:text-left">
                                            <div class="text-14 text-light-1">Cabin: {{ $flight['travelerPricings'][0]['fareOption'] }}</div>
                                            <div class="text-14 mt-15 md:mt-5">
                                                Traveler Type: {{ $flight['travelerPricings'][0]['travelerType'] }}<br>
                                                Bags: {{ $flight['travelerPricings'][0]['fareDetailsBySegment'][0]['includedCheckedBags']['quantity'] }}<br>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- <div class="border-light rounded-4 mt-20">
                                <div class="py-20 px-30">
                                    <div class="row justify-between items-center">
                                        <div class="col-auto">
                                            <div class="fw-500 text-dark-1">Depart • Sat, Mar 26</div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="text-14 text-light-1">4h 05m</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-30 px-30 border-top-light">
                                    <div class="row y-gap-10 justify-between">
                                        <div class="col-auto">
                                            <div class="d-flex items-center mb-15">
                                                <div class="w-28 d-flex justify-center mr-15">
                                                    <img src="{{ asset('img/flights/1.png') }}" alt="image">
                                                </div>

                                                <div class="text-14 text-light-1">Pegasus Airlines 1169</div>
                                            </div>

                                            <div class="relative z-0">
                                                <div class="border-line-2"></div>

                                                <div class="d-flex items-center">
                                                    <div class="w-28 d-flex justify-center mr-15">
                                                        <div class="size-10 border-light rounded-full bg-white"></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="lh-14 fw-500">8:25 am</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="lh-14 fw-500">Istanbul Sabiha Gokcen (SAW)</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex items-center mt-15">
                                                    <div class="w-28 d-flex justify-center mr-15">
                                                        <img src="{{ asset('img/flights/plane.svg') }}" alt="image">
                                                    </div>

                                                    <div class="text-14 text-light-1">4h 05m</div>
                                                </div>

                                                <div class="d-flex items-center mt-15">
                                                    <div class="w-28 d-flex justify-center mr-15">
                                                        <div class="size-10 border-light rounded-full bg-border"></div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="lh-14 fw-500">9:30 am</div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <div class="lh-14 fw-500">London Stansted (STN)</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-auto text-right md:text-left">
                                            <div class="text-14 text-light-1">Economy</div>
                                            <div class="text-14 mt-15 md:mt-5">
                                                Airbus A320neo (Narrow-body jet)<br>
                                                Wi-Fi available<br>
                                                USB outlet
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <!-- More flight details can be added here -->
                    </div>
                    @endforeach


                </div> 
                
            </div>
        </div>
    </div>
</section>
@endsection