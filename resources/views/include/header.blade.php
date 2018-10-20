    <div class="header">
        <div class="col-sm-8 header-left">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('educourse/images/logo.png') }}" alt="" /></a>
            </div>
            <div class="menu">
                <a class="toggleMenu" href="#"><img src="{{ asset('educourse/images/nav.png') }}" alt="" /></a>
                <ul class="nav" id="nav">
                        <li class="active"><a href="index.html">Reality</a></li>
                        <li><a href="#">Profile</a></li>
                    @if(Auth::user()->role == 'administrator')
                        <li><a href="#">Admin Menu</a></li>
                    @elseif(Auth::user()->role == 'teacher')
                        <li><a href="#">My Videos</a></li>
                    @endif
                    <li><a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                         Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                        </form>
                    </li>
                    <div class="clearfix"></div>
                </ul>
                <script type="text/javascript" src="{{ asset('educourse/js/responsive-nav.js') }}"></script>
            </div>
            <div class="clearfix"></div>
        </div>
        @if(!isset(Auth::user()->name))
        <div class="col-sm-4 header_right">
            <div id="loginContainer">
                <a href="#"><img src="{{ asset('educourse/images/login.png') }}"><span>Login</span></a>
                <a href="#"><i class="user"></i><span>Register</span></a>
            </div>
            <div class="clearfix"></div>
        </div>
        @endif
        <div class="clearfix"></div>
    </div>