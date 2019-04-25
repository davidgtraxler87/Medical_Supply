<!DOCTYPE html>
<html lang="en">
<head>
    <title>MedSupply</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    @yield('header_content')
</head>
<body>
<nav class="navbar py-4 navbar-expand-lg ftco_navbar navbar-light bg-light flex-row">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
            <div class="col-lg-2 pr-4 align-items-center">
                <a class="navbar-brand" href="/">Med<span>Supply</span></a>
            </div>
            <div class="col-lg-10 d-none d-md-block">
                <div class="row d-flex">
                    <div class="col-md-4 pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-map"></span></div>
                        <span class="text">Address: </br> 3100 E New Orleans St. Broken Arrow, OK 74014-3501</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">Email: medsupply@davidgtraxler.me</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon bg-white mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">Phone: (918)123 4567</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        @guest
        <p class="button-custom order-lg-last mb-0">
            <a href="/login" class="btn btn-primary py-2 px-3">Login</a>
            <a href="/register" class="btn btn-secondary py-2 px-3">Register</a>
        </p>
        @else

            <p class="button-custom order-lg-last mb-0">
                <a href="orders" class="btn btn-primary py-2 px-3" id='cartBtn' style="display: none">
                    <span class="icon icon-shopping_cart"></span> Cart
                </a>
                <a class="btn btn-secondary py-2 px-3" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </p>

        @endguest
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="{{ route('/') }}" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('products') }}" class="nav-link">Products</a></li>
                <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield('content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2 logo">Med<span>Supply</span></h2>
                    <p>Getting the products you need, fast! Quality products at your fingertips.</p>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Have a Question?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">3100 E New Orleans St. Broken Arrow, OK 74014-3501</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">(918)123 4567</span></a></li>
                            <li><a href="{{ route('contact') }}"><span class="icon icon-envelope"></span><span class="text">medsupply@davidgtraxler.me</span></a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-5 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('/') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                        <li><a href="{{ route('about') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                        <li><a href="{{ route('products') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Products</a></li>
                        <li><a href="{{ route('contact') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-5">
                    <h2 class="ftco-heading-2">Operating Hours</h2>
                    <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>We are open 24/7</h3>
                </div>
                <div class="mb-5">
                    @guest
                        <p class="button-custom mb-0">
                            <a href="/login" class="btn btn-primary py-2 px-3">Login</a>
                            <a href="/register" class="btn btn-secondary py-2 px-3">Register</a>
                        </p>
                    @endguest
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/main.js"></script>
<script src="js/medSupply.js"></script>
@yield('footer_content')
</body>
</html>
