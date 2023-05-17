@props(['departure'])
<div class="mainSearch -col-5 -w-1070 mx-auto bg-white pr-20 py-20 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 shadow-1">
    <div class="button-grid items-center">
        <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

            <div data-x-dd-click="searchMenu-loc">
                <h4 class="text-15 fw-500 ls-2 lh-16">Departure</h4>

                <div class="text-15 text-light-1 ls-2 lh-16">
                    <input autocomplete="off" id="origin-label" for="origin-input" name="origin" placeholder="City or Airport" class="js-search js-dd-focus" />
                </div>
            </div>


            <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                    <div class="y-gap-5 js-results">

                        <div>
                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                <div class="d-flex">
                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                    <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div>
                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                <div class="d-flex">
                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                    <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div>
                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                <div class="d-flex">
                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                    <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div>
                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                <div class="d-flex">
                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                    <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div>
                            <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                <div class="d-flex">
                                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                    <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                    </div>
                                </div>
                            </button>
                        </div>

                    </div>
                </div>
            </div>

        </div>