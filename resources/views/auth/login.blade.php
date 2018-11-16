@extends('layouts.layout_nonton')

@section('content')
	<div class="container-fluid">
	    <main>
	        <!-- Material form login -->
	        <div class="card">
	            <h5 class="card-header info-color white-text text-center py-4">
	                <strong>Sign in</strong>
	            </h5>

	            <!--Card content-->
	            <div class="card-body px-lg-5 pt-0">

	                <!-- Form -->
	                <form class="text-center" style="color: #757575;" method="POST" action="{{ route('login') }}">
	                	@csrf
	                    <!-- Email -->
	                    <div class="md-form">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">{{ __('E-Mail Address') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

	                    <!-- Password -->
	                    <div class="md-form">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <label for="password">{{ __('Password') }}</label>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

	                    <div class="d-flex justify-content-around">
	                        <div>
	                    	<!-- Remember me -->
	                    	    <div class="form-check">
	                    	        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

	                    	        <label class="form-check-label" for="remember">
	                    	            {{ __('Remember Me') }}
	                    	        </label>
	                    	    </div>
	                        </div>

	                        <div>
	                            <!-- Forgot password -->
	                            <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
	                        </div>
	                    </div>

	                    <!-- Sign in button -->
	                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('Sign In') }}</button>

	                    <!-- Register -->
	                    <p>Bukan Member?
	                        <a href="{{ route('register') }}">{{ __('Daftar') }}</a>
	                    </p>

	                    <!-- Social login -->
	            

	                </form>
	                <!-- Form -->

	            </div>

	        </div>
	        <!-- Material form login -->
	    </main>
	    <!--/Main layout-->
	</div>
@endsection