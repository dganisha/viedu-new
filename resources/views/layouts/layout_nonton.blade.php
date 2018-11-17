
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
    <style type="text/css">
    body.modal-open-noscroll {
      margin-right: 0!important;
      overflow: hidden;
    }
    .modal-open-noscroll .navbar-fixed-top, .modal-open .navbar-fixed-bottom {
      margin-right: 0!important;
    }
    body{
        padding: 0!important;
    }
    </style>
    <!-- Material Design Bootstrap -->
    <link href="{{ asset('/viedu/public/css/mdb.min.css') }}" rel="stylesheet">
    @if (Request::segment(2) === 'nonton')
    <link rel="stylesheet" href="{{ asset('/viedu/public/css/style.css') }}">
    @endif
    @yield('style')

</head>

<body class="fixed-sn white-skin">
    <!--Double navigation-->
    <header>
        @isset(Auth::user()->name)
            @if(Auth::user()->role == 'teacher')
            @include('include.sidebar')
            @endif
        @endisset
        <!-- Navbar -->
        @include('include.headerbar')
        <!-- /.Navbar -->
    </header>
    <!--/.Double navigation-->
    
    <!--Main layout-->
    @if(!Auth::user())
    @include('include.modal_loginregister')
    @endif
    @yield('content')
    <!--/Main layout-->

    <!--Footer-->
    <br>
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
    <script type="text/javascript">
    $(document).ready(function(){
        $('.modal').on('show.bs.modal', function () {
          if ($(document).height() > $(window).height()) {
            // no-scroll
            $('body').addClass("modal-open-noscroll");
          }
          else { 
            $('body').removeClass("modal-open-noscroll");
          }
        })
        $('.modal').on('hide.bs.modal', function () {
            $('body').removeClass("modal-open-noscroll");
        })
      })
    </script>
</body>

</html>
