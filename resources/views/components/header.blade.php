<div data-anim="fade" class="header__container px-30">
    <div class="row justify-between items-center">

        <div class="col-auto">
            <div class="d-flex items-center">
                <a href="/" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                    <img src="{{ asset('metrip_log.svg') }}" alt="logo icon">
                    <img src="{{ asset('metrip_log.svg') }}" alt="logo icon">
                </a>
                <div class="header-menu" data-x="mobile-menu" data-x-toggle="is-menu-active">
                    <div class="mobile-overlay"></div>

                    <div class="header-menu__content">
                        <div class="mobile-bg js-mobile-bg"></div>

                        <div class="menu js-navList">
                            <ul class="menu__nav text-dark-1 -is-active">
                                <li class="menu-item">
                                    <a data-barba href="{{ route('flight.index') }}">
                                        <span class="mr-10">Flight</span>
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a data-barba href="{{ route('hotel.index') }}">
                                        <span class="mr-10">Hotel</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('tour.index') }}">
                                        Tour
                                    </a>
                                </li>

                                <li class="menu-item">
                                    <a data-barba href="#">
                                        <span class="mr-10">Holiday Package</span>
                                    </a>
                                </li> 
                            </ul>
                        </div>

                        <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-auto">
            <div class="d-flex items-center">

                <div class="row x-gap-20 items-center xxl:d-none">
                    <div class="col-auto">
                        <button class="d-flex items-center text-14 text-dark-1" data-x-click="currency">
                            <span class="js-currencyMenu-mainTitle">USD</span>
                        </button>
                    </div>

                    <div class="col-auto">
                        <div class="w-1 h-20 bg-black-20"></div>
                    </div>

                    <div class="col-auto">

                    </div>
                </div>


                <div class="d-flex items-center ml-20 is-menu-opened-hide md:d-none">
                    <a href="{{ route('login') }}" class="button px-30 fw-400 text-14 -outline-blue-1 h-50 text-blue-1 ml-20">Sign In / Register</a>
                </div>

                <div class="d-none xl:d-flex x-gap-20 items-center pl-30" data-x="header-mobile-icons" data-x-toggle="text-white">
                    <div><a href="{{ route('login') }}" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                    <div><button class="d-flex items-center icon-menu text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
                </div>
            </div>
        </div>

    </div>
</div>