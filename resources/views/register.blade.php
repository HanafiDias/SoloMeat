<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SoloMeat | Register</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

    <link rel="shortcut icon" href="{{ asset('image/beef.png') }}">
</head>

<body>
    <!-- Section: Design Block -->
    <section>
        <div id="intro" class="bg-image vh-100 shadow-1-strong">
            <video style="min-width: 100%; min-height: 100%;" playsinline autoplay muted loop>
                <source class="h-100" src="{{ asset('video/login.mp4') }}" type="video/mp4" />
            </video>
            <div class="mask"
                style="
        background: linear-gradient(
          45deg,
          rgba(135, 175, 230, 0),
          rgba(6, 29, 128, 0) 100%
        );
      ">
                <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
                    <div class="row gx-lg-5 align-items-center mb-5">
                        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                            <p class="my-2 display-3 fw-bold ls-tight" style="color: #FFFFFF">
                                SoloMeat</p>
                            <h2><span style="color:#FFFFFF">Didalam Makanan Yang Istimewa Terdapat Bahan Baku Yang
                                    Jawara</span>
                            </h2>
                            <p class="mb-4 fw-bold" style="color: #FFFFFF;">
                                Temukan Daging Terbaik Anda Disini, SoloMeat Teman Berburu Daging Terbaik.
                            </p>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                            <div class="card bg-glass">
                                <div class="card-body px-5 py-5 px-md-5">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <form action="/sesi/create" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1"
                                                        value="{{ Session::get('fullname') }}" name="fullname"
                                                        class="form-control" />
                                                    <label class="form-label" for="form3Example1">Full Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example2"
                                                        value="{{ Session::get('username') }}" name="username"
                                                        class="form-control" />
                                                    <label class="form-label" for="form3Example2">Username</label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3" value="{{ Session::get('email') }}"
                                                name="email" class="form-control" />
                                            <label class="form-label" for="form3Example3">Email Address</label>
                                        </div>

                                        <!-- NO Wa input -->
                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example4" value="{{ Session::get('no_wa') }}"
                                                name="no_wa" class="form-control" />
                                            <label class="form-label" for="form3Example3">Number What'sApp</label>
                                        </div>

                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example5" value="{{ old('password') }}"
                                                name="password" class="form-control" />
                                            <label class="form-label" for="form3Example4">Password</label>
                                        </div>

                                        <!-- Confirm Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example6" class="form-control"
                                                name="password_confirmation" />
                                            <label class="form-label" for="form3Example4">Confirmation Password</label>
                                        </div>

                                        <!-- Submit button -->
                                        <button name="submit" type="submit" class="btn btn-primary btn-block mb-2">
                                            Register
                                        </button>

                                        <!-- Register buttons -->
                                        <div class="text-center">
                                            <p class="fw-bold text-muted">Already have account? </p>
                                            <a href="login"
                                                class="btn btn-outline-primary btn-block mb-1 ripple-surface-dark">
                                                Login </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Section: Design Block -->


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
