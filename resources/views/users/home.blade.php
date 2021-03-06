@extends('layouts.layout_nonton')
@section('style')
  <style>
    .call-to-action ul li a{
      width: 15em!important;
    }
  </style>
@endsection
@section('content')
<!--Carousel Wrapper-->
        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="view">

                  <img class="d-block w-100"  srcset="{{ asset('/1.png') }}"   class="h-75 d-inline-block" alt="First slide">
                <div class="mask rgba-black-slight"></div>
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">Selamat Datang Di Viedu!</h3>
                
              </div>
            </div>
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100 " class="h-75 d-inline-block" srcset="{{ asset('/2.png') }}"  class="img-fluid" alt="Second slide">
                
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">Cara belajar baru untuk menghadapi revolusi industri 4.0</h3>
                <p>Melalui Video Pembelajaran</p>
              </div>
            </div>
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view">
                <img class="d-block w-100" srcset="{{ asset('/3.png') }}" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
              </div>
              <div class="carousel-caption">
                <h3 class="h3-responsive">Dapatkan pengalaman mendapat ilmu dengan mudah</h3>
           
              </div>
            </div>
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        @if(!Auth::user())
            <div class="call-to-action text-center my-4">
              <ul class="list-unstyled list-inline">
                  <li class="list-inline-item"><a href="/vendor/register" class="btn btn-success btn-rounded">Saya Pengajar</a></li>
                  <li class="list-inline-item"><a href="/register" class="btn btn-primary btn-rounded">Saya Murid</a></li>
              </ul>
          </div>
          @endif
        <!--/.Carousel Wrapper-->
            <!--Section: Jumbotron-->
	<main class="mt-5 pt-5">
    <div id="home-section">
      <div class="container">
        <div class="container">
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
                             		<img class="embed-responsive-item" srcset="{{ asset($video->source_poster) }} 1x" alt="…" style="width: 350px; height: 200px;object-fit: cover;object-position:center;">
                                </div>	
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">{{ $video->title_video }}</h4>
                                <!--Text-->
                                <p class="card-text">{{ str_limit($video->description_video, 40) }}</p>
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
                    

                  </div>
                  <!-- Content -->
              </section>
              <nav class="d-flex justify-content-center wow fadeIn my-5">
  	        	<h4>Mungkin anda menyukai channel ini.</h4>
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
                               		<img class="embed-responsive-item" srcset="{{ asset($project->url_poster) }} 1x" alt="…" style="width: 350px; height: 200px;object-fit: cover;object-position:center;">
                                </div>	
                              </div>

                              <!--Card content-->
                              <div class="card-body">
                                  <!--Title-->
                                  <h4 class="card-title">{{ $project->title }}</h4> 
                                  <!--Text-->
                                  <p class="card-text">{{ str_limit($project->description, 40) }}</p>
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
          </div>
        </div>
    </main>
@endsection