@extends('layouts.layout_nonton')

@section('content')
	<main class="mt-5 pt-5">
        <div class="container">

            <!--Section: Jumbotron-->
            <section class="card wow fadeIn" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">

                <!-- Content -->
                <div class="card-body text-white text-center py-5 px-5 my-5">

                    <h1 class="mb-4">
                        <strong>Belajar Apapun Dengan Viedu!</strong>
                    </h1>
                   
                    <p class="mb-4">
                        <strong>Viedu merupakan website yang menyediakan sebuah wadah untuk anda dalam mendapatkan ilmu.</strong>
                    </p>
                    <a target="_blank" class="btn btn-outline-white btn-lg">Selamat Menimba Ilmu!!!
                        <i class="fa fa-graduation-cap ml-2"></i>
                    </a>

                </div>
                <!-- Content -->
            </section>
            <!--Section: Jumbotron-->

            @if(!Auth::user())
            <div class="call-to-action text-center my-4">
	            <ul class="list-unstyled list-inline">
	                <li class="list-inline-item"><a href="/vendor/register" class="btn btn-success">Saya Pengajar</a></li>
	                <li class="list-inline-item"><a href="/register" class="btn btn-primary">Saya Murid</a></li>
	            </ul>
	        </div>
	        @endif

	        <nav class="d-flex justify-content-center wow fadeIn my-5">
	        	<h4>Maybe you like this video</h4>
	        </nav>
            <hr>
            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    @foreach($data_video as $video)
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                             	<div class="embed-responsive embed-responsive-16by9 rounded-top">
                             		<img class="embed-responsive-item" srcset="{{ asset($video->source_poster) }} 1x" alt="…" style="width: 350px; height: 200px;">
                             		<img class="embed-responsive-item" srcset="{{ asset($video->source_poster) }} 1x" alt="…" style="width: 20px; height: 20px;">
                                </div>	
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">{{ $video->title_video }}</h4>
                                <!--Text-->
                                <p class="card-text">{{ $video->description_video }}</p>
                                <a href="/member/nonton/{{ urlSlug($video->title_video) }}-start{{ $video->id }}" target="_blank" class="btn btn-primary btn-md">Start tutorial
                                    <i class="fa fa-play ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->
                    @endforeach

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Cards-->

            <nav class="d-flex justify-content-center wow fadeIn my-5">
	        	<h4>Maybe you like this Tutorial Project</h4>
	        </nav>
            <hr>
            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    @foreach($data_project as $project)
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                             	<div class="embed-responsive embed-responsive-16by9 rounded-top">
                             		<img class="embed-responsive-item" srcset="{{ asset($project->url_poster) }} 1x" alt="…" style="width: 350px; height: 200px;">
                                </div>	
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">{{ $project->title }}</h4> 
                                <!--Text-->
                                <p class="card-text">{{ $project->description }}</p>
                                <a href="/member/subscribe/{{ urlSlug($project->title) }}/{{ $project->id }}" target="_blank" class="btn btn-primary btn-md">Langganan Tutorial
                                    <i class="fa fa-shopping-cart ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->
                    @endforeach

                </div>
                <!--Grid row-->
            </section>
            <!--Section: Cards-->

        </div>
    </main>
@endsection