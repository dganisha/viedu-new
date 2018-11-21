<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- Breadcrumb-->
            <style type="text/css">
                .img-header {
                    padding-left: 5px;
                    padding-right: 5px;
                }
                .btn-search:hover i{
                    transform: scale(1.3);
                }
            </style>
            <div class="img-header">
                <a href="/"><img srcset="{{ asset('/icon.png') }}" class="img-responsive" style="height: 50px; width: 90px;"></a> 
            </div>
            
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <form class="form-inline active-cyan-4" method="GET" action="/search">
                  <input class="form-control form-control-sm mr-3 w-75" type="text" name="query" placeholder="Cari tutorial..." aria-label="Search">
                  <button class="btn-search" type="submit" style="border:none;background:none;cursor:pointer;"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
                @if(!Auth::user())
                <li class="nav-item">
                    <a href="/login" class="nav-link" data-toggle="modal" data-target="#modalLRForm"><i class="fa fa-sign-in"></i> <span class="clearfix d-none d-sm-inline-block">Login</span></a>
                </li>
                @else
                @if(Auth::user()->role == 'administrator')
                <li class="nav-item">
                    <a href="/admin" class="nav-link"><i class="fa fa-gears"></i> <span class="clearfix d-none d-sm-inline-block">Administrator Page</span></a>

                </li>
                @endif
                <li class="nav-item">
                    @if(Auth::user()->role == 'teacher' || Auth::user()->role == 'administrator')
                    <a href="/vendor/profile" class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Teacher Account Settings</span></a>
                    @endif
                </li>
                <li class="nav-item">
                    <a href="/member/profile" class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Member Account Settings</span></a>
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