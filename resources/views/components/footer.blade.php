<div class="container">
    <div class="pt-60 pb-60">
        <div class="row y-gap-40 justify-between xl:justify-start">
            <div class="col-xl-4 col-lg-6">
                <img src="{{ asset('metrip_logo_white.svg') }}" alt="image">

                <div class="row y-gap-30 justify-between pt-30">
                    <div class="col-sm-5">
                        <div class="text-14">Need live support?</div>
                        <a href="#" class="text-18 fw-500 mt-5">support@metrip.me</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row y-gap-30">
                    <div class="col-12">
                        <h5 class="text-16 fw-500 mb-15">Get Fair Updates</h5>

                        <form action="{{ route('subscribers.store') }}" method="POST" >
                            @csrf
                        <div class="single-field relative d-flex justify-end items-center pb-30">
                            <input class="bg-white rounded-8" name="email" type="email" placeholder="Your Email">
                            <button class="absolute px-20 h-full text-15 fw-500 underline text-dark-1">Subscribe</button>
                        </div>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="py-20 border-top-white-15">
        <div class="row justify-between items-center y-gap-10">
            <div class="col-auto">
                <div class="row x-gap-30 y-gap-10">
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            © 2023 Metrip. All rights reserved.
                        </div>
                    </div>

                    <div class="col-auto">
                        <div class="d-flex x-gap-15">
                            <a href="#">Privacy</a>
                            <a href="#">Terms</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-auto">
                <div class="row y-gap-10 items-center">
                    <div class="col-auto">
                        <div class="d-flex items-center">
                            <button class="d-flex items-center text-14 fw-500 text-white mr-10">
                                <i class="icon-globe text-16 mr-10"></i>
                                <span class="underline">English (US)</span>
                            </button>

                            <button class="d-flex items-center text-14 fw-500 text-white">
                                <i class="icon-usd text-16 mr-10"></i>
                                <span class="underline">USD</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>