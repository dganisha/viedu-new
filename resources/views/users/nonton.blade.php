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
						    	<video controls>
								  <source src="{{ asset('/viedu/public/video/1.mp4') }}" type="video/mp4">
								  <!-- <source src="public/video/1.mp4" type="video/ogg"> -->
								  Your browser does not support HTML5 video.
								</video>
								<!-- <iframe class="embed-responsive-item"  src="public/video/1.mp4"></iframe> -->
							</div>
							<div class="judul">	
								<h4>Tutorial membuat portfolio Laravel</h4>
								<p>Category : Pemrograman Website</p>
							</div>
							<div class="desk">
								<h4>Description</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, aspernatur rerum sed eos doloremque! Error repellendus id cumque, tenetur, at quidem veniam praesentium omnis nisi nobis, quia atque reiciendis dolore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, aspernatur rerum sed eos doloremque! Error repellendus id cumque, tenetur, at quidem veniam praesentium omnis nisi nobis, quia atque reiciendis dolore.</p>
								<p><a href="#">Load More</a></p>
							</div>
							<div class="module">
								<h4>Module</h4>
								<ul class="border-left">
									<li>
										<div class="row">
											<div class="col-sm-1">
												<i class="fa fa-file-text-o"></i>
											</div>
											<div class="col-sm-11">
												<div class="dkanan">
													<span>Module 1</span>
													<p>Untuk mendapatkan modul anda harus Login terlebih dahulu</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-sm-1">
												<i class="fa fa-code"></i>
											</div>
											<div class="col-sm-11">
												<div class="dkanan">
													<span>Module 2</span>
													<p>Untuk mendapatkan modul anda harus Login terlebih dahulu</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-sm-1">
												<i class="fa fa-code"></i>
											</div>
											<div class="col-sm-11">
												<div class="dkanan">
													<span>Module 3</span>
													<p>Untuk mendapatkan modul anda harus Login terlebih dahulu</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-sm-1">
												<i class="fa fa-file-text-o"></i>
											</div>
											<div class="col-sm-11">
												<div class="dkanan">
													<span>Module 4</span>
													<p>Untuk mendapatkan modul anda harus Login terlebih dahulu</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-sm-1">
												<i class="fa fa-code"></i>
											</div>
											<div class="col-sm-11">
												<div class="dkanan">
													<span>Module 5</span>
													<p>Untuk mendapatkan modul anda harus Login terlebih dahulu</p>
												</div>
											</div>
										</div>
									</li>
								</ul>
								<p><a href="#">Load More</a></p>
							</div>
							<!-- Card -->
								<div class="card testimonial-card">

								  <!-- Background color -->
								  <div class="card-up indigo lighten-1"></div>

								  <!-- Avatar -->
								  <div class="avatar mx-auto white">
								    <img src="{{ asset('/viedu/public/img/foto.jpg') }}" alt="User Image">
								  </div>

								  <!-- Content -->
								  <div class="card-body">
								    <!-- Name -->
								    <h4 class="card-title">M Akbar Satriadi</h4>
								    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin"></i></a>
								    <!-- Twitter -->
								    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter"></i></a>
								    <!-- Dribbble -->
								    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook"></i></a>
								    <hr>
								    <!-- Quotation -->
								    <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, adipisci</p>
								  </div>
								</div>
							<!-- Card -->
        				</div>
					</div>
				</div>
				<div class="col-sm-4 red">
					<div class="vid">
						<video width="90%">
							<source src="{{ asset('/viedu/public/video/4.mp4') }}" type="video/mp4">
							    <source src="mov_bbb.ogg" type="video/ogg">
							    Your browser does not support HTML5 video.
						</video>
						<h5>voluptatum adipisci expedita doloribus, fugiat nesciunt.</h5>
					</div>
					<div class="vid"> 
						<video width="90%">
							<source src="{{ asset('/viedu/public/video/4.mp4') }}" type="video/mp4">
							    <source src="mov_bbb.ogg" type="video/ogg">
							    Your browser does not support HTML5 video.
						</video>
						<h5>Similique fugit exercitationem accusantium atque illo, molestiae cum asperiores.</h5>
					</div>
					<div class="vid"> 
						<video width="90%">
							<source src="{{ asset('/viedu/public/video/3.mp4') }}" type="video/mp4">
							    <source src="mov_bbb.ogg" type="video/ogg">
							    Your browser does not support HTML5 video.
						</video>
						<h5>Similique fugit exercitationem accusantium atque illo, molestiae cum asperiores.</h5>
					</div> 
					<div class="vid"> 
						<video width="90%">
							<source src="{{ asset('/viedu/public/video/1.mp4') }}" type="video/mp4">
							    <source src="mov_bbb.ogg" type="video/ogg">
							    Your browser does not support HTML5 video.
						</video>
						<h5>Lorem ipsum dolor sit amet, consectetur</h5>
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