<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{url('/home')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>IDN JONGGOL</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{url('dashmin/img/idn.png')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                <span>{{ Auth::user()->email }}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{url('/home')}}" class="nav-item nav-link {{request()->routeIs('home') ? 'active' : '' }}"><i class="fa-solid fa-house-user"></i>Dashboard</a>
            <a href="{{route('userSistem')}}" class="nav-item nav-link {{request()->routeIs('userSistem') ? 'active' : ''}}"><i class="fa-solid fa-user"></i>User Sistem</a>
            <a href="{{route('dataNik')}}" class="nav-item nav-link {{request()->routeIs('dataNik') ? 'active' : ''}}"><i class="fa-solid fa-id-card-clip"></i>Data NIK</a>
            <a href="{{route('inputDataNik')}}" class="nav-item nav-link {{request()->routeIs('inputDataNik') ? 'active' : ''}}"><i class="fa-solid fa-database"></i>Input Data NIK</a>
            <a href="{{route('logout')}}" class="nav-item nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa-solid fa-arrow-right-from-bracket"></i>Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="signup.html" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div> -->
        </div>
    </nav>
</div>