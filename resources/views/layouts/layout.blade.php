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
    <div class="header">
        <div class="col-sm-8 header-left">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('educourse/images/logo.png') }}" alt="" /></a>
            </div>
            <div class="menu">
                <a class="toggleMenu" href="#"><img src="{{ asset('educourse/images/nav.png') }}" alt="" /></a>
                <ul class="nav" id="nav">
                    <li class="active"><a href="index.html">Reality</a></li>
                    <li><a href="living.html">Living</a></li>
                    <li><a href="education.html">Education</a></li>
                    <li><a href="entertain.html">Entertainment</a></li>
                    <li><a href="404.html">Mobility</a></li>
                    <div class="clearfix"></div>
                </ul>
                <script type="text/javascript" src="{{ asset('educourse/js/responsive-nav.js') }}"></script>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-sm-4 header_right">
            <div id="loginContainer">
                <a href="#"><img src="{{ asset('educourse/images/login.png') }}"><span>Login</span></a>
                <a href="#"><i class="user"></i><span>Register</span></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="banner">
        <div class="container_wrap">
            <h1>What are you looking for?</h1>
            <div class="dropdown-buttons">
                <div class="dropdown-button">
                    <select>
                        <option selected="" tabindex="9" style="display:none;color:#eee;">Dubai</option>
                        <option>Australia</option>
                        <option>Sri Lanka</option>
                        <option>Newzeland</option>
                        <option>Pakistan</option>
                        <option>United Kingdom</option>
                        <option>United states</option>
                        <option>Russia</option>
                        <option>Mirum</option>
                    </select>
                </div>
                <div class="dropdown-button">
                    <select>
                        <option selected="" tabindex="9" style="display:none;color:#eee;">Education</option>
                        <option>tempor</option>
                        <option>congue</option>
                        <option>mazim</option>
                        <option>mutationem</option>
                        <option>hendrerit</option>
                        <option>mutationem</option>
                        <option>hendrerit</option>
                    </select>
                </div>
            </div>
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

    <!-- Main Content -->
    @yield('content')

    <div class="footer">
        <div class="container">
            <div class="footer_grids">
                <div class="footer-grid">
                    <h4>Ipsum Quis</h4>
                    <ul class="list1">
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="#">Mirum est</a></li>
                        <li><a href="#">placerat facer</a></li>
                        <li><a href="#">claritatem</a></li>
                        <li><a href="#">sollemnes </a></li>
                    </ul>
                </div>
                <div class="footer-grid">
                    <h4>Quis Ipsum</h4>
                    <ul class="list1">
                        <li><a href="#">placerat facer</a></li>
                        <li><a href="#">claritatem</a></li>
                        <li><a href="#">sollemnes </a></li>
                        <li><a href="#">Claritas</a></li>
                        <li><a href="#">Mirum est</a></li>
                    </ul>
                </div>
                <div class="footer-grid last_grid">
                    <h4>Follow Us</h4>
                    <ul class="footer_social wow fadeInLeft" data-wow-delay="0.4s">
                        <li>
                            <a href=""> <i class="fb"> </i> </a>
                        </li>
                        <li><a href=""><i class="tw"> </i> </a></li>
                        <li><a href=""><i class="google"> </i> </a></li>
                        <li><a href=""><i class="u_tube"> </i> </a></li>
                    </ul>
                    <div class="copy wow fadeInRight" data-wow-delay="0.4s">
                        <p>© 2014 Duhoot. Template by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</body>

</html>