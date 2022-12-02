
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="{{asset('template')}}/vendors/typicons.font/font/typicons.css">
  <link rel="stylesheet" href="{{asset('template')}}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('template')}}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('assets')}}/images/logos.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <style>.content-wrapper {
          background: #295ba3;
          padding: 1.875rem 1.875rem 0 1.875rem;
          width: 100%;  
        }
        </style>
      
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <h4><center>Hello! let's get started</center></h4>
              <h6 class="font-weight-light text-center">Sign in to continue.</h6>
              <form class="pt-3" method="POST" autocomplete="off" action="{{ route('login') }}">
				@csrf
                <div class="form-group">
					<label for="email text">E-mail Address</label>
					<input id="email" type="email" class="form-control" name="email" value="" required autofocus placeholder="Enter email">
					<span class="text-danger">@error('email'){{ $message }}@enderror</span>
                </div>
                <div class="form-group">
					<label for="password">Password</label>
					<input id="password" type="password" class="form-control" name="password" required data-eye placeholder="Enter password">
					<span class="text-danger">@error('password'){{ $message }}@enderror</span>
                </div>
                <div class="mt-3">
					<button type="submit" class="btn btn-block btn-secondary btn-rounded btn-lg font-weight-medium auth-form-btn">
						SIGN IN
					</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{route('register')}}" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="{{asset('template')}}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('template')}}/js/off-canvas.js"></script>
  <script src="{{asset('template')}}/js/hoverable-collapse.js"></script>
  <script src="{{asset('template')}}/js/template.js"></script>
  <script src="{{asset('template')}}/js/settings.js"></script>
  <script src="{{asset('template')}}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
