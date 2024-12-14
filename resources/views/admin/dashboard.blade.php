
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor.bundle.base.css') }}">
    {{-- <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css"> --}}
    <!-- endinject -->
    <!-- Plugin css for this page -->
    {{-- <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css"> --}}
    <!-- End plugin css for this page -->
  
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- endinject -->
    {{-- <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" /> --}}
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <i class="fa-solid fa-bars"></i>
            </button>
          </div>
          <div>
            <a class="navbar-brand brand-logo" href="index.html">
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
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-mail icon-lg"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 fw-medium float-start">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </li>
            <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{ asset('images/farhad.png') }}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">Allen Moreno</p>
                  <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="fa-solid fa-table-cells-large me-2"></i> 
                <span class="menu-title"> Dashboard</span>
              </a>
            </li>
            <li class="nav-item nav-category">UI Elements</li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('portfolio.index') }}" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Portfolio</span>
                <i class="menu-arrow"></i>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ route('index.about') }}" aria-expanded="false" aria-controls="form-elements">
                  <i class="menu-icon mdi mdi-card-text-outline"></i>
                  <span class="menu-title">About</span>
                  <i class="menu-arrow"></i>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="docs/documentation.html">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Documentation</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- main-panel ends -->
      <!-- page-body-wrapper ends -->
      {{-- <div class="container-fluid"> --}}
      {{-- <div>
        @yield('adminContent')
    </div> --}}

  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper" style="background: #f2edf3">
      {{-- <div class="row"> --}}
        {{-- <div class="col-lg-12"> --}}
          <div class="home-tab">
            {{-- <div class="tab-content tab-content-basic"> --}}
              <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                @yield('adminContent')
              </div>
            {{-- </div> --}}
          {{-- </div> --}}
        {{-- </div> --}}
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
        <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
      </div>
    </footer>
    <!-- partial -->
  </div>
      </div>

    </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('js/vendor.bundle.base.js') }}"></script>
    {{-- <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script> --}}
    <!-- endinject -->
    <!-- Plugin js for this page -->
    {{-- <script src="assets/vendors/chart.js/chart.umd.js"></script> --}}
    {{-- <script src="assets/vendors/progressbar.js/progressbar.min.js"></script> --}}
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('js/js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/js/template.js') }}"></script>
    <script src="{{ asset('js/js/settings.js') }}"></script>
    <script src="{{ asset('js/js/hoverable-collapse.js') }}"></script>
    {{-- <script src="{{ asset('js/js/todolist.js') }}"></script> --}}
    <!-- endinject -->
    <!-- Custom js for this page-->
    {{-- <script src="{{ asset('js/js/jquery.cookie.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('js/js/dashboard.js') }}"></script> --}}
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>