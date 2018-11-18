@extends('layouts.layout_nonton') @section('content')
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
                            <!-- Avatar -->
                            <div class="avatar mx-auto white">
                                <img src="{{ auth()->user()->url_foto }}" class="rounded-circle" alt="{{ auth()->user()->name }}">
                            </div>

                            <!-- Content -->
                            <div class="card-body">
                                <!-- Name -->
                                <h4 class="card-title">{{ auth()->user()->name }}</h4>
                                <hr>
                                <!-- Quotation -->
                                <p>
                                  @if($dataGuru->verifikasi == 'non-verified')
                                  <button type="button" class="btn btn-outline-warning btn-rounded waves-effect">{{ $dataGuru->verifikasi }}</button>
                                  @else
                                  <button type="button" class="btn btn-outline-success btn-rounded waves-effect">{{ $dataGuru->verifikasi }}</button>
                                  @endif
                                </p>
                                <p></p>
                                <p><i class="fa fa-quote-left"></i> {{ $dataGuru->bio }} <i class="fa fa-quote-right"></i> </p>
                                <hr>
                            </div>

                            <ul class="nav nav-tabs nav-justified md-tabs purple-gradient" id="myTabJust" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just" aria-selected="false">Profil</a>
                                </li>
                            </ul>
                            <div class="tab-content card pt-5" id="myTabContentJust">
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
                                <div class="tab-pane fade show active" id="home-just" role="tabpanel" aria-labelledby="home-tab-just">

                                    <p><a href="channel.html" data-toggle="modal" data-target="#modalRegisterForm" class="btn-floating btn-lg purple-gradient"><i class="fa fa-plus"></i></a></p>

                                    @if($countChannel == 0)
                                       <p>Belum Membuat Channel. Buatlah Channel! pastikan Verifikasi Akun Anda Terlebih Dahulu</p>
                                    @else
                                       <div class="row mb-4 wow fadeIn">
                                          @foreach($dataChannel as $project)
                                            <!--Grid column-->
                                            <div class="col-lg-4 col-md-4 ">
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
                                                        <p class="card-text">{{ str_limit($project->description, 40) }}
</p>
                                                        <a href="/vendor/channel/{{ urlSlug($project->title) }}/{{ $project->id }}" target="_blank" class="btn btn-primary btn-md">Buka Channel</a>
                                                    </div>

                                                </div>
                                                <!--/.Card-->

                                            </div>
                                            <!--Grid column-->
                                          @endforeach
                                       </div>
                                    @endif   
                                </div>
                                <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                                  <form method="POST" action="/vendor/profile/update">
                                    @csrf
                                        <p><button class="btn-floating btn-lg peach-gradient"><i class="fa fa-pencil"></i></button></p>
                                        <div class="form-group">
                                            <div class="md-form">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <div class="file-field">
                                                            <div class="file-path-wrapper">
                                                                <input disabled type="text" class="file-path validate" placeholder="Nama Lengkap" value="{{ Auth::user()->name }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="file-field">
                                                    <div class="file-path-wrapper">
                                                        <input disabled type="email" class="file-path validate" placeholder="E-mail" value="{{ Auth::user()->email }}">
                                                    </div>
                                                </div>
                                                <br>

                                                <!-- Phone number -->
                                                <div class="file-field">
                                                    <div class="file-path-wrapper">
                                                        <input type="text" id="defaultRegisterPhonePassword" class="file-path validate" placeholder="Nomor Telepon" name="no_hp" aria-describedby="defaultRegisterFormPhoneHelpBlock" value="{{ Auth::user()->phone_number }}" required="">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="file-field">
                                                    <div class="file-path-wrapper">
                                                        <input type="text" class="file-path validate" placeholder="Bio" name="bio" value="{{ $dataGuru->bio }}" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                  </form>
                                </div>
                                <!-- E-mail -->
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
    <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Tambah Channel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
               <form class="md-form" method="POST" action="/vendor/channel/add" enctype="multipart/form-data">
                  @csrf
                   <div class="modal-body">            
                           <div class="file-field">
                               <div class="file-path-wrapper">
                                   <input class="file-path validate" name="namachannel" type="text" placeholder="Nama Channel" required="">
                               </div>
                           </div>
                           <br>
                           <div class="file-field">
                               <div class="file-path-wrapper">
                                   <textarea class="file-path validate form-control" name="ketchannel" placeholder="Keterangan" required=""></textarea>
                               </div>
                           </div>
                           <br>
                           <div class="file-field">
                              <div class="btn purple-gradient btn-sm float-left">
                                 <span><i class="fa fa-cloud-upload mr-2" aria-hidden="true"></i>Pilih Poster Channel</span>
                                 <input type="file" name="posterchannel" required="">
                              </div>
                           </div>
                           <br>
                   </div>
                   <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-rounded purple-gradient my-4 btn-block" type="submit">Buat Channel</button>
                   </div>
               </form>
            </div>
        </div>
    </div>
</main>
@endsection