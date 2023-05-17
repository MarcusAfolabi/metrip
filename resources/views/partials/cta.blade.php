<section class="pt-80 pb-80 bg-green-1">
    <div class="container">
        <div class="row y-gap-20 justify-between">
            <div class="col-auto">
                <div class="sectionTitle -md">
                    <h2 class="sectionTitle__title">Not a Member Yet?</h2>
                    <p class="text-dark-1 sectionTitle__text mt-5 sm:mt-0">Join us! Our members can access savings of up to 50% and earn Trip Coins while booking.</p>
                </div>
            </div>

            <div class="col-auto">
                <div class="row x-gap-20 y-gap-20">
                    <div class="col-auto">
                        <a href="{{ route('login') }}">
                        <button class="button px-40 h-60 -blue-1 text-blue-1 border-blue-1">
                            <span class="js-currencyMenu-mainTitle">Sign In</span>

                            <i class="icon-arrow-top-right ml-10"></i>
                        </button>
                        </a>
                    </div>

                    <div class="col-auto">
                    <a href="{{ route('register') }}">
                        <button class="button px-40 h-60 -blue-1 bg-yellow-1 text-dark-1">
                            Register
                            <i class="icon-arrow-top-right ml-10"></i>
                        </button>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>