@extends('layouts.profile')
@section('title', "User Profile on Metrip")
@section('description', "Your best nearby travel solution")
@section('main')

<div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
    <div class="dashboard__sidebar bg-white scroll-bar-1">
        <div class="sidebar -dashboard">
            <div class="sidebar__item">
                <div class="sidebar__button -is-active">
                    <a href="db-dashboard.html" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{ asset('img/dashboard/sidebar/compass.svg') }}"  title="Metrip History" alt="image" class="mr-15">
                        Dashboard
                    </a>
                </div>
            </div>

            <div class="sidebar__item">
                <div class="sidebar__button ">
                    <a href="db-booking.html" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{ asset('img/dashboard/sidebar/booking.svg') }}"  title="Metrip Booking" alt="image" class="mr-15">
                        Booking History
                    </a>
                </div>
            </div>

            <div class="sidebar__item">
                <div class="sidebar__button ">
                    <a href="db-wishlist.html" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{ asset('img/dashboard/sidebar/bookmark.svg') }}" title="Metrip Bookmark"  alt="image" class="mr-15">
                        Wishlist
                    </a>
                </div>
            </div>

            <div class="sidebar__item">
                <div class="sidebar__button ">
                    <a href="db-settings.html" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{ asset('img/dashboard/sidebar/gear.svg') }}" alt="image" title="Metrip Settings" class="mr-15">
                        Settings
                    </a>
                </div>
            </div>

            <div class="sidebar__item">
                <div class="sidebar__button ">
                    <a href="#" class="d-flex items-center text-15 lh-1 fw-500">
                        <img src="{{ asset('img/dashboard/sidebar/log-out.svg') }}" alt="image" title="Logout Metrip" class="mr-15">
                        Logout
                    </a>
                </div>
            </div>

        </div>


    </div>

    <div class="dashboard__main">
        <div class="dashboard__content bg-light-2">
            <div class="row y-gap-20 justify-between items-end pb-60 lg:pb-40 md:pb-32">
                <div class="col-auto">

                    <h1 class="text-30 lh-14 fw-600">Dashboard</h1>
                    <div class="text-15 text-light-1">Hi Marcus, Good morning</div>

                </div>

                <div class="col-auto">

                </div>
            </div>


            <div class="row y-gap-30">
 

                <div class="col-xl-3 col-md-6">
                    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                        <div class="row y-gap-20 justify-between items-center">
                            <div class="col-auto">
                                <div class="fw-500 lh-14">Bookings</div>
                                <div class="text-26 lh-16 fw-600 mt-5">$8,100</div>
                                <div class="text-15 lh-14 text-light-1 mt-5">Total bookings</div>
                            </div>

                            <div class="col-auto">
                                <img src="{{ asset('img/dashboard/icons/3.svg') }}" title="Metrip Earnings" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                        <div class="row y-gap-20 justify-between items-center">
                            <div class="col-auto">
                                <div class="fw-500 lh-14">Services</div>
                                <div class="text-26 lh-16 fw-600 mt-5">22,786</div>
                                <div class="text-15 lh-14 text-light-1 mt-5">Total bookable services</div>
                            </div>

                            <div class="col-auto">
                                <img src="{{ asset('img/dashboard/icons/4.svg') }}" title="Metrip Earnings" alt="icon">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row y-gap-30 pt-20">
                <div class="col-xl-7 col-md-6">
                    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                        <div class="d-flex justify-between items-center">
                            <h2 class="text-18 lh-1 fw-500">
                                Recent News
                            </h2> 
                        </div>

                        <div class="pt-30">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-md-6">
                    <div class="py-30 px-30 rounded-4 bg-white shadow-3">
                        <div class="d-flex justify-between items-center">
                            <h2 class="text-18 lh-1 fw-500">
                                Recent Bookings
                            </h2>

                            <div class="">
                                <a href="#" class="text-14 text-blue-1 fw-500 underline">Load more</a>
                            </div>
                        </div>

                        <div class="overflow-scroll scroll-bar-1 pt-30">
                            <table class="table-2 col-12">
                                <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Item</th>
                                        <th>Total</th>
                                        <th>Paid</th>
                                        <th>Status</th>
                                        <th>Created At</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>#1</td>
                                        <td>New York<br> Discover America</td>
                                        <td class="fw-500">$130</td>
                                        <td>$0</td>
                                        <td>
                                            <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-yellow-4 text-yellow-3">Pending</div>
                                        </td>
                                        <td>04/04/2022<br>08:16</td>
                                    </tr>

                                    <tr>
                                        <td>#2</td>
                                        <td>New York<br> Discover America</td>
                                        <td class="fw-500">$130</td>
                                        <td>$0</td>
                                        <td>
                                            <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</div>
                                        </td>
                                        <td>04/04/2022<br>08:16</td>
                                    </tr>

                                    <tr>
                                        <td>#3</td>
                                        <td>New York<br> Discover America</td>
                                        <td class="fw-500">$130</td>
                                        <td>$0</td>
                                        <td>
                                            <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-red-3 text-red-2">Rejected</div>
                                        </td>
                                        <td>04/04/2022<br>08:16</td>
                                    </tr>

                                    <tr>
                                        <td>#4</td>
                                        <td>New York<br> Discover America</td>
                                        <td class="fw-500">$130</td>
                                        <td>$0</td>
                                        <td>
                                            <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</div>
                                        </td>
                                        <td>04/04/2022<br>08:16</td>
                                    </tr>

                                    <tr>
                                        <td>#5</td>
                                        <td>New York<br> Discover America</td>
                                        <td class="fw-500">$130</td>
                                        <td>$0</td>
                                        <td>
                                            <div class="rounded-100 py-4 text-center col-12 text-14 fw-500 bg-blue-1-05 text-blue-1">Confirmed</div>
                                        </td>
                                        <td>04/04/2022<br>08:16</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection