<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Register | White Library</title>
    <!-- Favicon -->
    <link rel="icon" href="../backend/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/backend/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('/backend/css/argon.css?v=1.2.0') }}" type="text/css">
</head>

<body class="bg-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="dashboard.html">
                <img src="{{ asset('/backend/img/brand/white.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="dashboard.html">
                                <img src="{{ asset('/backend/img/brand/blue.png') }}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="dashboard.html" class="nav-link">
                            <span class="nav-link-inner--text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="login.html" class="nav-link">
                            <span class="nav-link-inner--text">Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="register.html" class="nav-link">
                            <span class="nav-link-inner--text">Register</span>
                        </a>
                    </li>
                </ul>
                <hr class="d-lg-none" />
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank"
                            data-toggle="tooltip" data-original-title="Like us on Facebook">
                            <i class="fab fa-facebook-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Facebook</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial"
                            target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
                            <i class="fab fa-instagram"></i>
                            <span class="nav-link-inner--text d-lg-none">Instagram</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank"
                            data-toggle="tooltip" data-original-title="Follow us on Twitter">
                            <i class="fab fa-twitter-square"></i>
                            <span class="nav-link-inner--text d-lg-none">Twitter</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank"
                            data-toggle="tooltip" data-original-title="Star us on Github">
                            <i class="fab fa-github"></i>
                            <span class="nav-link-inner--text d-lg-none">Github</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
            <div class="container">
                <div class="header-body text-center mb-7">
                    <div class="row justify-content-center">
                        <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                            <h1 class="text-white">Create an account</h1>
                            <p class="text-lead text-white">Use these awesome forms to login or create new account.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary border-0">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Sign up with credentials</small>
                            </div>
                            <form role="form" method="POST" action="/register">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Name" type="text" name="name"
                                            required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Email" type="email"
                                            name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i
                                                    class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Password" type="password"
                                            name="password" required>
                                    </div>
                                </div>
                                @error('email')
                                    <div class="text-muted font-italic"><small>error: <span
                                                class="text-danger font-weight-700">email already exists</span></small>
                                    </div>
                                @enderror
                                <div class="row my-4">
                                    <div class="col-12">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister"
                                                type="checkbox" required>
                                            <label class="custom-control-label" for="customCheckRegister">
                                                <span class="text-muted">I agree with the <a href="#">Privacy
                                                        Policy</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Create account</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <small class="text-light">Already have an account? <a href="/login"
                                    class="text-purple-100">Sign In</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2024 <a href="https://github.com/Lovrenski" class="font-weight-bold ml-1"
                            target="_blank">White Code.</a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                        <li class="nav-item">
                            <a href="https://github.com/Lovrenski" class="nav-link" target="_blank">White Code.</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                                class="nav-link" target="_blank">MIT License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('/backend/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('/backend/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('/backend/js/argon.js?v=1.2.0') }}"></script>
</body>

</html>
