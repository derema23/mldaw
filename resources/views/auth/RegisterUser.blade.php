<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>M'ldaw - Inscripttion</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Templates/back/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="Templates/back/assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="Templates/back/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="Templates/back/assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="Templates/back/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="Templates/back/assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                    <div class="card col-lg-4 mx-auto">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-start mb-3">Inscription Admin</h3>

                            @if (Session::has('status'))
                                <div class="alert alert-success">

                                    {{ Session::get('status') }}
                                    <br>
                                    <a href="{{ url('/login') }}" class="btn btn-success">Connectez-Vous</a>
                                </div>
                                <br>
                            @endif
                            <!-- affichage des erreurs-->

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <br>
                            @endif
                            <form method="POST" action="{{ url('AddUser') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" name="nom" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label>Prénom(s)</label>
                                    <input type="text" name="prenom" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label>Mot de Passe</label>
                                    <input id="password" type="password" name="password" class="form-control p_input">
                                </div>
                                <div class="form-group">
                                    <label>Confirmer Mot de Passe</label>
                                    <input id="password-confirm" type="password" name="password_confirmation"
                                        class="form-control p_input">
                                </div>
                                {{-- <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input"> Se Rappeller de moi
                                        </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Mot de Passe Oublié</a>
                                </div> --}}
                                <div class="text-center d-grid gap-2">
                                    <button type="submit"
                                        class="btn btn-primary btn-block enter-btn">S'enregistrer</button>
                                </div>
                                <p class="sign-up text-center">Vous avez déjà un Compte ?<a href="{{ url('/login') }}">
                                        Connectez-Vous</a></p>
                                <p class="terms">En créant un compte, vous acceptez nos<a href="#"> Terms &
                                        Conditions</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- row ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="Templates/back/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="Templates/back/assets/js/off-canvas.js"></script>
    <script src="Templates/back/assets/js/misc.js"></script>
    <script src="Templates/back/assets/js/settings.js"></script>
    <script src="Templates/back/assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
