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
	                <li class="list-inline-item"><a href="/login" class="btn btn-primary">Masuk</a></li>
	                <li class="list-inline-item"><a href="/register" class="btn btn-primary">Daftar</a></li>
	            </ul>
	        </div>
	        @endif

            <hr class="my-5">

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
                                <a href="/member/nonton/{{ urlSlug($video->title_video) }}" target="_blank" class="btn btn-primary btn-md">Start tutorial
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

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                              <div class="embed-responsive embed-responsive-16by9 rounded-top">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iX7V-ZDaTqw" allowfullscreen></iframe>
                                </div>
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">MDB with Angular</h4>
                                <!--Text-->
                                <p class="card-text">Built with Angular 5, Bootstrap 4 and TypeScript. CLI version available. </p>
                                <a href="https://mdbootstrap.com/angular/" target="_blank" class="btn btn-primary btn-md">Free download
                                    <i class="fa fa-download ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                               <div class="embed-responsive embed-responsive-16by9 rounded-top">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iX7V-ZDaTqw" allowfullscreen></iframe>
                                </div>
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">MDB with React</h4>
                                <!--Text-->
                                <p class="card-text">Based on the latest Bootstrap 4 and React 16. </p>
                                <a href="https://mdbootstrap.com/react/" target="_blank" class="btn btn-primary btn-md">Free download
                                    <i class="fa fa-download ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                           <div class="embed-responsive embed-responsive-16by9 rounded-top">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iX7V-ZDaTqw" allowfullscreen></iframe>
                                </div>
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">MDB with Vue</h4>
                                <!--Text-->
                                <p class="card-text">Based on the latest Bootstrap 4 and Vue 2.5.7. </p>
                                <a href="https://mdbootstrap.com/vue/" target="_blank" class="btn btn-primary btn-md">Free download
                                    <i class="fa fa-download ml-2"></i>
                                </a>
                            </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Pagination-->
                <nav class="d-flex justify-content-center wow fadeIn">
                    <ul class="pagination pg-blue">

                        <!--Arrow left-->
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="#">1
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!--Pagination-->

            </section>
            <!--Section: Cards-->

        </div>
    </main>
@endsection