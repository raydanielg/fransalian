<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Scripts -->
    @if (Route::is('login') || Route::is('register') || Route::is('password.*'))
        <!-- Custom Auth CSS -->
        <link href="{{ asset('css/auth-style.css') }}" rel="stylesheet">
    @else
        <!-- Custom Home CSS -->
        <link href="{{ asset('css/home-style.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    <div id="app">
        @if (!Route::is('login') && !Route::is('register') && !Route::is('password.*'))
        <!-- Top Bar -->
        <div class="top-bar d-none d-md-block">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="#"><i class="fas fa-newspaper me-1"></i> NEWS & UPDATES</a>
                        <a href="#"><i class="fas fa-comment-alt me-1"></i> FEEDBACK</a>
                        <a href="#"><i class="fas fa-headset me-1"></i> HELP DESK</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control bg-dark text-white border-secondary shadow-none" placeholder="Search..." style="font-size: 0.75rem;">
                            <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Branding Header -->
        <div class="main-header py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-2 d-flex justify-content-center justify-content-md-start">
                        <img src="{{ asset('cropped-cropped-school_emblem-1-removebg-preview.png') }}" alt="Fransalian School" class="school-logo-main">
                    </div>
                    <div class="col-md-8 text-center">
                        <div class="branding-text">
                            <h2 class="mb-1" style="font-size: 1.1rem; color: #64748b; font-weight: 600;">THE UNITED REPUBLIC OF TANZANIA</h2>
                            <p class="mb-2" style="color: #dc2626; font-weight: 700; font-size: 0.95rem; text-transform: uppercase;">Missionary Society of St. Francis de Sales</p>
                            <h1 class="display-5 fw-bold mb-0" style="color: var(--dark-blue); letter-spacing: -1px;">Fransalian School Bombambili</h1>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Coat_of_arms_of_Tanzania.svg/1200px-Coat_of_arms_of_Tanzania.svg.png" alt="Tanzania Emblem" style="height: 90px;">
                    </div>
                </div>
            </div>
        </div>

        <!-- Professional Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark nav-bar sticky-top shadow-sm">
            <div class="container">
                <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? 'active bg-dark-blue' : '' }}" href="{{ url('/') }}">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">ADMISSION</a>
                            <ul class="dropdown-menu shadow border-0">
                                <li><a class="dropdown-item" href="#">GUIDELINES</a></li>
                                <li><a class="dropdown-item" href="#">FEES STRUCTURE</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">MATERIALS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">RESULTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">NEWS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                    </ul>
                    <div class="auth-btns py-2 py-lg-0">
                        @guest
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-light btn-sm fw-bold me-2 px-3 border-secondary-subtle"><i class="fas fa-user-plus me-1"></i> REGISTER</a>
                            @endif
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="btn btn-danger btn-sm fw-bold px-3 shadow-sm border-0"><i class="fas fa-sign-in-alt me-1"></i> LOGIN</a>
                            @endif
                        @else
                            <div class="dropdown">
                                <a class="btn btn-outline-light btn-sm fw-bold dropdown-toggle px-3" href="#" role="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-user-circle me-1"></i> {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-power-off me-2"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        @endif

        <main class="{{ Route::is('login') || Route::is('register') || Route::is('password.*') ? '' : 'py-4' }}">
            @yield('content')
        </main>
    </div>
</body>
</html>
