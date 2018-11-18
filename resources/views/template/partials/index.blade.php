<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/favicon_1.ico">
		<link rel="icon" type="text/css" href="icon.png">
		<title>Viedu Administrator</title>
		{!! view('template.partials.style') !!}
	</head>
	<body>
		<div class="row">
		    <div class="col-md-12">
		      <div class="background-admin">
		      	<div class="box">
		      		<h1>Selamat datang <b>{{ Auth::user()->name }}</b>
		      	</div>
		      </div>
		    </div>
		</div>
		<aside class="left-panel">
			<div class="logo">
				<a href="/administrator" class="logo-expanded">
					<img src="{{ asset('/icon.png') }}" class="img-responsive center-block">
				</a>
			</div>
			<nav class="navigation">
				<ul class="list-unstyled">
					<li @if(Request::segment(2)=='admin') class="active" @endif>
						<a href="/admin"><i class="ion-person"></i><span class="nav-label">User</span></a>
					</li>
					<li @if(Request::segment(2)=='video') class="active" @endif>
						<a href="/admin/video"><i class="ion-play"></i><span class="nav-label">Video</span></a>
					</li>
					<li @if(Request::segment(2)=='channel') class="active" @endif>
						<a href="/admin/channel"><i class="ion-android-image"></i><span class="nav-label">Channel</span></a>
					</li>
					<li @if(Request::segment(2)=='verifikasi') class="active" @endif>
						<a href="/admin/verifikasi"><i class="ion-person"></i><span class="nav-label">Verifikasi Guru</span></a>
					</li>
					<li>
	                    <a href="{{ route('logout') }}" class="nav-link"
	                        onclick="event.preventDefault();
	                          document.getElementById('logout-form').submit();">
	                        <i class="ion-android-close"></i> <span class="clearfix d-none d-sm-inline-block">Logout</span>
	                    </a>
	                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                      {{ csrf_field() }}
	                    </form>
	                </li>
				</ul>
			</nav>
		</aside>
		<section class="content">
			<header class="top-head container-fluid">
				<button type="button" class="navbar-toggle pull-left">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
			</header>
			<div class="wraper container-fluid">
				<div class="page-title">
					<h3 class="title">@yield('title')</h3>
				</div>
				@yield('content')
			</div>
			<footer class="footer">Copyrights &copy; 2018 All Rights Reserved by WDev.</footer>
		</section>
		{!! view('template.partials.script') !!}
	</body>
</html>