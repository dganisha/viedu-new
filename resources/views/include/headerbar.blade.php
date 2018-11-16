<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            @isset(Auth::user()->name)
                @if(auth()->user()->role == 'teacher')
                <!-- SideNav slide-out button -->
                <div class="float-left">
                    <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
                </div>
                @endif
            @endisset
            <!-- Breadcrumb-->
            <div class="breadcrumb-dn mr-auto">
                <a href="/"><img srcset="{{ asset('/icon.jpeg') }}" class="img-responsive" style="height: 50px; width: 70px;"></a>
            </div>
            <form class="form-inline active-cyan-4" method="GET" action="/search">
              <input class="form-control form-control-sm mr-3 w-75" type="text" name="query" placeholder="Cari tutorial..." aria-label="Search">
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
                    <a href="/member/profile" class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
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