<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" style="background-color: #7460ee">
    @auth
    <nav class="navbar top-navbar navbar-expand-md " >
        <div class="navbar-header" >
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{ route('home')}}">
                <!-- Logo icon -->
                <b class="logo-icon ps-2">
                    <img src="{{ asset('theme/assets/images/' . config('app.logo_image')) }}" alt="homepage" class="light-logo" width="60" heigt="60" />
                </b>
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->

            <a class="nav-toggler d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>  <!-- Toggle which is visible on mobile only -->
        </div>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" >
            <!-- ============================================================== -->
            <!-- toggle and nav items data-navbarbg="skin5"-->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-start me-auto">
                <li class="nav-item d-none d-lg-block">
                <a class="nav-link sidebartoggler " href="javascript:void(0)"
                    data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
                </li>



            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-end">

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                <span class="text-light fs-4 fw-bold">{{ Auth::user()->fullname }} </span>
                <a class="nav-link    dropdown-toggle text-muted

                            pro-pic
                        " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                    <div class="mt-3 media position-relative">

                        <h4>
                        @if ( empty(Auth::user()->image) )
                            <i class=" fas fa-user fa-2x text-warning"></i>
                        @else
                            <img src="{{ Auth::user()->image }}" class="rounded-circle " width="40px" height="40px">
                        @endif
                            <span class=" badge badge-success"></span>
                        </h4>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-address-card me-1 ms1"></i> Mi Perfil</a>
                    {{-- @livewire('change-theme-option') --}}

                    <hr class="text-dark" height="1.5px"/>

                    <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt me-1 ms-1"></i>
                        <span>Cerrar Sesión</span>
                        <form action="{{ route('logout')}}" method="POST" id="logout-form">
                            @csrf
                        </form>
                    </a>


                </ul>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>

    </nav>
    @endauth
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
