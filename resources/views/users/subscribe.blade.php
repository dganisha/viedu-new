@extends('layouts.layout_nonton')

@section('content')
	<main>
        <div class="container-fluid text-center">
	        <!-- 21:9 aspect ratio -->
			<!-- <div class="embed-responsive embed-responsive-21by9">
					<iframe class="embed-responsive-item" src="public/video/1.mp4"></iframe>
				</div> -->
			<!-- 16:9 aspect ratio -->
			<div class="row">
				<div class="col-sm-12">
				   	<div class="container">
				    	<div class="svideo">	
				    			@if(count($errors) > 0)
                                    <div class="alert alert-danger alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <h4><i class="icon fa fa-close"></i> Failed!</h4>
                                      @foreach($errors->all() as $error)
                                        <p><i>{{ $error }}</i></p>
                                      @endforeach
                                    </div>
                                 @endif
                                 @if (Session::has('success'))
                                    <div class="alert alert-success alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <h4><i class="icon fa fa-check"></i> Success!</h4>
                                      {{ Session::get('success')}}
                                    </div>
                                @elseif (Session::has('failed'))
                                    <div class="alert alert-danger alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <h4><i class="icon fa fa-close"></i> Failed!</h4>
                                      {{ Session::get('failed')}}
                                    </div>
                                @endif
							<div class="judul">	
								<h4>{{ $channel->title }}</h4>
							</div>
							@if($countLangganan == 0)
							<form method="POST" action="/member/subscribe/addSubscribe">
								@csrf
								<input type="hidden" name="channelid" value="{{ $channel->id }}">
								<button type="submit" class="btn btn-primary waves-effect"><i class="fa fa-star"></i> Subscribe Channel</button>
							</form>
							@endif
							<div class="desk">
								<h4>Description</h4>
								<small><p>{{ $channel->description }}</p></small>
							</div>
							<!-- Card -->
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
				                                </div>	
				                            </div>

				                            <!--Card content-->
				                            <div class="card-body">
				                                <!--Title-->
				                                @if($countLangganan == 0)
				                                <h4 class="card-title">{{ $video->title_video }}</h4>
				                                @else
				                                <a href="/member/nonton/{{ urlSlug($video->title_video) }}-start{{ $video->id }}"><h4 class="card-title">{{ $video->title_video }}</h4></a>
				                                @endif
				                                <!--Text-->
				                                <p class="card-text">{{ $video->description_video }}</p>
				                            </div>
				                        </div>
				                        <!--/.Card-->
				                    </div>
				                    <!--Grid column-->
				                    @endforeach
				                </div>
				                <!--Grid row-->
				            </section>

							<div class="card testimonial-card">

								  <!-- Background color -->
								  <div class="card-up indigo lighten-1"></div>

								  <!-- Avatar -->
								  <div class="avatar mx-auto white">
								    <img src="{{ asset($channel->user->url_foto) }}" alt="User Image">
								  </div>

								  <!-- Content -->
								  <div class="card-body">
								    <!-- Name -->
								    <h4 class="card-title">{{ $channel->user->name }}</h4>
								    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
								    <!-- Twitter -->
								    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
								    <!-- Dribbble -->
								    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>
								    <hr>
								    <!-- Quotation -->
								    <p><i class="fa fa-quote-left"></i><i> {{ $dataGuru->bio }} </i><i class="fa fa-quote-right"></i></p>
								  </div>
							</div>
							<!-- Card -->
        				</div>
					</div>
				</div>
			</div>
				
				<!-- 4:3 aspect ratio -->
				<!-- <div class="embed-responsive embed-responsive-4by3">
				  <iframe class="embed-responsive-item" src="public/video/1.mp4"></iframe>
				</div> -->

				<!-- 1:1 aspect ratio -->
				<!-- <div class="embed-responsive embed-responsive-1by1">
				  <iframe class="embed-responsive-item" src="public/video/1.mp4"></iframe>
				</div> -->
		</div>
        
    </main>
@endsection