<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Affan - PWA Mobile HTML Template">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#0134d4">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Title -->
        <title>Affan - PWA Mobile HTML Template</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <!-- Favicon -->
        <link rel="icon" href="assets/img/core-img/favicon.ico">
        <link rel="apple-touch-icon" href="assets/img/icons/icon-96x96.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/img/icons/icon-152x152.png">
        <link rel="apple-touch-icon" sizes="167x167" href="assets/img/icons/icon-167x167.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icons/icon-180x180.png">
        <!-- CSS Libraries -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/tiny-slider.css">
        <link rel="stylesheet" href="assets/css/baguetteBox.min.css">
        <link rel="stylesheet" href="assets/css/rangeslider.css">
        <link rel="stylesheet" href="assets/css/vanilla-dataTables.min.css">
        <link rel="stylesheet" href="assets/css/apexcharts.css">
        <!-- Core Stylesheet -->
        <link rel="stylesheet" href="assets/style.css">
        <!-- Web App Manifest -->
        <link rel="manifest" href="assets/manifest.json">
    </head>
    <body>
        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Loading...</span></div>
        </div>
        <!-- Internet Connection Status -->
        <!-- # This code for showing internet connection status -->
        <div class="internet-connection-status" id="internetStatus"></div>
        <!-- Back Button -->
        <div class="login-back-button"><a href="element-hero-blocks.html">
            <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
            </svg></a></div>
        <!-- Login Wrapper Area -->
        <div class="login-wrapper d-flex align-items-center justify-content-center">
            <div class="custom-container">
                <div class="text-center px-4"><img class="login-intro-img" src="assets/img/bg-img/36.png" alt=""></div>
                <!-- Register Form -->
                <div class="register-form mt-4">
                    <h6 class="mb-3 text-center">Log in to continue to Affan.</h6>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group position-relative">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                            <div class="position-absolute" id="password-visibility">
                                <i class="bi bi-eye"></i><i class="bi bi-eye-slash"></i>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Sign In</button>
                    </form>
                </div>
                <!-- Login Meta -->
                <div class="login-meta-data text-center">
                    <p class="mb-0">Didn't have an account? <a class="stretched-link" href="{{ route('register') }}">Register Now</a></p>
                </div>
            </div>
        </div>
        <!-- All JavaScript Files -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/slideToggle.min.js"></script>
        <script src="assets/js/internet-status.js"></script>
        <script src="assets/js/tiny-slider.js"></script>
        <script src="assets/js/baguetteBox.min.js"></script>
        <script src="assets/js/countdown.js"></script>
        <script src="assets/js/rangeslider.min.js"></script>
        <script src="assets/js/vanilla-dataTables.min.js"></script>
        <script src="assets/js/index.js"></script>
        <script src="assets/js/magic-grid.min.js"></script>
        <script src="assets/js/dark-rtl.js"></script>
        <script src="assets/js/active.js"></script>
        <!-- PWA -->
        <script src="assets/js/pwa.js"></script>
    </body>   
</html>