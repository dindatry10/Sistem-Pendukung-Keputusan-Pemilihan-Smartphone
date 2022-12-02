
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
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
              {{-- <div class="brand-logo">
                <img src="{{asset('template')}}/images/logo.svg" alt="logo">
              </div> --}}
              <h4><center>Hello! New here?</center></h4>
              <h6 class="font-weight-light text-center">Signing up is easy. It only takes a few steps</h6>
              <form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('register') }}">
				@if ( Session::get('success'))
				<div class="alert alert-success">
					{{ Session::get('success') }}
				</div>
			@endif
			@if ( Session::get('error'))
				<div class="alert alert-danger">
					{{ Session::get('error') }}
				</div>
			@endif
			@csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input id="name" type="text" class="form-control" name="name"  autofocus placeholder="Enter name" value="{{ old('name') }}">
				<span class="text-danger">@error('name'){{ $message }}@enderror</span>
			</div>
			<div class="form-group">
				<label for="email">E-Mail Address</label>
				<input id="email" type="email" class="form-control" name="email"  placeholder="Enter email" value="{{ old('email') }}">
				<span class="text-danger">@error('email'){{ $message }}@enderror</span>
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" type="password" class="form-control" name="password"  data-eye placeholder="Enter password">
				<span class="text-danger">@error('password'){{ $message }}@enderror</span>
			</div>
			<div class="form-group">
				<label for="password-confirm">Confirm Password</label>
				<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye placeholder="Enter confirm password">
				<span class="text-danger">@error('password_confirmation'){{ $message }}@enderror</span>				
			</div>
                <div class="mt-3">
					<button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn btn-rounded">
						Register
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
                  Don't have an account? <a href="{{route('login')}}" class="text-secondary">Login</a>
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
