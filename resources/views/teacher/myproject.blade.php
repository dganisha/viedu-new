@extends('layouts.layout')

@section('content')
	<div class="content_middle">
        <div class="container">
            <div class="content_middle_box">
                <div class="top_grid">
                    <div class="col-md-12">
                      <div class="grid1">
                         <div class="inner_wrap" style="text-align: left;">
                            <h3><strong>Hello {{ Auth::user()->name }} !</strong></h3>
                            <a href="#" class="btn btn-success">Upload your Tutorial</a>
                         </div>
                       </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-3">
                      <div class="grid1">
                        <div class="view view-first">
                          <div class="index_img"><img src="{{ asset('educourse/images/pic1.jpg') }}" class="img-responsive" alt=""/></div>
                            <div class="sale">Rp. 500.000,-</div>
                              <div class="mask">
                                <div class="info"><i class="fa fa-link"></i> Show More..</div>
                               </div>
                           </div> 
                         <div class="inner_wrap">
                            <h3>Kursus Tutorial Pemograman Berbasis Website Laravel 5.7</h3>
                            <ul class="star1">
                              <h4 class="green">Dhiemas Ganisha</h4>
                              <li><a href="#"> <img src="{{ asset('educourse/images/star1.png') }}" alt="">(236)</a></li>
                            </ul>
                         </div>
                       </div>
                    </div>
                    <div class="col-md-3">
                      <div class="grid1">
                        <div class="view view-first">
                          <div class="index_img"><img src="{{ asset('educourse/images/pic1.jpg') }}" class="img-responsive" alt=""/></div>
                            <div class="sale">Rp. 500.000,-</div>
                              <div class="mask">
                                <div class="info"><i class="fa fa-link"></i> Show More..</div>
                               </div>
                           </div> 
                         <div class="inner_wrap">
                            <h3>Kursus Tutorial Pemograman Berbasis Website Laravel 5.7</h3>
                            <ul class="star1">
                              <h4 class="green">Dhiemas Ganisha</h4>
                              <li><a href="#"> <img src="{{ asset('educourse/images/star1.png') }}" alt="">(236)</a></li>
                            </ul>
                         </div>
                       </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection