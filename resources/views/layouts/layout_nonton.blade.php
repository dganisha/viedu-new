
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Viedu - Belajar apapun sekarang mudah !</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/viedu/public/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('/viedu/public/css/mdb.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/public/css/style.css') }}">

</head>

<body class="fixed-sn white-skin">
    <!--Double navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
                <!-- Logo -->
                <li>
                    <div class="logo-wrapper waves-light">
                        <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" class="img-fluid flex-center"></a>
                    </div>
                </li>
                <!--/. Logo -->
                <!--Social-->
                <li>
                    <ul class="social">
                        <li><a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
                        <li><a href="#" class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
                        <li><a href="#" class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
                        <li><a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
                    </ul>
                </li>
                <!--/Social-->
                <!--Search Form-->
                <li>
                    <form class="search-form" role="search">
                        <div class="form-group md-form mt-0 pt-1 waves-light">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </li>
                <!--/.Search Form-->
                <!-- Side navigation links -->
                <li>
                    <ul class="collapsible collapsible-accordion">
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Submit blog<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Submit listing</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Registration form</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">For bloggers</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">For authors</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">Introduction</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Monthly meetings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
                            <div class="collapsible-body">
                                <ul class="list-unstyled">
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">FAQ</a>
                                    </li>
                                    <li><a href="#" class="waves-effect">Write a message</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->
        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <p>Learn</p>
            </div>
            <form class="form-inline active-cyan-4">
              <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Cari tutorial..." aria-label="Search">
              <i class="fa fa-search" aria-hidden="true"></i>
            </form>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                @if(!Auth::user())
                <li class="nav-item">
                    <a href="/login" class="nav-link"><i class="fa fa-sign-in"></i> <span class="clearfix d-none d-sm-inline-block">Login</span></a>
                </li>

                <li class="nav-item">
                    <a href="/register" class="nav-link"><i class="fa fa-user-plus"></i> <span class="clearfix d-none d-sm-inline-block">Register</span></a>
                </li>
                @else
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i> <span class="clearfix d-none d-sm-inline-block">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    @yield('content')
    <!--/Main layout-->

    <!--Footer-->
    @include('include.nonton_footer')
    <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{ asset('/viedu/public/js/jquery-3.3.1.min.js') }}"></script>

    <!-- Tooltips -->
    <script type="text/javascript" src="{{ asset('/viedu/public/js/popper.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('/viedu/public/js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('/viedu/public/js/coba.js') }}"></script>
    <script>

         // SideNav Initialization
        $(".button-collapse").sideNav();
        
        new WOW().init();
    
    </script>

</body>

</html>
