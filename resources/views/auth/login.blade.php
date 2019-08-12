<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login Page</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
	

	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	  <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
	  <link  href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
	  <script src="{{ asset('js/toastr.min.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/atlantis.css') }}">
</head>
<body class="login">
	@include ('partial.message')
	<div class="wrapper wrapper-login wrapper-login-full p-0">
		<div class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
			<h1 class="title fw-bold text-white mb-3">Survey</h1>
			<p class="subtitle text-white op-7">Ayo bergabung dengan komunitas kami untuk masa depan yang lebih baik</p>
		</div>
		<div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
			<div class="container container-login container-transparent animated fadeIn">
				<h3 class="text-center">Sign In To Admin</h3>
				<div class="login-form">
					<form method="POST" action="{{ route('login') }}">
							@csrf
					<div class="form-group">
						<label for="email">{{ __('E-Mail Address') }}</label>
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					<div class="form-group">
							<label for="password">{{ __('Password') }}</label>
						@if (Route::has('password.request'))
						<a class="link float-right link" href="#" id="show-signup" >
							{{ __('Forgot Your Password?') }}
						</a>
					@endif
						<div class="position-relative">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							<div class="show-password">
								<i class="icon-eye"></i>
							</div>
						</div>
					</div>
					<div class="form-group form-action-d-flex mb-3">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="rememberme" {{ old('remember') ? 'checked' : '' }}>
							<label class="custom-control-label m-0" for="rememberme">Remember Me</label>
						</div>
						<button type="submit" class="btn btn-primary">
								{{ __('Login') }}
							</button>
					</div>
				
					<div class="login-account">
						<span class="msg">Don't have an account yet ?</span>
						<a href="/register" class="link">Sign Up</a>
					</div>

				</div>
			</div>
		</form>
			<div class="container container-signup container-transparent animated fadeIn">
				<h3 class="text-center">Reset Password</h3>
				<div class="login-form">
					<form method="POST" action="{{ route('password.email') }}">
                        @csrf
					<div class="form-group">
						<label for="email" class="placeholder"><b>Email Address</b></label>
						<input  id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus required>
							@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
					</div>
					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="agree" id="agree">
							<label class="custom-control-label" for="agree">I Agree the terms and conditions.</label>
						</div>
					</div>
					<div class="row form-action">
						<div class="col-md-6">
							<a href="#" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancel</a>
						</div>
						<div class="col-md-6">
							<button type="submit" class="btn btn-secondary w-100 fw-bold">Reset Password</button>
						</div>
						
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/atlantis.min.js"></script>
</body>
</html>

