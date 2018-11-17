@extends('layouts.layout_nonton')

@section('content')
	<div class="container-fluid">
	    <main>
	        <!-- Material form login -->
	        <div class="card">
	            <h5 class="card-header info-color white-text text-center py-4">
	                <strong>Sign Up Pengajar</strong>
	            </h5>

	            <!--Card content-->
	            <div class="card-body px-lg-5 pt-0">

	                <!-- Form -->
	                <form class="text-center" style="color: #757575;" method="POST" action="/vendor/register">
	                	@csrf
	                    <!-- Email -->
	                    <div class="md-form">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            <label for="name">{{ __('Full Name') }}</label>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

	                    <div class="md-form">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email">{{ __('E-Mail Address') }}</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="md-form">
                            <input id="no_ktp" type="number" class="form-control{{ $errors->has('no_ktp') ? ' is-invalid' : '' }}" name="no_ktp" value="{{ old('ktp') }}" required autofocus>
                            <label for="no_ktp">{{ __('Nomor KTP') }}</label>

                                @if ($errors->has('no_ktp'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('no_ktp') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="md-form">
                            <input id="phone_number" type="text" class="form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}" name="phone_number" value="{{ old('phone_number') }}" required autofocus>
                            <label for="phone_number">{{ __('Phone Number') }}</label>

                                @if ($errors->has('phone_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
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

                        <div class="md-form">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            <label for="password">{{ __('Confirm Password') }}</label>
                        </div>

	                    <!-- Sign in button -->
	                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('Sign Up') }}</button>

	                    <!-- Register -->
	                    <p>Punya akun?
	                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
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