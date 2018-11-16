@extends('layouts.layout_nonton')

@section('content')
	<main class="mt-5 pt-5">
        <div class="container">
            <nav class="d-flex justify-content-center wow fadeIn my-5">
	        	@if(isset($query))
	        	<h4>Berikut hasil dari pencarian <b>{{ $query }}</b></h4>
	        	@else
	        	<h4>Mohon maaf, kata kunci tidak ditemukan</h4>
	        	@endif
	        </nav>
            <hr>
            <!--Section: Cards-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row mb-4 wow fadeIn">

                    @foreach($cari_tutorial as $tutorial)
                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay">
                             	<div class="embed-responsive embed-responsive-16by9 rounded-top">
                             		<img class="embed-responsive-item" srcset="{{ asset($tutorial->url_poster) }} 1x" alt="…" style="width: 350px; height: 200px;">
                                </div>	
                            </div>

                            <!--Card content-->
                            <div class="card-body">
                                <!--Title-->
                                <h4 class="card-title">{{ $tutorial->title }}</h4> 
                                <!--Text-->
                                <p class="card-text">{{ $tutorial->description }}</p>
                                <a href="/member/subscribe/{{ urlSlug($tutorial->title) }}/{{ $tutorial->id }}" target="_blank" class="btn btn-primary btn-md">Langganan Tutorial
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