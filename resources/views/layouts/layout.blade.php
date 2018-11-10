<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('educourse/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{ asset('educourse/css/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="{{ asset('educourse/js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('educourse/js/login.js') }}"></script>
    <script src="{{ asset('educourse/js/jquery.easydropdown.js') }}"></script>
    <!--Animation-->
    <script src="{{ asset('educourse/js/wow.min.js') }}"></script>
    <link href="{{ asset('educourse/css/animate.css') }}" rel='stylesheet' type='text/css' />
    <script>
        new WOW().init();
    </script>
</head>

<body>
    <!-- HEADER -->
    @include('include.header')

    @if(Request::segment(1) == 'home')
    <div class="banner">
        <div class="container_wrap">
            <h1>Hi {{ Auth::user()->name }}! What are you looking for?</h1>
            <form>
                <input type="text" value="Keyword, name, date, ..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword, name, date, ...';}">
                <div class="contact_btn">
                    <label class="btn1 btn-2 btn-2g">
                        <input name="submit" type="submit" id="submit" value="Search">
                    </label>
                </div>
            </form>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="content_top">
      <div class="container">
        <div class="col-md-4 bottom_nav">
           <div class="content_menu">
                <ul>
                    <li class="active"><a href="#">Recommended</a></li> 
                    <li><a href="#">Latest</a></li> 
                    <li><a href="#">Highlights</a></li> 
                </ul>
            </div>
        </div>
        <div class="col-md-4 filter_grid">
            <ul class="filter">
                <li><a href=""> <i class="icon1"> </i> </a></li>
                <li><a href=""> <i class="icon2"> </i> </a></li>
                <li><a href=""> <i class="icon3"> </i> </a></li>
                <li><a href=""> <i class="icon4"> </i> </a></li>
                <li><a href=""> <i class="icon5"> </i> </a></li>
            </ul>
        </div>
      </div>
    </div>
    @endif

    @if(Request::segment(1) == 'home')
    <div class="content_middle">
        <div class="container">
            <div class="content_middle_box">
                <div class="top_grid">
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
                          <div class="index_img1"><img src="{{ asset('educourse/images/pic6.jpg') }}" class="img-responsive" alt=""/></div>
                             <div class="sale"><strike><small>$2.980</small></strike> $0</div>
                             <div class="mask">
                                <div class="info"><i class="fa fa-link"></i> Show More..</div>
                              </div>
                          </div> 
                         <div class="inner_wrap">
                            <h3>2 bedroom house for rent in Dubai</h3>
                            <ul class="star1">
                              <h4 class="yellow">Vision Agency</h4>
                              <li><a href="#"> <img src="{{ asset('educourse/images/star1.png') }}" alt="">(136)</a></li>
                            </ul>
                         </div>
                       </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @endif
    <!-- Main Content -->
    @yield('content')

    @include('include.footer')
</body>

</html>