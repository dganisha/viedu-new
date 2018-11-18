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

                                <img srcset="{{ asset('/icon.png') }}" width="30%">

                            </div>

                            <!-- Avatar -->
                            <div class="avatar mx-auto white">
                                <img srcset="{{ asset('/smkn13.JPG') }}"  width="30%">
                            </div>

                            <!-- Content -->
                            <div class="card-body">
                                <!-- Name -->
                                <h4 class="card-title">SMKN 13 Bandung</h4>
                                 <p> Km.10, Jl. Soekarno Hatta, Jatisari, Buahbatu, Kota Bandung, Jawa Barat 40286, Bandung 40286, Jawa Barat, Bendera Indonesia Indonesia </p>
                                <hr>

                                <p><i class="fa fa-quote-left"></i> SMKN 13 Bandung Bisa! Bisa! Bisa! Mantap<i class="fa fa-quote-right"></i> </p>
                                
                                
                               
                                	
                                <hr>
                                
                               <div class="card-text"> 
                                <p>"Sekolah Menengah Kejuruan Negeri 13 Bandung" adalah sekolah tingkat menengah yang mendidik siswanya untuk memiliki keahlian di bidang Analisis Kimia, Teknik Komputer Jaringan dan Rekayasa Perangkat Lunak. SMKN 13 Bandung bermula dari pendidikan analis kimia di bawah pengelolaan Departemen Kimia Institut Teknologi Bandung (Sekolah Analis Kimia ITB) mulai tahun 1938 yang dipelopori oleh Prof.C.O.SCHAEFFER Pada tahun 1988 pengelolaannya dialihkan ke Direktorat Pendidikan Menengah Kejuruan Kantor Wilayah Provinsi Jawa Barat berdasarkan Surat Keputusan Menteri Pendidikan dan Kebudayaan No. 0454/1988 tertanggal 16 September 1988 dengan nama SMT Kimia</p>
<p>
Berdasarkan surat Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor : 036/0/1997 tanggal 07 Maret 1997 tentang perubahan Nomenklatur SMKTA menjadi SMK serta Organisasi dan Tata Kerja Sekolah Menengah Kejuruan (SMK), SMT Kimia diubah namanya menjadi Sekolah Menengah Kejuruan Negeri 13 Bandung Program Keahlian Analisis Kimia.
</p>
                                   <p>
Dalam penyelenggaraan pendidikan, SMKN 13 bekerja sama dengan Dunia Usaha / Dunia Industri (DU / DI) yang relevan, dalam suatu wadah Komite Sekolah sebagai kelengkapan implementasi Manajemen Berbasis Sekolah (MBS) sehingga diharapkan menghasilkan lulusan yang memiliki keahlian sesuai tuntutan Dunia Usaha / Dunia Industri (DU / DI).</p>
                                   
                 <ul class="list-group">
  <li class="list-group-item active">Program Keahlian</li>
  <li class="list-group-item"><i class="fa fa-flask" aria-hidden="true"></i> Analis Kimia</li>
  <li class="list-group-item"><i class="fa fa-android" aria-hidden="true"></i> Rekayasa Perangkat Lunak</li>
  <li class="list-group-item"><i class="fa fa-gears" aria-hidden="true"></i> Teknik Komputer dan Jaringan</li>

