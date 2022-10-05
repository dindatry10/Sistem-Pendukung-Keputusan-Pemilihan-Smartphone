
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sistem Pendukung Keputusan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/logos.png" />
    <script src="{{asset('js')}}/jquery-3.6.1.min.js"></script>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <img src="{{asset('assets')}}/images/faces/face1.jpg" alt="profile" />
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center">Admin</span>
                <span class="text-secondary icon-sm text-center">Dinda Tryandhary</span>
              </div>
            </a>
          </li>
      
          <li class="nav-item pt-3">
            <form class="d-flex align-items-center" action="#">
              <div class="input-group">
                <div class="input-group-prepend">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Search" />
              </div>
            </form>
          </li>
          <li class="pt-2 pb-1">
            <span class="nav-item-head">Template Pages</span>
          </li>
          {{-- Main menu Dashboard  --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard')}}">
              <i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.rekomendasi')}}">
                <i class="mdi mdi-wunderlist menu-icon"></i>
                <span class="menu-title">Recommendation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.hasil')}}">
                <i class="mdi mdi-account-search menu-icon"></i>
                <span class="menu-title">Hasil</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.list')}}">
                <i class="mdi mdi-cellphone-android menu-icon"></i>
                <span class="menu-title">Daftar Smartphone</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.tentang')}}">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Tentang</span>
              </a>
            </li>
            <li class="nav-item pt-3">
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                <i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div id="settings-trigger"><i class="mdi mdi-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles default primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles light"></div>
          </div>
        </div>
        <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-chevron-double-left"></span>
            </button>
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="#"><img src="{{asset('assets')}}/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="{{ route('admin.dashboard')}}">
                  <i class="mdi mdi-home-circle"></i>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper pb-0">
            <div class="page-header flex-wrap">
              <div class="header-left">
              </div>
              <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
                <div class="d-flex align-items-center">
                  <a>
                    <p class="m-0 pr-3">@yield('title')</p>
                    <base href="{{ \URL::to('/')}}">
                  </a>
                  <a class="pl-3 mr-4">
                    <p class="m-0">Admin</p>
                  </a>
                </div>
              </div>
            </div>

          <section class="content">
            @yield('content')
          </section>

          <footer class="footer">
            <style>
              footer {
                  margin-top: 50%;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  background-color: cadetblue;
              }
          </style>
          

            <div class="d-sm-flex justify-content-center justify-content-sm-between margin">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Sistem Pendukung Keputusan 2022</span>
            </div>
          </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    {{-- Script js Search --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets')}}/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets')}}/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="{{asset('assets')}}/vendors/chart.js/Chart.min.js"></script>
    <script src="{{asset('assets')}}/vendors/flot/jquery.flot.js"></script>
    <script src="{{asset('assets')}}/vendors/flot/jquery.flot.resize.js"></script>
    <script src="{{asset('assets')}}/vendors/flot/jquery.flot.categories.js"></script>
    <script src="{{asset('assets')}}/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="{{asset('assets')}}/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets')}}/js/off-canvas.js"></script>
    <script src="{{asset('assets')}}/js/hoverable-collapse.js"></script>
    <script src="{{asset('assets')}}/js/misc.js"></script>
    <script src="{{asset('assets')}}/js/settings.js"></script>
    <script src="{{asset('assets')}}/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets')}}/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>