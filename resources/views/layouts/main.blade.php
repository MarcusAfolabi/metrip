<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="favicon.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/vendors.css') }}">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <title>@yield('title') - Travel, Flight, Hotel, Tour and Visa Booking</title>
  <meta content="description" name="@yield('description')" />
 
</head>

<body>
  <div class="js-preloader">
  </div>
  <div id="google-sign-in-button" style="display:none;"></div>
  <main>
    <div class="header-margin"></div>
    <header data-add-bg="" class="header bg-white js-header" data-x="header" data-x-toggle="is-menu-opened">
      <x-header :header />
    </header>

    @yield('main')

    <footer class="footer -type-2 bg-dark-2 text-white">
      <x-footer :footer />
    </footer>
  </main>

  <script src="{{ asset('js/js-map.js') }}"></script>
  <script src="{{ asset('js/index.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
  <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

  <script src="{{ asset('js/vendors.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  

</body>

</html>