<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - M'ldaw</title>
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
                            <h3 class="card-title text-start mb-3">Login</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Identifiant/email *</label>
                                    <input type="text"
                                        class="form-control p_input @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe *</label>
                                    <input type="text"
                                        class="form-control p_input @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" name="remember"
                                                id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                                        </label>
                                    </div>
                                    <a href="#" class="forgot-pass">Mot de passe Oublié ?</a>
                                </div>
                                <div class="text-center d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">Se
                                        Connecter</button>
                                </div>
                                {{-- <div class="d-flex">
                                    <button class="btn btn-facebook me-2 col">
                                        <i class="mdi mdi-facebook"></i> Facebook </button>
                                    <button class="btn btn-google col">
                                        <i class="mdi mdi-google-plus"></i> Google plus </button>
                                </div> --}}
                                <p class="sign-up">Pas encore de Compte?<a href="#"> Enregistrer-Vous</a></p>
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
