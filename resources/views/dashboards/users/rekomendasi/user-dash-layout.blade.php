
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sistem Pendukung Keputusan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{ asset('plugins/ijaboCropTool/ijaboCropTool.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/demo_2/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets')}}/images/logos.png" />
    <script src="{{asset('js')}}/jquery-3.6.1.min.js"></script>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_horizontal-navbar.html -->
      <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
          <div class="container col-11">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
              <a class="navbar-brand brand-logo" href="index.html">
                <img src="{{asset('assets')}}/images/logo.svg" alt="logo" />
                <span class="font-12 d-block font-weight-light">Sistem Pendukung Keputusan </span>
              </a>
              <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets')}}/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
              <ul class="navbar-nav mr-lg-2">
                <li class="nav-item nav-search d-none d-lg-block">
                  <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                      <span class="input-group-text" id="search">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                    <input type="search" class="form-control" id="navbar-search-input" placeholder="Search" aria-label="search" aria-describedby="search" />
                  </div>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <div class="nav-profile-img">
                      <img src="{{ Auth::user()->picture }}" alt="profile" />
                    </div>
                    <div class="nav-profile-text">
                      <p class="text-black font-weight-semibold m-0 font-13"> {{ Auth::user()->name }} </p>
                      <span class="font-13 online-color">online <i class="mdi mdi-chevron-down"></i></span>
                    </div>
                  </a>
                  <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      <i class="mdi mdi-logout mr-2 text-primary"></i> Logout </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                <span class="mdi mdi-menu"></span>
              </button>
            </div>
          </div>
        </nav>
        <nav class="bottom-navbar">
          <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('user/dashboard*')) ? 'active' : ''}}" href="{{ route('user.dashboard')}}">
                  <i class="mdi mdi-compass-outline menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('user/rekomendasi*')) ? 'active' : ''}}" href="{{ route('user.rekomendasi')}}">
                  <i class="mdi mdi-wunderlist menu-icon"></i>
                  <span class="menu-title">Rekomendasi</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('user/hasil*')) ? 'active' : ''}}" href="{{ route('user.hasil')}}">
                  <i class="mdi mdi-account-search menu-icon"></i>
                  <span class="menu-title">Hasil</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('user/list*')) ? 'active' : ''}}" href="{{ route('user.list')}}">
                  <i class="mdi mdi-cellphone-android menu-icon"></i>
                  <span class="menu-title">Data Smartphone</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('user/tentang*')) ? 'active' : ''}}" href="{{ route('user.tentang')}}">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">About Project</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (request()->is('user/profile*')) ? 'active' : ''}}" href="{{ route('user.profile')}}">
                  <i class="mdi mdi mdi-settings menu-icon"></i>
                  <span class="menu-title">Setting Profile</span>
                </a>
              </li>  
              <li class="nav-item">
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
              
              <li class="nav-item">
                <div class="nav-link d-flex">
                  
                  {{-- <button class="btn btn-sm bg-danger text-white"> Sistem Pendukung Keputusan </button> --}}
                  <a class="text-white" href="{{ route('user.dashboard')}}"><i class="mdi mdi-home-circle"></i></a>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
     <!-- partial -->
     <div class="main-panel">
      <div class="content-wrapper pb-0">
        <div class="page-header flex-wrap">
          <div class="header-left">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">SPK</li>
              <li class="breadcrumb-item active">@yield('title')</li>
              <base href="{{ \URL::to('/')}}">
            </ol>
          </div>
          {{-- <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
            <div class="d-flex align-items-center">
              <a>
                <p class="m-0 pr-3">@yield('title')</p>
                <base href="{{ \URL::to('/')}}">
              </a>
              <a class="pl-3 mr-4">
                <p class="m-0">Admin</p>
              </a>
            </div>
          </div> --}}
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
      

        <div class="d-sm-flex justify-content-center justify-content-sm-between margin bg-light">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Sistem Pendukung Keputusan 2022</span>
        </div>
      </div>
      </footer>
      <!-- partial -->
    </div>
          

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
    <script src="{{ asset('plugins/ijaboCropTool/ijaboCropTool.min.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('assets')}}/js/dashboard.js"></script>
    <!-- End custom js for this page -->
        {{-- CUSTOM JS CODES --}}
<script>

  $.ajaxSetup({
     headers:{
       'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
     }
  });
  
  $(function(){

    /* UPDATE ADMIN PERSONAL INFO */

    $('#AdminInfoForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
           url:$(this).attr('action'),
           method:$(this).attr('method'),
           data:new FormData(this),
           processData:false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
               $(document).find('span.error-text').text('');
           },
           success:function(data){
                if(data.status == 0){
                  $.each(data.error, function(prefix, val){
                    $('span.'+prefix+'_error').text(val[0]);
                  });
                }else{
                  $('.admin_name').each(function(){
                     $(this).html( $('#AdminInfoForm').find( $('input[name="name"]') ).val() );
                  });
                  alert(data.msg);
                }
          }
        });
    });



    $(document).on('click','#change_picture_btn', function(){
      $('#admin_image').click();
    });


    $('#admin_image').ijaboCropTool({
          preview : '.admin_picture',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ route("userPictureUpdate") }}',
          // withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             alert(message);
          },
          onError:function(message, element, status){
            alert(message);
          }
       });


    $('#changePasswordAdminForm').on('submit', function(e){
         e.preventDefault();

         $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
              $(document).find('span.error-text').text('');
            },
            success:function(data){
              if(data.status == 0){
                $.each(data.error, function(prefix, val){
                  $('span.'+prefix+'_error').text(val[0]);
                });
              }else{
                $('#changePasswordAdminForm')[0].reset();
                alert(data.msg);
              }
            }
         });
    });

    
  });

</script>
</body>
</html>