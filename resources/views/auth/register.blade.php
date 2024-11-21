@extends('auth/base-auth')
@section('title','Register')
@section('content')

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email">
                        @error('email')
                          <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                          </span>
                        @enderror
					</div>
                   
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="new-password">
                        @error('password')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm-password">
					</div>

					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="register" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					you have an account?<a href="/login">Sign in</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
