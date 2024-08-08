<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>{{ $title }}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('/backend/img/brand/favicon.png') }}" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/backend/vendor/nucleo/css/nucleo.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/backend/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('/backend/css/argon.css?v=1.2.0') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('/dist/css/select2.min.css') }}" type="text/css">
</head>

<body>
    <!-- Sidenav -->
    <x-sidebar />

    <!-- Main content -->
    <div class="main-content" id="panel">

        <!-- Topnav -->
        <x-backend_navbar />

        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    {{ $path }}
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- Card stats -->
                    {{ $header }}
                </div>
            </div>
        </div>

        <!-- Page content -->
        <div class="container-fluid mt--6">

            {{ $slot }}

            <!-- Footer -->
            <x-backend_footer />
        </div>
    </div>

    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('/backend/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('/backend/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('/backend/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('/backend/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('/backend/js/argon.js?v=1.2.0') }}"></script>
    {{-- Select2 --}}
    <script src="{{ asset('/dist/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.categories').select2({
                placeholder: 'Select a category',
                allowClear: true
            });
        });
    </script>
</body>

</html>
