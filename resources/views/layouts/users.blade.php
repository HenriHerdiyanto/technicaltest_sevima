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
        <!-- Header Area -->
        <div class="header-area" id="headerArea">
        <div class="container">
            <!-- # Paste your Header Content from here -->
            <!-- # Header Five Layout -->
            <!-- # Copy the code from here ... -->
            <!-- Header Content -->
            <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
            <!-- Logo Wrapper -->
            <div class="logo-wrapper"><a href="{{ route('home') }}"><img src="assets/img/core-img/logo.png" alt=""></a></div>
            <!-- Navbar Toggler -->
            <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
            </div>
            <!-- # Header Five Layout End -->
        </div>
        </div>
        <!-- # Sidenav Left -->
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-start" id="affanOffcanvas" data-bs-scroll="true" tabindex="-1" aria-labelledby="affanOffcanvsLabel">
            <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <div class="offcanvas-body p-0">
                <!-- Side Nav Wrapper -->
                <div class="sidenav-wrapper">
                <!-- Sidenav Profile -->
                <div class="sidenav-profile bg-gradient">
                    <div class="sidenav-style1"></div>
                    <!-- User Thumbnail -->
                    <div class="user-profile"><img src="img/bg-img/2.jpg" alt=""></div>
                    <!-- User Info -->
                    <div class="user-info">
                    <h6 class="user-name mb-0">Affan Islam</h6><span>CEO, Designing World</span>
                    </div>
                </div>
                <!-- Sidenav Nav -->
                <ul class="sidenav-nav ps-0">
                    <li><a href="{{ route('profile') }}"><i class="bi bi-house-door"></i>Profile</a></li>
                    
                    <li>
                    <div class="night-mode-nav"><i class="bi bi-moon"></i>Night Mode
                        <div class="form-check form-switch">
                        <input class="form-check-input form-check-success" id="darkSwitch" type="checkbox">
                        </div>
                    </div>
                    </li>
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>

                    </li>
                </ul>
                <!-- Social Info -->
                <div class="social-info-wrap"><a href="#"><i class="bi bi-facebook"></i></a><a href="#"><i class="bi bi-twitter"></i></a><a href="#"><i class="bi bi-linkedin"></i></a></div>
                <!-- Copyright Info -->
                <div class="copyright-info">
                    <p>2021 &copy; Made by<a href="#">Designing World</a></p>
                </div>
                </div>
            </div>
        </div>

        @yield('content')

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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

        <!-- PWA -->
        <script src="assets/js/pwa.js"></script>
    </body>
</html>