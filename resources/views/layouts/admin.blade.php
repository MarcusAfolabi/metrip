<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="/metrip.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>@yield('title') - Travel, Flight, Hotel, Tour and Visa Booking</title>
    <meta content="description" name="@yield('description')" />
    <style>
        #google-sign-in-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }
    </style>

</head>

<body data-barba="wrapper">
    <div class="header-margin"></div>

    <header data-add-bg="" class="header -dashboard bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
        <x-header :header />
    </header>
    <div class="dashboard" data-x="dashboard" data-x-toggle="-is-sidebar-open">
        <div class="dashboard__sidebar bg-white scroll-bar-1">
            <div class="sidebar -dashboard">

                <div class="sidebar__item ">

                    <a href="db-dashboard.html" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="img/dashboard/sidebar/compass.svg" alt="image" class="mr-15">
                        Dashboard
                    </a>

                </div>

                <div class="sidebar__item ">


                    <a href="#" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="img/dashboard/sidebar/booking.svg" alt="image" class="mr-15">
                        Booking Manager
                    </a>


                </div>

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="img/dashboard/sidebar/hotel.svg" alt="image" class="mr-10">
                                        Manage Hotel
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="#" class="text-15">All Hotels</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Add Hotel</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Recovery</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="img/dashboard/sidebar/map.svg" alt="image" class="mr-10">
                                        Manage Tour
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="#" class="text-15">All Hotels</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Add Hotel</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Recovery</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="img/dashboard/sidebar/sneakers.svg" alt="image" class="mr-10">
                                        Manage Activity
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="#" class="text-15">All Hotels</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Add Hotel</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Recovery</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="img/dashboard/sidebar/house.svg" alt="image" class="mr-10">
                                        Manage Holiday Rental
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="#" class="text-15">All Hotels</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Add Hotel</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Recovery</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="img/dashboard/sidebar/taxi.svg" alt="image" class="mr-10">
                                        Manage Car
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="#" class="text-15">All Hotels</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Add Hotel</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Recovery</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="img/dashboard/sidebar/canoe.svg" alt="image" class="mr-10">
                                        Manage Cruise
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="#" class="text-15">All Hotels</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Add Hotel</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Recovery</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sidebar__item ">


                    <div class="accordion -db-sidebar js-accordion">
                        <div class="accordion__item">
                            <div class="accordion__button">
                                <div class="sidebar__button col-12 d-flex items-center justify-between">
                                    <div class="d-flex items-center text-15 lh-1 fw-500">
                                        <img src="img/dashboard/sidebar/airplane.svg" alt="image" class="mr-10">
                                        Manage Flights
                                    </div>
                                    <div class="icon-chevron-sm-down text-7"></div>
                                </div>
                            </div>

                            <div class="accordion__content">
                                <ul class="list-disc pt-15 pb-5 pl-40">

                                    <li>
                                        <a href="#" class="text-15">All Hotels</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Add Hotel</a>
                                    </li>

                                    <li>
                                        <a href="#" class="text-15">Recovery</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="sidebar__item ">


                    <a href="#" class="sidebar__button d-flex items-center text-15 lh-1 fw-500">
                        <img src="img/dashboard/sidebar/log-out.svg" alt="image" class="mr-15">
                        Logout
                    </a>


                </div>

            </div>

        </div>
        @yield('main')
        <footer class="footer -dashboard mt-60">
            <div class="footer__row row y-gap-10 items-center justify-between">
                <div class="col-auto">
                    <div class="row y-gap-20 items-center">
                        <div class="col-auto">
                            <div class="text-14 lh-14 mr-30">© 2023 Metrip. All rights reserved.</div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>