</ul>
                                </div>

                                <!-- Section heading -->
                                <h2 class="h1-responsive font-weight-bold my-5">Wdev team</h2>
                                 <div class="card-text"> 
                                <p>"Puji syukur kami panjatkan kepada allah S.W.T, Website Viedu (Video Edukasi) telah di buat sebagai karya dari WDev Team dalam mengikuti Lomba Cipta Web Dinamik 13 yang di selenggarakan oleh  Keluarga Besar Ilmu Komputer, Universitas Pendidikan Indonesia. Website Viedu merupakan website yang bertujuan untuk memajukan masyarakat untuk menghadapi tantangan Revolusi Industri 4.0 dalam bidang pendidikan. dengan Website Viedu diharapkan masyarakat dapat mengakses ilmu yang bermanfaat dan berguna bagi masa yang akan datang dan masyarakat pun dapat berbagi ilmu yang bermanfaat untuk masyarakat lainnya."</p>

                                   
      
                                </div>

                                <section class="text-center">

                                    <!--Grid row-->
                                    <div class="row mb-4 wow fadeInUp">
                                        <div class="col-lg-4 col-md-6 mb-4 ">
                                            <!--Card-->
                                            <div class="card testimonial-card wow fadeInUp">
                                                <!-- Background color -->
                                                <div class="card-up purple-gradient lighten-1"></div>
                                                <div class="avatar mx-auto white">
                                                    <img srcset="{{ asset('/angga.jpg') }}" class="rounded-circle" alt="woman avatar">
                                                </div>

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <h5 class="card-tittle">Angga Kahaerul</h5>
                                                    <!--Title-->
                                                    <h4 class="card-title blue-text"><i class="fa fa-paint-brush" aria-hidden="true"></i> Front End Developer</h4>
                                                    <!--Text-->
                                                    <p class="card-text">"Never Stop Learning"
                                                    </p>
                                                    
                                                  
                                                          <ul class="list-group">
  <li class="list-group-item active">Biodata</li>
  <li class="list-group-item">Lahir : Sumedang,22-03-2001</li>
                                                              <li class="list-group-item">Alamat : Jl. Riung Bandung RT 07 RW 08, Gedebage, Bandung</li>
  <li class="list-group-item">Keahlian : Rekayasa Perangkat Lunak</li>
  <li class="list-group-item">Tingkat Kelas : XII</li>

</ul>
                                                    
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
                                                    <img srcset="{{ asset('/dhiemas.jpg') }}" class="rounded-circle" alt="woman avatar">
                                                </div>

                                                <!--Card content-->
                                                <div class="card-body">
                                                    <h5 class="card-tittle">Dhiemas Ganisha</h5>
                                                    <!--Title-->
                                                    <h4 class="card-title blue-text"><i class="fa fa-gear" aria-hidden="true"></i> Back End Developer</h4>
                                                    <!--Text-->
                                                    <p class="card-text">"Bisa Bisa Bisa Mantap"</p>
                                                    
                                                          <ul class="list-group">
  <li class="list-group-item active">Biodata</li>
  <li class="list-group-item">Lahir : Cilegon,23-10-2000</li>
                                                              <li class="list-group-item">Alamat : Manglayang Regency blok G4 No.2, Cileunyi</li>
  <li class="list-group-item">Keahlian : Rekayasa Perangkat Lunak</li>
  <li class="list-group-item">Tingkat Kelas : XII</li>

</ul>
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
                                                    <img srcset="{{ asset('/akbar.jpg') }}"  class="rounded-circle" alt="woman avatar">
                                                </div>

                                                <!--Card content-->
                                                <div class="card-body">

                                                    <h5 class="card-tittle">Moch Akbar Setiadi</h5>
                                                    <!--Title-->
                                                    <h4 class="card-title   blue-text"><i class="fa fa-bar-chart" aria-hidden="true"></i> Database System</h4>
                                                    <!--Text-->
                                                    <p class="card-text">Dimana ada aksi pasti ada reaksi</p>
                                                    
                                                          <ul class="list-group">
  <li class="list-group-item active">Biodata</li>
  <li class="list-group-item">Lahir :Bandung, 25-09-2000</li>
                                                              <li class="list-group-item">Alamat : Jl. Boeing Raya No 26. RT.02 RW.08, Cijerah, Cimahi</li>
  <li class="list-group-item">Keahlian : Rekayasa Perangkat Lunak</li>
  <li class="list-group-item">Tingkat Kelas : XII</li>

</ul>

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