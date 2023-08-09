@extends('layouts.main')
@section('title', "Flight around the world")
@section('description', "Search the latest flight and enjoy this season with family and friends")
@section('main')

<section class="pt-1 pb-40">
    <div class="container"> 
        <div class="d-none d-sm-block mainSearch -col-5 border-light rounded-4 pr-20 py-20 lg:px-20 lg:pt-5 lg:pb-20 mt-15">
            <div class="button-grid items-center">


                <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                    <div data-x-dd-click="searchMenu-loc">
                        <h4 class="text-15 fw-500 ls-2 lh-16">Flying From</h4>

                        <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="City or Airport" class="js-search js-dd-focus" />
                        </div>
                    </div> 
                </div>


                <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                    <div data-x-dd-click="searchMenu-loc">
                        <h4 class="text-15 fw-500 ls-2 lh-16">Flying To</h4>

                        <div class="text-15 text-light-1 ls-2 lh-16">
                            <input autocomplete="off" type="search" placeholder="City or Airport" class="js-search js-dd-focus" />
                        </div>
                    </div> 
                </div>


                <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar">

                    <div data-x-dd-click="searchMenu-date">
                        <h4 class="text-15 fw-500 ls-2 lh-16">Depart</h4>

                        <div class="text-15 text-light-1 ls-2 lh-16">
                            <span class="js-first-date">Wed 2 Mar</span>
                            -
                            <span class="js-last-date">Fri 11 Apr</span>
                        </div>
                    </div> 
                </div>


                <div class="searchMenu-date px-30 lg:py-20 lg:px-0 js-form-dd js-calendar">

                    <div data-x-dd-click="searchMenu-date">
                        <h4 class="text-15 fw-500 ls-2 lh-16">Return</h4>

                        <div class="text-15 text-light-1 ls-2 lh-16">
                            <span class="js-first-date">Wed 2 Mar</span>
                            -
                            <span class="js-last-date">Fri 11 Apr</span>
                        </div>
                    </div> 
                </div>


                <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

                    <div data-x-dd-click="searchMenu-guests">
                        <h4 class="text-15 fw-500 ls-2 lh-16">Travellers</h4>

                        <div class="text-15 text-light-1 ls-2 lh-16">
                            <span class="js-count-adult">2</span> adults
                            -
                            <span class="js-count-child">1</span> childeren
                            -
                            <span class="js-count-room">1</span> room
                        </div>
                    </div> 
                </div>


                <div class="button-item">
                    <button class="mainSearch__submit button -blue-1 py-15 px-35 h-60 col-12 rounded-4 bg-dark-3 text-white">
                        <i class="icon-search text-20 mr-10"></i>
                        Search
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="layout-pt-md layout-pb-md bg-light-2">
    <div class="container">
        <div class="row y-gap-30">
            <div class="d-none d-md-block col-xl-3 col-lg-4">
                <aside class="sidebar py-20 px-20 rounded-4 bg-white">
                    <div class="row y-gap-40">
                        <div class="sidebar__item -no-border">
                            <h5 class="text-18 fw-500 mb-10">Stops</h5>
                            <div class="sidebar-checkbox">

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Nonstop</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">1 Stop</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">2+ Stops</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Cabin</h5>
                            <div class="sidebar-checkbox">

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Basic Economy</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Economy</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Mixed</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item pb-30">
                            <h5 class="text-18 fw-500 mb-20">Flight Times</h5>
                            <div class="row x-gap-10 y-gap-30">

                                <div class="col-12">
                                    <div class="js-time-rangeSlider">
                                        <div class="text-14 fw-500">Take-off Boston (BOS)</div>

                                        <div class="d-flex justify-between mb-15">
                                            <div class="text-14 text-light-1">
                                                Tue <span class="js-lower"></span>
                                            </div>

                                            <div class="text-14 text-light-1 js-upper"></div>
                                        </div>

                                        <div class="js-slider"></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="js-time-rangeSlider">
                                        <div class="text-14 fw-500">Landing London (LON)</div>

                                        <div class="d-flex justify-between mb-15">
                                            <div class="text-14 text-light-1">
                                                Tue <span class="js-lower"></span>
                                            </div>

                                            <div class="text-14 text-light-1 js-upper"></div>
                                        </div>

                                        <div class="js-slider"></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="js-time-rangeSlider">
                                        <div class="text-14 fw-500">Take-off London (LON)</div>

                                        <div class="d-flex justify-between mb-15">
                                            <div class="text-14 text-light-1">
                                                Tue <span class="js-lower"></span>
                                            </div>

                                            <div class="text-14 text-light-1 js-upper"></div>
                                        </div>

                                        <div class="js-slider"></div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="js-time-rangeSlider">
                                        <div class="text-14 fw-500">Landing Boston (BOS)</div>

                                        <div class="d-flex justify-between mb-15">
                                            <div class="text-14 text-light-1">
                                                Tue <span class="js-lower"></span>
                                            </div>

                                            <div class="text-14 text-light-1 js-upper"></div>
                                        </div>

                                        <div class="js-slider"></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Airlines</h5>
                            <div class="sidebar-checkbox">

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Air France</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Aer Lingus</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Air Canada</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$21</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Air Europa</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$79</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Turkish Airlines</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$900</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Alliance</h5>
                            <div class="sidebar-checkbox">

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">oneworld</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">SkyTeam</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">Star Alliance</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$21</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Departing from</h5>
                            <div class="sidebar-checkbox">

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">BOS Boston</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">PVD Providence</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item">
                            <h5 class="text-18 fw-500 mb-10">Arriving at</h5>
                            <div class="sidebar-checkbox">

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">LCY London</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$92</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center justify-between">
                                    <div class="col-auto">

                                        <div class="d-flex items-center">
                                            <div class="form-checkbox ">
                                                <input type="checkbox" name="name">
                                                <div class="form-checkbox__mark">
                                                    <div class="form-checkbox__icon icon-check"></div>
                                                </div>
                                            </div>

                                            <div class="text-15 ml-10">LGW London</div>

                                        </div>

                                    </div>

                                    <div class="col-auto">
                                        <div class="text-15 text-light-1">$45</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="sidebar__item pb-30">
                            <h5 class="text-18 fw-500 mb-10">Price</h5>
                            <div class="row x-gap-10 y-gap-30">
                                <div class="col-12">
                                    <div class="js-price-rangeSlider">
                                        <div class="text-14 fw-500"></div>

                                        <div class="d-flex justify-between mb-20">
                                            <div class="text-15 text-dark-1">
                                                <span class="js-lower"></span>
                                                -
                                                <span class="js-upper"></span>
                                            </div>
                                        </div>

                                        <div class="px-5">
                                            <div class="js-slider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </aside>
            </div>

            <div class="col-xl-9 col-lg-8">
                <div class="row y-gap-10 justify-between items-center">
                    <div class="col-auto">
                        <div class="text-18"><span class="fw-500">3,269 flights</span> in Europe</div>
                    </div>

                    <div class="col-auto">
                        <button class="button -blue-1 h-40 px-30 rounded-100 bg-blue-1-05 text-15 text-blue-1">
                            <i class="icon-up-down text-14 mr-10"></i>
                            Sort
                        </button>
                    </div>
                </div>


                <div class="js-accordion">
                    <div class="accordion__item py-30 px-30 bg-white rounded-4 base-tr mt-30" data-x="flight-item-1" data-x-toggle="shadow-2">
                        <div class="row y-gap-30 justify-between">
                            <div class="col">
                                <div class="row y-gap-10 items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/1.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center pt-30">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/2.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <div class="d-flex items-center h-full">
                                    <div class="pl-30 border-left-light h-full md:d-none"></div>

                                    <div>
                                        <div class="text-right md:text-left mb-10">
                                            <div class="text-18 lh-16 fw-500">US$934</div>
                                            <div class="text-15 lh-16 text-light-1">16 deals</div>
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                            <div class="border-light rounded-4 mt-20">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                        </div>
                    </div>
                </div>

                <div class="js-accordion">
                    <div class="accordion__item py-30 px-30 bg-white rounded-4 base-tr mt-30" data-x="flight-item-2" data-x-toggle="shadow-2">
                        <div class="row y-gap-30 justify-between">
                            <div class="col">
                                <div class="row y-gap-10 items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/1.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center pt-30">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/2.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <div class="d-flex items-center h-full">
                                    <div class="pl-30 border-left-light h-full md:d-none"></div>

                                    <div>
                                        <div class="text-right md:text-left mb-10">
                                            <div class="text-18 lh-16 fw-500">US$934</div>
                                            <div class="text-15 lh-16 text-light-1">16 deals</div>
                                        </div>

                                        <div class="accordion__button">
                                            <button class="button -dark-1 px-30 h-50 bg-blue-1 text-white" data-x-click="flight-item-2">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                            <div class="border-light rounded-4 mt-20">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                        </div>
                    </div>
                </div>

                <div class="js-accordion">
                    <div class="accordion__item py-30 px-30 bg-white rounded-4 base-tr mt-30" data-x="flight-item-3" data-x-toggle="shadow-2">
                        <div class="row y-gap-30 justify-between">
                            <div class="col">
                                <div class="row y-gap-10 items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/1.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center pt-30">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/2.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <div class="d-flex items-center h-full">
                                    <div class="pl-30 border-left-light h-full md:d-none"></div>

                                    <div>
                                        <div class="text-right md:text-left mb-10">
                                            <div class="text-18 lh-16 fw-500">US$934</div>
                                            <div class="text-15 lh-16 text-light-1">16 deals</div>
                                        </div>

                                        <div class="accordion__button">
                                            <button class="button -dark-1 px-30 h-50 bg-blue-1 text-white" data-x-click="flight-item-3">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                            <div class="border-light rounded-4 mt-20">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                        </div>
                    </div>
                </div>

                <div class="js-accordion">
                    <div class="accordion__item py-30 px-30 bg-white rounded-4 base-tr mt-30" data-x="flight-item-4" data-x-toggle="shadow-2">
                        <div class="row y-gap-30 justify-between">
                            <div class="col">
                                <div class="row y-gap-10 items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/1.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center pt-30">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/2.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <div class="d-flex items-center h-full">
                                    <div class="pl-30 border-left-light h-full md:d-none"></div>

                                    <div>
                                        <div class="text-right md:text-left mb-10">
                                            <div class="text-18 lh-16 fw-500">US$934</div>
                                            <div class="text-15 lh-16 text-light-1">16 deals</div>
                                        </div>

                                        <div class="accordion__button">
                                            <button class="button -dark-1 px-30 h-50 bg-blue-1 text-white" data-x-click="flight-item-4">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                            <div class="border-light rounded-4 mt-20">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                        </div>
                    </div>
                </div>

                <div class="js-accordion">
                    <div class="accordion__item py-30 px-30 bg-white rounded-4 base-tr mt-30" data-x="flight-item-5" data-x-toggle="shadow-2">
                        <div class="row y-gap-30 justify-between">
                            <div class="col">
                                <div class="row y-gap-10 items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/1.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center pt-30">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/2.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <div class="d-flex items-center h-full">
                                    <div class="pl-30 border-left-light h-full md:d-none"></div>

                                    <div>
                                        <div class="text-right md:text-left mb-10">
                                            <div class="text-18 lh-16 fw-500">US$934</div>
                                            <div class="text-15 lh-16 text-light-1">16 deals</div>
                                        </div>

                                        <div class="accordion__button">
                                            <button class="button -dark-1 px-30 h-50 bg-blue-1 text-white" data-x-click="flight-item-5">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                            <div class="border-light rounded-4 mt-20">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                        </div>
                    </div>
                </div>

                <div class="js-accordion">
                    <div class="accordion__item py-30 px-30 bg-white rounded-4 base-tr mt-30" data-x="flight-item-6" data-x-toggle="shadow-2">
                        <div class="row y-gap-30 justify-between">
                            <div class="col">
                                <div class="row y-gap-10 items-center">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/1.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>

                                <div class="row y-gap-10 items-center pt-30">
                                    <div class="col-sm-auto">
                                        <img class="size-40" src="img/flightIcons/2.png" alt="image">
                                    </div>

                                    <div class="col">
                                        <div class="row x-gap-20 items-end">
                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">14:00</div>
                                                <div class="text-15 lh-15 text-light-1">SAW</div>
                                            </div>

                                            <div class="col text-center">
                                                <div class="flightLine">
                                                    <div></div>
                                                    <div></div>
                                                </div>
                                                <div class="text-15 lh-15 text-light-1 mt-10">Nonstop</div>
                                            </div>

                                            <div class="col-auto">
                                                <div class="lh-15 fw-500">22:00</div>
                                                <div class="text-15 lh-15 text-light-1">STN</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-auto">
                                        <div class="text-15 text-light-1 px-20 md:px-0">4h 05m</div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-auto">
                                <div class="d-flex items-center h-full">
                                    <div class="pl-30 border-left-light h-full md:d-none"></div>

                                    <div>
                                        <div class="text-right md:text-left mb-10">
                                            <div class="text-18 lh-16 fw-500">US$934</div>
                                            <div class="text-15 lh-16 text-light-1">16 deals</div>
                                        </div>

                                        <div class="accordion__button">
                                            <button class="button -dark-1 px-30 h-50 bg-blue-1 text-white" data-x-click="flight-item-6">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                            <div class="border-light rounded-4 mt-20">
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
                                                    <img src="img/flights/1.png" alt="image">
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
                                                        <img src="img/flights/plane.svg" alt="image">
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
                            </div>

                        </div>
                    </div>
                </div>


                <div class="border-top-light mt-30 pt-30">
                    <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
                        <div class="col-auto md:order-1">
                            <button class="button -blue-1 size-40 rounded-full border-light">
                                <i class="icon-chevron-left text-12"></i>
                            </button>
                        </div>

                        <div class="col-md-auto md:order-3">
                            <div class="row x-gap-20 y-gap-20 items-center md:d-none">

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">1</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">3</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">5</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">...</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">20</div>

                                </div>

                            </div>

                            <div class="row x-gap-10 y-gap-20 justify-center items-center d-none md:d-flex">

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">1</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                                </div>

                                <div class="col-auto">

                                    <div class="size-40 flex-center rounded-full">3</div>

                                </div>

                            </div>

                            <div class="text-center mt-30 md:mt-10">
                                <div class="text-14 text-light-1">1 – 20 of 300+ properties found</div>
                            </div>
                        </div>

                        <div class="col-auto md:order-2">
                            <button class="button -blue-1 size-40 rounded-full border-light">
                                <i class="icon-chevron-right text-12"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection