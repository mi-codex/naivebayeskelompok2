<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>REGISTER AKUN</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('template') }}//assets/img/brand/books.png" type="image/png">
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
            <!-- Table -->
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="card bg-secondary border-0">

                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center  mb-4">
                                <p class="font-weight-bold" style="color: #5E72E4;">REGISTRASI AKUN ANDA</p>
                            </div>

                            <!-- Forms Register -->
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                                        </div>
                                        <input class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Nama" type="text" name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <span class=" invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" type="email" name="email" value="{{ old('email') }}">
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
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" type="password" name="password"
                                            value="{{ old('password') }}">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Ketik Ulang Password" type="password"
                                            name="password_confirmation">
                                    </div>
                                </div>

                                {{-- <div class="text-muted font-italic"><small>password strength: <span
                                            class="text-success font-weight-700">strong</span></small></div> --}}

                                {{-- <div class="row my-4">
                                    <div class="col-12">
                                        <div class="custom-control custom-control-alternative custom-checkbox">
                                            <input class="custom-control-input" id="customCheckRegister"
                                                type="checkbox">
                                            <label class="custom-control-label" for="customCheckRegister">
                                                <span class="text-muted">I agree with the <a href="#!">Privacy
                                                        Policy</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>
                            </form>
                            <div class="row mt-4">
                                <div class="col d-flex justify-content-end ">
                                    <a href="/login" class="text-primary">
                                        <small><u>Kembali Ke Login</u></small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






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
