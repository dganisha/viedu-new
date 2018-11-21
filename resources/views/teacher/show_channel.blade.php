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
                                        <a data-toggle="modal" data-target="#newVideo">
                                            <button type="button" class="btn purple-gradient btn-rounded"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Video</button>
                                        </a>
                                        <a data-toggle="modal" data-target="#deleteChannel">
                                            <button type="button" class="btn btn-danger btn-rounded"><i class="fa fa-remove" aria-hidden="true"></i>  Hapus Channel</button>
                                        </a>
                                        <a data-toggle="modal" data-target="#editChannel">
                                            <button type="button" class="btn btn-warning btn-rounded"><i class="fa fa-edit" aria-hidden="true"></i>  Edit Channel</button>
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
                                                      <a class="delete-video" data-toggle="modal" data-id="{{ $video->id }}">
                                                          <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-remove" aria-hidden="true"></i>  Hapus Video</button>
                                                      </a>
                                                      <a class="edit-video" data-toggle="modal" data-id="{{ $video->id }}" data-project="{{ $video->project_id }}" data-title="{{ $video->title_video }}" data-desk="{{ $video->description_video }}">
                                                          <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>  Edit Video</button>
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

        <div class="modal fade" id="newVideo" >
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

        <div class="modal fade" id="deleteChannel" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Konfirmasi Hapus Channel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="md-form" method="POST" action="/vendor/channel/delete">
                      @csrf
                      <div class="modal-body">  
                        <input type="hidden" name="channelid" value="{{ $searchChannel->id }}">
                        Apakah anda yakin untuk menghapus channel ini? Ketika menghapusnya, semua video dan user yang telah subscribe channel ini akan dihapus. Maka member yang telah subscribe channel ini tidak akan bisa melihat kembali video nya. Aksi ini tidak dapat di kembalikan!
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-rounded btn-danger my-4 btn-block" type="submit">I KNOW!</button>
                        <button class="btn btn-rounded btn-block btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editChannel" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Edit Channel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="md-form" enctype="multipart/form-data" method="POST" action="/vendor/channel/edit">
                      @csrf
                      <div class="modal-body">  
                        <input type="hidden" name="channelid" value="{{ $searchChannel->id }}">
                        <div class="file-field">
                          <div class="file-path-wrapper">
                            <input class="file-path validate" name="namachannel" type="text" placeholder="Nama Channel" value="{{ $searchChannel->title }}" required="">
                          </div>
                        </div>
                        <br>
                        <div class="file-field">
                            <div class="file-path-wrapper">
                              <textarea class="file-path validate form-control" name="ketchannel" placeholder="Keterangan" required="" rowspan="2">{{ $searchChannel->description }}</textarea>
                            </div>
                        </div>
                        <br>
                        <div class="file-field">
                            <div class="btn purple-gradient btn-sm float-left">
                              <span><i class="fa fa-cloud-upload mr-2" aria-hidden="true"></i>Pilih Poster Channel</span>
                                <input type="file" name="posterchannel">
                            </div>
                            *Max 2MB, <small>Jika tdk mengganti poster, tidak usah pilih </small>
                        </div>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-rounded btn-success my-4 btn-block" type="submit">Rubah Sekarang</button>
                        <button class="btn btn-rounded btn-block btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="deleteVideo" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Konfirmasi Hapus Channel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="md-form" method="POST" action="/vendor/channel/video/delete">
                      @csrf
                      <div class="modal-body">  
                        <input type="hidden" id="id_show" name="videoid" value="">
                        Apakah anda yakin untuk menghapus Video ini? Ketika menghapusnya, video yang bersangkutan dan user tidak akan bisa melihat video ini lagi. Aksi ini tidak dapat di kembalikan!
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-rounded btn-danger my-4 btn-block" type="submit">I KNOW!</button>
                        <button class="btn btn-rounded btn-block btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editVideo" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Edit Channel</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="md-form" enctype="multipart/form-data" method="POST" action="/vendor/channel/video/edit">
                      @csrf
                      <div class="modal-body">  
                        <input type="hidden" name="videoid" id="videoid_show" value="">
                        <input type="hidden" name="channelid" id="project_id_show" value="">
                        <div class="file-field">
                          <div class="file-field">
                            <div class="file-path-wrapper">
                              <input class="file-path validate" name="tittle_video" type="text" placeholder="Judul Video" required="" id="show_title" value="">
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="file-field">
                          <div class="file-path-wrapper">
                              <input class="file-path validate" name="keterangan_video" type="text" placeholder="Keterangan" required="" id="show_desk" value="">
                          </div>
                        </div>
                        <br>
                        <div class="file-field">
                            <div class="btn purple-gradient btn-sm float-left">
                                <span><i class="fa fa-cloud-upload mr-2" aria-hidden="true"></i>Pilih File</span>
                                <input type="file" name="poster_file" multiple>
                            </div>
                            *Upload poster video *<small>Tdk perlu dipilih jk tidak ubah poster</small>
                        </div>
                        <br>
                        <div class="file-field">
                            <div class="btn purple-gradient btn-sm float-left">
                                <span><i class="fa fa-cloud-upload mr-2" aria-hidden="true"></i>Pilih File</span>
                                <input type="file" name="video_file" multiple>
                            </div>
                            *Upload video *<small>Tdk perlu dipilih jk tidak ubah video</small>
                        </div>
                        <br>
                        <small style="font-size: 10px;">*Untuk mengubah video, harus mengubah poster dan video nya</small>
                      </div>
                      <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-rounded btn-success my-4 btn-block" type="submit">Rubah Sekarang</button>
                        <button class="btn btn-rounded btn-block btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>        

    </main>
@endsection