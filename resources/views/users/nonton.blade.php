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
				<div class="col-sm-8">
				   	<div class="container">
				    	<div class="svideo">	
						    <div class="embed-responsive embed-responsive-16by9">
						    	@if($countSub == 0)
						    	{{-- <img src="{{ asset('/icon.png') }}" class="image-responsive" style="width: 150px"> --}}
						    	<video controls>
								  	<source src="{{ asset('/icon.png') }}" type="video/mp4">
								  	Your browser does not support HTML5 video.
								</video>
						    	@else
						    	<video controls>
								  	<source src="{{ asset($data_video->source_video) }}" type="video/mp4">
								  	Your browser does not support HTML5 video.
								</video>
								@endif
							</div>
							<div class="judul">	
								<h4>{{ $data_video->title_video }} @if($countFav != 0)<i class="fa fa-star" style="color: orange;"></i>@endif</h4>
							</div>

							<div class="desk">
								<h4>Description</h4>
								<small><p>{{ $data_video->description_video }}</p></small>
								@if($countFav == 0)
								<form method="POST" action="/favorite">
									@csrf
									<input type="hidden" name="videoid" value="{{ $data_video->id }}">
									<button type="submit" class="btn btn-primary waves-effect" data-dismiss="modal" onclick="addFav()"><i class="fa fa-star"></i> Tambah ke Favorit</button>
								</form>
								@endif
							</div>
							<!-- Card -->
							<div class="card testimonial-card">

								  <!-- Background color -->
								  <div class="card-up indigo lighten-1"></div>

								  <!-- Avatar -->
								  <div class="avatar mx-auto white">
								    <img src="{{ asset($data_video->project->user->url_foto) }}" alt="User Image">
								  </div>

								  <!-- Content -->
								  <div class="card-body">
								    <!-- Name -->
								    <h4 class="card-title">{{ $data_video->project->user->name }}</h4>
								    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
								    <!-- Twitter -->
								    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
								    <!-- Dribbble -->
								    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>
								    <hr>
								    <!-- Quotation -->
								    <p><i class="fa fa-quote-left"></i><i> {{ $data_video->project->user->bio }} </i><i class="fa fa-quote-right"></i></p>
								  </div>
							</div>
							<!-- Card -->
							<div class="module">
								<h4>About this Video</h4>
								This video from channel <b>{{ $data_video->project->title }}</b>, for more video <a href="/member/subscribe/{{ urlSlug($data_video->project->title) }}/{{ $data_video->project->id }}">click here</a>
							</div>

        				</div>
					</div>
				</div>
				<div class="col-sm-4 blue-gradient">
					@foreach($randomVideo as $vid)
					<div class="vid">
						<div class="embed-responsive embed-responsive-16by9 rounded-top">
                        	<img class="embed-responsive-item" srcset="{{ asset($vid->source_poster) }} 1x" alt="…">
                       	</div>
						<a href="/member/nonton/{{ urlSlug($vid->title_video) }}-start{{ $vid->id }}"><h5 class="text-center">{{ $vid->title_video }}</h5></a>
					</div>
					@endforeach
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