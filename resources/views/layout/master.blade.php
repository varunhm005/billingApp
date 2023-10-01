<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./vendors/feather/feather.css">
    <link rel="stylesheet" href="./vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/select2/select2.min.css">
    <link rel="stylesheet" href="./vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="./vendors/mdi/css/materialdesignicons.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="./css/vertical-layout-light/style.css">
    <!-- endinject -->
    <!-- <link rel="shortcut icon" href="./images/favicon.png" /> -->
</head>

<body>
    <div class="container-scroller">
        <!-- partial:./partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="./profile.html"><img src="./images/faces/face28.jpg" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="./profile.html"><img src="./images/faces/face28.jpg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="./images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <form method="POST" action="{{ url('/logout') }}">
                                @csrf
                                <button class="dropdown-item" type="submit"><i class="ti-power-off text-primary"></i> Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile') }}">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('billing') }}">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Billings</span>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- partial -->
            @yield('profile')
            @yield('billings')
            <!-- main-panel ends -->
        </div>

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="./vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./js/off-canvas.js"></script>
    <script src="./js/hoverable-collapse.js"></script>
    <script src="./js/template.js"></script>
    <script src="./js/settings.js"></script>
    <script src="./js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="./js/file-upload.js"></script>
    <script src="./js/typeahead.js"></script>
    <script src="./js/select2.js"></script>
    <!-- End custom js for this page-->
</body>

</html>