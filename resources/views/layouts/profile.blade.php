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
    <script src="https://apis.google.com/js/platform.js" async defer></script>

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

        <footer class="footer -dashboard mt-60 text-center">
           <x-profile :profile />
        </footer>
    </main>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM"></script>
    <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
    <script src="{{ asset('js/vendors.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
  function onSignIn(googleUser) {
    // Send the authorization code to your Laravel backend to authenticate the user
    var auth_code = googleUser.getAuthResponse().code;
    // Example of how to send the authorization code using jQuery:
    $.post('/auth/google', { auth_code: auth_code })
      .done(function(data) {
        // Authentication succeeded, redirect the user to their dashboard or home page
        window.location.href = '/';
      })
      .fail(function(xhr, status, error) {
        // Authentication failed, display an error message
        alert('Login failed: ' + error);
      });
  }

  function showSignInButton() {
    // Create a new Google Sign-In API instance
    var auth2 = gapi.auth2.init({
      client_id: '48446420791-4co7qsocb070pruvpekpaf24mnu951nf.apps.googleusercontent.com',
      scope: 'email'
    });

    // Attach a click event listener to the sign-in button that triggers the authorization prompt
    auth2.attachClickHandler(document.getElementById('google-sign-in-button'), {}, onSignIn);

    // Show the sign-in button
    document.getElementById('google-sign-in-button').style.display = 'block';

    // Prompt the user to authorize your app to access their Google account
    auth2.grantOfflineAccess().then(function(authResult) {
      // The user authorized your app, send the authorization code to your Laravel backend to authenticate the user
      $.post('/auth/google', { auth_code: authResult.code })
        .done(function(data) {
          // Authentication succeeded, redirect the user to their dashboard or home page
          window.location.href = '/';
        })
        .fail(function(xhr, status, error) {
          // Authentication failed, display an error message
          alert('Login failed: ' + error);
        });
    }, function(error) {
      // The user declined to authorize your app, hide the sign-in button
      document.getElementById('google-sign-in-button').style.display = 'none';
    });
  }

  // Load the Google Sign-In API library and show the sign-in button
  gapi.load('auth2', function() {
    gapi.signin2.render('google-sign-in-button', {
      onsuccess: onSignIn,
      width: 240,
      height: 50,
      theme: 'dark'
    });

    showSignInButton();
  });
</script>
</body>

</html>