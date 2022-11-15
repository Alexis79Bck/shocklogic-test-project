<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" style="background-color: #7460ee">
    @auth
    <nav class="navbar top-navbar navbar-expand-md " >
        <div class="navbar-header" >

            <a class="navbar-brand" href="{{ url('/')}}">
                <!-- Logo icon -->
                <div >
                    <img src="{{ asset('theme/assets/images/' . config('app.logo_text')) }}" alt="logo"  width="96" heigt="72" />
                </div>
                <!--End Logo icon -->
            </a>


            <a class="nav-toggler d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>  <!-- Toggle which is visible on mobile only -->
        </div>

        <div class="navbar-collapse collapse"  >

            <ul class="navbar-nav  mx-auto">
                    <span class="display-5 text-center text-light">{{auth()->user()->firstname}} {{auth()->user()->familyname}}</span>
            </ul>



            <ul class="navbar-nav float-end">

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="mt-3 ">
                            <span>
                                <i class=" fas fa-user fa-2x text-light"></i>
                            </span>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
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

