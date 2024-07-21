<!DOCTYPE html>
<html lang="en">

<head>
    <title>M'LYDAW - Miawoè - Asitsala</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('Templates/back/assets/images/logo_mldaw.jpg') }}" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <!-- plugins:css  Pour icone certifié-->
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->

    <link rel="stylesheet" href="{{ asset('Templates/front/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/front/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('Templates/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/front/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('Templates/front/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('Templates/front/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('Templates/front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/front/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('Templates/front/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/front/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/front/myStyle.css') }}"> <!-- style perso -->
</head>

<body class="goto-here">
    <div class="py-1 bg-primary">

    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img
                    src="{{ asset('Templates/front/images/mldaw.jpg') }}" alt="mldaw_logo"
                    style="width:60px; height:50px;"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Accueil</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Asitsala</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="{{ url('/AfficherOffre') }}">MarketPlace</a>
                            <a class="dropdown-item" href="{{ url('/panier') }}">Votre Panier</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="dropdown0ffre" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Offres</a>
                        <div class="dropdown-menu" id="drop2" aria-labelledby="dropdown0ffre">
                            <a class="dropdown-item" href="{{ url('/AfficherOffre') }}">Nos Offres</a>
                            <a class="dropdown-item" href="{{ url('/AjouterOffre') }}">Ajouter Offre de vente</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{ url('/About') }}" class="nav-link">A propos</a></li>
                    <li class="nav-item cta cta-colored"><a href="{{ url('/panier') }}" class="nav-link"><span
                                class="icon-shopping_cart"></span>[{{ Session::has('cart') ? count(Session::get('cart')->items) : 0 }}]</a>
                    </li>
                    <li class="nav-item"><a href="{{ '/login' }}" class="nav-link"><span
                                id="btn-login">Connexion</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->



    @yield('content')



    <!--Footer start -->
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">M'lydaw</h2>
                        <p>La passion de la grandeur !!!</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            {{-- <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li> --}}
                            <li class="ftco-animate"><a href="#"><span class="icon-whatsapp"></span></a></li>
                            {{-- <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Menu</h2>
                        <ul class="list-unstyled">
                            <li><a href="{{ url('/AfficherOffre') }}" class="py-2 d-block">MarketPlace</a></li>
                            <li><a href="{{ url('/About') }}" class="py-2 d-block">A Propos</a></li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-md-4">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Help</h2>
                        <div class="d-flex">
                            <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                                <li><a href="#" class="py-2 d-block">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vous avez des Questions ?</h2>
                        <div class="block-23 mb-3" id="contact">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Zanguéra, Lomé -
                                        Togo</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+228
                                            93 27 30 29</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"
                                            style="padding-left: 10px;">
                                            mlydawcontact@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | M'lydaw Made by <a href="#"
                            target="_blank">Derwin23</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('Templates/front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('Templates/front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/aos.js') }}"></script>
    <script src="{{ asset('Templates/front/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('Templates/front/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('Templates/front/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('Templates/front/js/google-map.js') }}"></script>
    <script src="{{ asset('Templates/front/js/main.js') }}"></script>

</body>

</html>
