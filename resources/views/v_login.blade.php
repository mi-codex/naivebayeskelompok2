<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>LOGIN APLIKASI NAIVE BAYES</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template') }}/assets/img/brand/books.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body style="background-image: linear-gradient(to right, #2980b9 , #6dd5fa);">

    <!-- Main content -->
    <div class="main-content">

        <!-- Page content -->
        <div class="container mt-5 pb-3">
            <div class="row justify-content-center">
                <!-- card  -->
                <div class="col-lg-8 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">

                        <div class="card-body no-padding">
                            <div class="row ">
                                <div class="col-md-5">
                                    <!-- Image Login -->
                                    <div class="imageCard">
                                        <img src="{{ asset('img') }}/grad2.jpg" alt="lulusan"
                                            class="img-fluid rounded">
                                    </div>
                                </div>

                                <div class="col-md-6 mt-5 mr-2 ml-4">
                                    <div class="text-center mb-4">
                                        <p class="font-weight-bold" style="color: #5E72E4;">LOGIN NAIVE BAYES BEASISWA
                                        </p>
                                    </div>

                                    <!-- Forms Login -->
                                    <form method="POST" action="{{ route('login') }}" class="mt-5">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                                </div>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Email" name="email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-merge input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i
                                                            class="ni ni-lock-circle-open"></i></span>
                                                </div>
                                                <input id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password"" placeholder=" Password" type="password"
                                                    value="{{ old('password') }}">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                                        </div>

                                        <div class="row mt-4">
                                            {{-- <div class="col-6">
                                                <a href="#" class="text-primary"><small>Lupa Password?</small></a>
                                            </div> --}}
                                            <div class="col text-right">
                                                <a href="/register" class="text-primary"><small><u>Buat Akun
                                                            Baru</u></small></a>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- end forms  -->

                                </div>

                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-2" id="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <div class="copyright text-center text-xl-left text-white">
                        &copy; 2021 Kelompok 2
                    </div>
                </div>

            </div>
        </div>
    </footer>



    <!-- Core -->
    <script src="{{ asset('template') }}/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
