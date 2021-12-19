<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('judul')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template') }}/assets/img/brand/books.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/argon.css?v=1.2.0" type="text/css">
    <!-- CSS TAMBAHAN -->
    @yield('css')
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
                <a class="navbar-brand" href="javascript:void(0)">
                    <h1 class="font-weight-bold">BEASISWA</h1>
                </a>
            </div>


            <!-- Menu Website -->
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('beranda') ? 'active' : '' }}" href="/beranda">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Beranda</span>
                            </a>
                        </li>
                        @if (auth()->user()->level==1)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('perhitungan') ? 'active' : '' }}"
                                href="/perhitungan">
                                <i class="ni ni-chart-pie-35 text-orange"></i>
                                <span class="nav-link-text">Perhitungan</span>
                            </a>
                        </li>
                        @elseif (auth()->user()->level==2)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('inputdatamhs') ? 'active' : '' }}"
                                href="/inputdatamhs">
                                <i class="ni ni-hat-3 text-primary"></i>
                                <span class="nav-link-text">Input Data Mahasiswa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('hasilbeasiswa') ? 'active' : '' }}"
                                href="/hasilbeasiswa">
                                <i class="ni ni-chart-bar-32 text-yellow"></i>
                                <span class="nav-link-text">Hasil Beasiswa</span>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('panduan') ? 'active' : '' }}"
                                href="/panduan">
                                <i class="ni ni-compass-04 text-orange"></i>
                                <span class="nav-link-text">Panduan</span>
                            </a>
                        </li>
                        
                    </ul>


                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Pencarian" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close"
                            data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>

                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown ">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder"
                                            src="{{ asset('template') }}/assets/img/theme/user.png">
                                    </span>
                                    <div class="media-body  ml-3  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Profile</h6>
                                </div>

                                <div class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>{{ Auth::user()->email }}</span>
                                </div>

                                <div class="dropdown-divider"></div>

                                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                                    @csrf
                                    <div class="logout d-flex justify-content-center">

                                        <button type="submit" class="btn btn-primary btn-sm ">Log Out</button>
                                    </div>
                                </form>
                                {{-- <a href="{{ route('logout') }}" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a> --}}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->

        @yield('konten')
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('template') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="{{ asset('template') }}/assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="{{ asset('template') }}/assets/js/argon.js?v=1.2.0"></script>

    @stack('scripts')
</body>

</html>
