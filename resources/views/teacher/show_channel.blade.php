@extends('layouts.layout_nonton') 

@section('content')
  <main>
        <div class="container text-center">
            <!-- 21:9 aspect ratio -->
            <!-- <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="public/video/1.mp4"></iframe>
                </div> -->
            <!-- 16:9 aspect ratio -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="container">
                        <div class="svideo">

                            <!-- Card -->
                            <div class="card testimonial-card">
                                <!-- Background color -->
                                <div class="card-up purple-gradient lighten-1"></div>
                                <!-- Content -->
                                <div class="card-body">
                                  <!-- Name -->
                                  <h4 class="card-title">Channel {{ $searchChannel->title }}</h4>
                                  <hr>
                                  <!-- Quotation -->
                                    <p>
                                        <a data-toggle="modal" data-target="#modalRegisterForm">
                                            <button type="button" class="btn purple-gradient btn-rounded"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Video</button>
                                        </a>
                                    </p>
                                    @if(count($errors) > 0)
                                      <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h4><i class="icon fa fa-close"></i> Failed!</h4>
                                        @foreach($errors->all() as $error)
                                          <p><i>{{ $error }}</i></p>
                                        @endforeach
                                      </div>
                                   @endif
                                    <section class="text-center">
                                      <!--Grid row-->
                                      <div class="row mb-4 wow fadeIn">

                                          @foreach($dataVideo as $video)
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
                                </div>
                            </div>
                            <!-- Card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalRegisterForm" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Tambah Video</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="md-form" enctype="multipart/form-data" method="POST" action="/vendor/channel/video/add">
                      @csrf
                      <div class="modal-body">  
                              <input type="hidden" name="channelid" value="{{ $searchChannel->id }}">
                              <div class="file-field">
                                  <div class="file-path-wrapper">
                                      <input class="file-path validate" name="tittle_video" type="text" placeholder="Judul Video">
                                  </div>
                              </div>
                              <br>
                              <div class="file-field">
                                  <div class="file-path-wrapper">
                                      <input class="file-path validate" name="keterangan_video" type="text" placeholder="Keterangan">
                                  </div>
                              </div>
                              <br>
                              <div class="file-field">
                                  <div class="btn purple-gradient btn-sm float-left">
                                      <span><i class="fa fa-cloud-upload mr-2" aria-hidden="true"></i>Pilih File</span>
                                      <input type="file" name="poster_file" multiple>
                                  </div>
                                  *Upload poster video
                              </div>
                              <br>
                              <div class="file-field">
                                  <div class="btn purple-gradient btn-sm float-left">
                                      <span><i class="fa fa-cloud-upload mr-2" aria-hidden="true"></i>Pilih File</span>
                                      <input type="file" name="video_file" multiple>
                                  </div>
                                  *Upload video
                              </div>
                          
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-rounded purple-gradient my-4 btn-block" type="submit">Upload Video</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection