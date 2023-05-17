<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />


<section data-anim-wrap class="masthead -type-3 relative z-5">
    <div data-anim-child="fade delay-1" class="masthead__bg bg-dark-3">
        <img src="img/bg/bg.png" alt="metrip background for host">
    </div>

    <div class="container">
        <div class="row justify-center">
            <div class="col-xl-10">
                <div class="text-center">
                    <h1 data-anim-child="slide-up delay-4" class="text-60 lg:text-40 md:text-30 text-white">Discover Your World</h1>
                    <p data-anim-child="slide-up delay-5" class="text-white mt-5">Discover amazing places at exclusive deals</p>
                </div>

                <div data-anim-child="slide-up delay-6" class="masthead__tabs">
                    <div class="tabs -bookmark js-tabs">
                        <div class="tabs__controls d-flex items-center js-tabs-controls">

                            <div class="">
                                <button class="tabs__button px-30 py-20 rounded-4 fw-600 text-white js-tabs-button is-tab-el-active " data-tab-target=".-tab-item-1">
                                    <i class="icon-tickets text-20 mr-10"></i>
                                    Flights - Round Trip
                                </button>
                            </div>

                            <div class="">
                                <button class="tabs__button px-30 py-20 rounded-4 fw-600 text-white js-tabs-button" data-tab-target=".-tab-item-2">
                                    <i class="icon-tickets text-20 mr-10"></i>
                                    Flights - One Way
                                </button>
                            </div>

                            <div class="">
                                <button class="tabs__button px-30 py-20 rounded-4 fw-600 text-white js-tabs-button " data-tab-target=".-tab-item-3">
                                    <i class="icon-bed text-20 mr-10"></i>
                                    Hotel
                                </button>
                            </div>

                            <div class="">
                                <button class="tabs__button px-30 py-20 rounded-4 fw-600 text-white js-tabs-button " data-tab-target=".-tab-item-4">
                                    <i class="icon-destination text-20 mr-10"></i>
                                    Tour
                                </button>
                            </div>

                        </div>

                        <div class="tabs__content js-tabs-content">

                            <div class="tabs__pane -tab-item-1 is-tab-el-active">
                                <form action="{{ route('flight.search') }}" method="POST">
                                    @csrf
                                    <select hidden id="flight-type-select" class="form-select" aria-describedby="flight-type-label">
                                        <option value="round-trip">Round-trip</option>
                                    </select>
                                    <x-departure :departure />

                                    <x-destination :destination />

                                    <x-depart_date :depart_date />

                                    <x-return_date :return_date />

                                    <x-passenger :passenger />

                                    <x-submit_button :submit />
                                </form>
                            </div>

                            <div class="tabs__pane -tab-item-2 ">
                                <form action="" method="POST">
                                    @csrf
                                    <select hidden id="flight-type-select" class="form-select" aria-describedby="flight-type-label">
                                        <option value="one-way">One-way</option>
                                    </select>
                                    <x-departure :departure />

                                    <x-destination :destination />

                                    <x-depart_date :depart_date />

                                    <x-passenger :passenger />

                                    <x-submit_button :submit />
                                </form>
                            </div>

                            <div class="tabs__pane -tab-item-3 ">
                                <form action="" method="POST">
                                    <x-departure :departure />
                                    <x-destination :destination />
                                    <x-depart_date :depart_date />
                                    <x-passenger :passenger />
                                    <x-submit_button :submit />
                                </form>
                            </div>

                            <div class="tabs__pane -tab-item-4 ">
                                <form action="" method="POST">
                                    <x-departure :departure />
                                    <x-destination :destination />
                                    <x-depart_date :depart_date />
                                    <x-passenger :passenger />
                                    <x-submit_button :submit />
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
