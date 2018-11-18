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
                        <div class="card testimony-card">

                            <!-- Background color -->
                            <div class="card-up rgba-blue-slight ">

                                <img src="public/img/tp.png" width="30%">

                            </div>

                            <!-- Avatar -->
                            <div class="avatar mx-auto white">
                                <img src="public/img/smkn13.JPG" width="30%">
                            </div>

                            <!-- Content -->
                            <div class="card-body">
                                <!-- Name -->
                                <h4 class="card-title">SMKN 13 Bandung</h4>
                                <hr>

                                <p><i class="fa fa-quote-left"></i> SMKN 13 Bandung Bisa! Bisa! Bisa! Mantap<i class="fa fa-quote-right"></i> </p>
                                <hr>

                                <!-- Section heading -->
                                <h2 class="h1-responsive font-weight-bold my-5">Wdev team</h2>
                                <!-- Section description -->

                                <section class="text-center">

                                    <!--Grid row-->
                                    <div class="row mb-4 wow fadeInUp">
                                        <div class="col-lg-4 col-md-6 mb-4 ">
                                            <!--Card-->
                                            <div class="card testimonial-card wow fadeInUp">
                                                <!-- Background color -->
                                                <div class="card-up purple-gradient lighten-1"></div>
                                                <div class="avatar mx-auto white">
                                                    <img src="public/img/angka.jpg" class="rounded-circle" alt="woman avatar">
                                                </div>

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <h5 class="card-tittle">Angga Kahaerul</h5>
                                                    <!--Title-->
                                                    <h4 class="card-title">Front End Web</h4>
                                                    <!--Text-->
                                                    <p class="card-text">"Never Stop Learning"
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/.Card-->

                                        <div class="col-lg-4 col-md-6 mb-4 ">
                                            <!--Card-->
                                            <div class="card testimonial-card wow fadeInUp">
                                                <!-- Background color -->
                                                <div class="card-up peach-gradient lighten-1"></div>
                                                <div class="avatar mx-auto white">
                                                    <img src="public/img/dhiemas.jpg" class="rounded-circle" alt="woman avatar">
                                                </div>

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <h5 class="card-tittle">Dhiemas Ganisha</h5>
                                                    <!--Title-->
                                                    <h4 class="card-title">Back End Developer</h4>
                                                    <!--Text-->
                                                    <p class="card-text">"Bisa Bisa Bisa Mantap"</p>
                                                </div>

                                            </div>
                                        </div>
                                        <!--/.Card-->

                                        <div class="col-lg-4 col-md-6 mb-4 ">
                                            <!--Card-->
                                            <div class="card testimonial-card wow fadeInUp">
                                                <!-- Background color -->
                                                <div class="card-up blue-gradient lighten-1"></div>

                                                <div class="avatar mx-auto white">
                                                    <img src="public/img/foto.jpg" class="rounded-circle" alt="woman avatar">
                                                </div>

                                                <!--Card content-->
                                                <div class="card-bodyt">

                                                    <h5 class="card-tittle">Moch Akbar Setiadi</h5>
                                                    <!--Title-->
                                                    <h4 class="card-title">Database</h4>
                                                    <!--Text-->
                                                    <p class="card-text">Mantap </p>

                                                </div>

                                            </div>
                                            <!--/.Card-->
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
</main>
@endsection