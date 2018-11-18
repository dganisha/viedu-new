<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
            <!-- Breadcrumb-->
            <style type="text/css">
                .img-header {
                    padding-left: 5px;
                    padding-right: 5px;
                }
            </style>
            <div class="img-header">
                <a href="/"><img srcset="{{ asset('/icon.png') }}" class="img-responsive" style="height: 50px; width: 90px;"></a>
                 
            </div>
            <form class="form-inline active-cyan-4" method="GET" action="/search">
              <input class="form-control form-control-sm mr-3 w-75" type="text" name="query" placeholder="Cari tutorial..." aria-label="Search">
              {{-- <i class="fa fa-search" aria-hidden="true"></i> --}}
            </form>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
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
                    @if(Auth::user()->role == 'teacher')
                        @php $link = "/vendor/profile" @endphp
                    @else   
                        @php $link = "/member/profile" @endphp
                    @endif
                    <a href="{{ $link }}" class="nav-link"><i class="fa fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Account</span></a>
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