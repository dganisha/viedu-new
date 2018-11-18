@extends('layouts.layout_nonton')

@section('content')
	<div class="container-fluid">
	    <main>
	        <!-- Material form login -->
	        <div class="card">
	            <h5 class="card-header info-color white-text text-center py-4">
	                <strong>Reset Password</strong>
	            </h5>

	            <!--Card content-->
	            <div class="card-body px-lg-5 pt-0">
	            	<br>
	            	@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
	                <!-- Form -->
	                <form class="text-center" style="color: #757575;" method="POST" action="{{ route('password.email') }}">
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
	                    <!-- Reset button -->
	                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">{{ __('Reset Password') }}</button>
	            

	                </form>
	                <!-- Form -->

	            </div>

	        </div>
	        <!-- Material form login -->
	    </main>
	    <!--/Main layout-->
	</div>
@endsection