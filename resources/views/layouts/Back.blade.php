<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>M'lydaw Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/flag-icon-css/css/flag-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('Templates/back/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('Templates/back/assets/images/logo_mldaw.jpg') }}" />
</head>

<body>
    <div class="container-scroller">
        {{-- <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
                     <div class="ps-lg-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-admin-template/" target="_blank"
                                class="btn me-2 buy-now-btn border-0">Buy Now</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-admin-template/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="{{ url('/dashboard') }}"><img
                        src="{{ asset('Templates/back/assets/images/logo_mldaw.jpg') }}" alt="logo"
                        style="width: 25%; height: 50%;" /></a>
                <a class="sidebar-brand brand-logo-mini" href="{{ url('/dashboard') }}"><img
                        src="{{ asset('Templates/back/assets/images/logo_mldaw.jpg') }}" alt="logo"
                        style="width: 25%; height: 50%;" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                @if (Auth::user()->photo)
                                    <img class="img-xs rounded-circle "
                                        src="/storage/photo_profils/{{ Auth::user()->photo }}" alt="">
                                @else
                                    <img class="img-xs rounded-circle " src="/storage/photo_profils/noimage.jpg"
                                        alt="">
                                @endif
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">{{ Auth::user()->Nom }}</h5>
                                <span>{{ Auth::user()->role }}</span>
                                @if (auth()->user()->role == 'Producteur')
                                    <i class="fa fa-check-circle-o"
                                        style="color: skyblue; font-size: 15px"></i><span><small>certifié</small></span>
                                @endif
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                                class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                            aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-cog text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Accueil</span>
                </li>
                @if (Auth::user()->role == 'Admin')
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="{{ url('/dashboard') }}">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">Gestion</span>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <span class="menu-title">Utilisateurs</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ url('/listUser') }}">Liste
                                        Utilisateurs</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" data-bs-toggle="collapse" href="#proui-basic" aria-expanded="false"
                            aria-controls="proui-basic">
                            <span class="menu-icon">
                                <i class="fa fa-group"></i>
                            </span>
                            <span class="menu-title">Producteurs</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="proui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="{{ url('/ListePro') }}">Liste
                                        Producteurs</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('/ajouterPro') }}">Ajouter
                                        Producteur</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" data-bs-toggle="collapse" href="#offreui-basic" aria-expanded="false"
                            aria-controls="offreui-basic">
                            <span class="menu-icon">
                                <i class="mdi mdi-laptop"></i>
                            </span>
                            <span class="menu-title">Offres</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="offreui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('/MesOffres/' . auth()->user()->id) }}">Mes Offres</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('/AjouterOffre') }}">Ajouter
                                        Offre</a></li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('/listOffre') }}">Liste
                                        Offres</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item menu-items">
                        <a class="nav-link" href="#">
                            <span class="menu-icon">
                                <i class="mdi mdi-file-document"></i>
                            </span>
                            <span class="menu-title">Documentation</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item menu-items">
                        <a class="nav-link" href="#">
                            <span class="menu-icon">
                                <i class="mdi mdi-speedometer"></i>
                            </span>
                            <span class="menu-title">Tableau de bord</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">
                        <span class="nav-link">Gestion</span>
                    </li>
                    <li class="nav-item menu-items">
                        <a class="nav-link" data-bs-toggle="collapse" href="#offreui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <span class="menu-icon">
                                <i class="mdi mdi-laptop"></i>
                            </span>
                            <span class="menu-title">Offres</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="offreui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link"
                                        href="{{ url('/MesOffres/' . Auth::user()->id) }}">Mes Offres</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ url('/AjouterOffre') }}">Ajouter
                                        Offre</a></li>
                            </ul>
                        </div>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="{{ url('/dashboard') }}"><img
                            src="{{ asset('Templates/back/assets/images/logo_mldaw.jpg') }}" alt="logo"
                            style="width: 100%; height: 100%;" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Nouveau Projet</a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                                aria-labelledby="createbuttonDropdown">
                                <h6 class="p-3 mb-0">Projets</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-file-outline text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-web text-info"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">UI Development</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-layers text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject ellipsis mb-1">Software Testing</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">See all projects</p>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                                <div class="navbar-profile">
                                    @if (Auth::user()->photo)
                                        <img class="img-xs rounded-circle "
                                            src="/storage/photo_profils/{{ Auth::user()->photo }}" alt="">
                                    @else
                                        <img class="img-xs rounded-circle " src="/storage/photo_profils/noimage.jpg"
                                            alt="">
                                    @endif
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown preview-list"
                                aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-cog text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">

                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Déconnexion</p>
                                    </div>
                                </a>
                                {{-- Formulaire deconnexion --}}
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                                {{-- fin formulaire --}}
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">

                <div class="content-wrapper">

                    {{-- BackOffice Content --}}

                    @yield('content')

                    {{-- Content End --}}

                    {{-- Saut de lignes manuels A REVOIR --}}
                    <div>
                        <br>
                        <br>
                        <br>

                        <br>
                        <br>
                        <br>

                        <br>
                        <br>
                        <br>

                        <br>
                        <br>
                        <br>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024 <a
                                href="#">M'LYDAW</a>. All rights
                            reserved.</span>
                        <span class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center"> <span
                                class="text-muted float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Made by
                                Derwin23<i class="mdi mdi-heart text-danger"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('Templates/back/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('Templates/back/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('Templates/back/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/js/misc.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/js/settings.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('Templates/back/assets/js/proBanner.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('Templates/back/assets/js/file-upload.js') }}"></script>
    <!-- End custom js for this page -->

    <!-- Lien js pour bootbox confirmation suppression-->
    <script src="{{ asset('js/Js_suppression/bootbox.min.js') }}"></script>
    <!-- Script pour confirmer suppression -->
    <script>
        $(document).on("click", "#delete", function(e) {
            e.preventDefault();
            var link = $(this).attr("href");
            bootbox.confirm("La sélection va être supprimé", function(confirmed) {
                if (confirmed) {
                    window.location.href = link;
                };
            });
        });
    </script>
</body>

</html>
