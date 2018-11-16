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
                        <!-- Card -->
                        <div class="card testimonial-card">
                           <!-- Background color -->
                           <div class="card-up blue-gradient lighten-1"></div>
                           <!-- Avatar -->
                           <div class="avatar mx-auto white">
                              <img src="{{ auth()->user()->url_foto }}" class="rounded-circle" alt="woman avatar">
                           </div>
                           <!-- Content -->
                           <div class="card-body">
                              <!-- Name -->
                              <h4 class="card-title">{{ auth()->user()->name }}</h4>
                              <hr>
                              <p><i class="fa fa-quote-left"></i> <i>{{ auth()->user()->bio }}</i> <i class="fa fa-quote-right"></i> </p>
                              <hr>
                           </div>
                           <ul class="nav nav-tabs nav-justified md-tabs blue-gradient" id="myTabJust" role="tablist">
                              <li class="nav-item">
                                 <a class="nav-link active" id="langganan-tab-just" data-toggle="tab" href="#langganan-just" role="tab" aria-controls="langganan-just" aria-selected="true">Langganan</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link " id="home-tab-just" data-toggle="tab" href="#home-just" role="tab" aria-controls="home-just" aria-selected="true">Favorit</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="profile-tab-just" data-toggle="tab" href="#profile-just" role="tab" aria-controls="profile-just" aria-selected="false">Profil</a>
                              </li>
                           </ul>
                           <div class="tab-content card pt-5" id="myTabContentJust">
                              <div class="tab-pane fade show active" id="langganan-just" role="tabpanel" aria-labelledby="langganan-tab-just">
                                 @if($countLangganan == 0)
                                 <div class="alert alert-info" role="alert">
                                    Anda belum berlangganan pada pengajar manapun. ayo cari pengajar sekarang juga!!!. <a href="homemember.html" class="alert-link">Home</a>.Ayo pilih yang anda butuhkan!
                                 </div>
                                 @endif
                              </div>
                              <div class="tab-pane fade show " id="home-just" role="tabpanel" aria-labelledby="home-tab-just">
                              	@if($countFavorit == 0)
                                 <div class="alert alert-info" role="alert">
                                    Anda belum pernah menyimpan channel favorit anda. ayo cari ilmu kesukaan anda!!!. <a href="homemember.html" class="alert-link">Home</a>.Ayo Cari Ilmu Favorit anda!
                                 </div>
                                @endif
                              </div>
                              <div class="tab-pane fade" id="profile-just" role="tabpanel" aria-labelledby="profile-tab-just">
                                 <p>
                                 <p><a href="channel.html" class="btn-floating btn-lg peach-gradient"><i class="fa fa-pencil"></i></a></p>
                                 <div class="form-group">
                                    <div class="md-form">
                                       <div class="file-field">
                                          <div class="file-path-wrapper">
                                             <input disabled type="text" class="file-path validate" placeholder="Nama Lengkap" value="{{ auth()->user()->name }}">
                                          </div>
                                       </div>
                                       <br>
                                       <div class="file-field">
                                          <div class="file-path-wrapper">
                                             <input disabled type="email" class="file-path validate" placeholder="E-mail" value="{{ auth()->user()->email }}">
                                          </div>
                                       </div>
                                       <br>
                                       <div class="file-field">
                                          <div class="file-path-wrapper">
                                             <input disabled type="text" id="defaultRegisterPhonePassword" class="file-path validate" placeholder="Bio" aria-describedby="defaultRegisterFormPhoneHelpBlock" value="{{ auth()->user()->bio }}">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
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
      </main>
@endsection