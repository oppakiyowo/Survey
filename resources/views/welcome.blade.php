@extends ('layouts.backend')

@section ('content')
<body class="login">
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
						<a class="link float-right "href="{{ route('password.request') }}">
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
						<a href="/register" id="show-signup" class="link">Sign Up</a>
					</div>

				</div>
			</div>
		</form>
			<div class="container container-signup container-transparent animated fadeIn">
				<h3 class="text-center">Sign Up</h3>
				<div class="login-form">
					<div class="form-group">
						<label for="fullname" class="placeholder"><b>Fullname</b></label>
						<input  id="fullname" name="fullname" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email" class="placeholder"><b>Email</b></label>
						<input  id="email" name="email" type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="passwordsignin" class="placeholder"><b>Password</b></label>
						<div class="position-relative">
							<input  id="passwordsignin" name="passwordsignin" type="password" class="form-control" required>
							<div class="show-password">
								<i class="icon-eye"></i>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="confirmpassword" class="placeholder"><b>Confirm Password</b></label>
						<div class="position-relative">
							<input  id="confirmpassword" name="confirmpassword" type="password" class="form-control" required>
							<div class="show-password">
								<i class="icon-eye"></i>
							</div>
						</div>
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
							<a href="#" class="btn btn-secondary w-100 fw-bold">Sign Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection