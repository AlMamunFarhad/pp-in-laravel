<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Farhad Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/vendor.bundle.base.css') }}">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/froala-editor/css/froala_editor.pkgd.min.css" rel="stylesheet">
    @stack('adminStyle')
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
                <div class="me-3">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-bs-toggle="minimize">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                </div>
                <div>
                    <a class="navbar-brand brand-logo" href="{{ route('admin.dashboard') }}">
                        <img src="{{ asset('images/farhad.png') }}" alt="logo" />
                    </a>
                    <a class="navbar-brand brand-logo-mini" href="index.html">
                        <img src="{{ asset('images/farhad.png') }}" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-top shadow-sm" style="background: #fff">
                <ul class="navbar-nav">
                    <li class="nav-item fw-semibold d-none d-lg-block ms-0">
                        <h1 class="welcome-text">Farhad</h1>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item d-none d-lg-block">
                        <img class="img-xs rounded-circle" src="{{ asset('images/farhad.png') }}" alt="Profile image">

                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-bs-toggle="offcanvas">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" aria-expanded="false">
                            <i class="fa-solid fa-house me-2"></i>
                            <span class="menu-title">HOME</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}" aria-expanded="false"
                            aria-controls="form-elements">
                            <i class="fa-solid fa-user-tie me-2"></i>
                            <span class="menu-title">ABOUT</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('resume.index') }}">
                            <i class="fa-solid fa-file me-2"></i>
                            <span class="menu-title">RESUME</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('skills.index') }}" aria-expanded="false"
                            aria-controls="charts">
                            <i class="fa-solid fa-circle-check me-2"></i>
                            <span class="menu-title">SKILLS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('portfolio.index') }}" aria-expanded="false"
                            aria-controls="charts">
                            <i class="fa-brands fa-github me-2"></i>
                            <span class="menu-title">PORTFOLIO</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.logout') }}" aria-expanded="false"
                            aria-controls="charts">
                            <i class="fa-solid fa-right-from-bracket me-2"></i>
                            <span class="menu-title">LOGOUT</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper" style="background: #f2edf3">
                    <div class="home-tab">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel"
                            aria-labelledby="overview">
                            @yield('adminContent')
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- Footer -->
                <footer class="footer bg-white">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between ">
                        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2024. All
                            rights reserved.</span>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('js/js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/js/template.js') }}"></script>
    <script src="{{ asset('js/js/settings.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/froala-editor/js/froala_editor.pkgd.min.js"></script>
    <script>
        var editor = new FroalaEditor('.editor');
    </script>
    @stack('adminScripts')
</body>

</html>
