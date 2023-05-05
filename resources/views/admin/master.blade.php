@auth
    @include('admin.header')

    @include('admin.navbar')

    @include('admin.sidebar')

    @include('admin.content')

    @include('admin.footer')
@endauth
@guest
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />

        <title>SoloMeat | Login</title>
        <!-- MDB icon -->
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('image/beef.png') }}">

        <style>
            .jeneng {
                color: #ffffff;
            }

            .button-86 {
                all: unset;
                width: 100px;
                height: 30px;
                font-size: 16px;
                background: transparent;
                border: none;
                position: relative;
                color: #f0f0f0;
                cursor: pointer;
                z-index: 1;
                padding: 10px 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                white-space: nowrap;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
            }

            .button-86::after,
            .button-86::before {
                content: '';
                position: absolute;
                bottom: 0;
                right: 0;
                z-index: -99999;
                transition: all .6s;
            }

            .button-86::before {
                transform: translate(0%, 0%);
                width: 100%;
                height: 100%;
                background: #28282d;
                border-radius: 10px;
            }

            .button-86::after {
                transform: translate(10px, 10px);
                width: 35px;
                height: 35px;
                background: #ffffff15;
                backdrop-filter: blur(5px);
                -webkit-backdrop-filter: blur(5px);
                border-radius: 50px;
            }

            .button-86:hover::before {
                transform: translate(5%, 20%);
                width: 110%;
                height: 110%;
            }

            .button-86:hover::after {
                border-radius: 10px;
                transform: translate(0, 0);
                width: 100%;
                height: 100%;
            }

            .button-86:active::after {
                transition: 0s;
                transform: translate(0, 5%);
            }


            .button-85 {
                padding: 1em 3em;
                border: none;
                outline: none;
                color: rgb(255, 255, 255);
                background: #111;
                cursor: pointer;
                position: relative;
                z-index: 0;
                border-radius: 10px;
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
            }

            .button-85:before {
                content: "";
                background: linear-gradient(45deg,
                        #ff0000,
                        #ff7300,
                        #fffb00,
                        #48ff00,
                        #00ffd5,
                        #002bff,
                        #7a00ff,
                        #ff00c8,
                        #ff0000);
                position: absolute;
                top: -2px;
                left: -2px;
                background-size: 400%;
                z-index: -1;
                filter: blur(5px);
                -webkit-filter: blur(5px);
                width: calc(100% + 4px);
                height: calc(100% + 4px);
                animation: glowing-button-85 20s linear infinite;
                transition: opacity 0.3s ease-in-out;
                border-radius: 10px;
            }

            @keyframes glowing-button-85 {
                0% {
                    background-position: 0 0;
                }

                50% {
                    background-position: 400% 0;
                }

                100% {
                    background-position: 0 0;
                }
            }

            .button-85:after {
                z-index: -1;
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                background: #222;
                left: 0;
                top: 0;
                border-radius: 10px;
            }
        </style>
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

                                <div class="card bg-glass responsive">
                                    <div class="card-body px-5 py-3 px-md-5">
                                        <div class="text-center">
                                            <h2> <strong> LOGIN </strong></h2>
                                        </div>
                                        <form action="/sesi/login" method="POST">
                                            @csrf
                                            <!-- Email input -->
                                            <div class="form-outline mb-4">
                                                <input type="email" id="form3Example3" value="{{ Session::get('email') }}"
                                                    class="form-control" name="email" required
                                                    oninvalid="this.setCustomValidity('Email wajib di isi')"
                                                    oninput="this.setCustomValidity('')" />
                                                <label class="form-label" for="form3Example3">Email address</label>
                                            </div>
                                            <!-- Password input -->
                                            <div class="form-outline mb-4">
                                                <input type="password" id="form3Example4" class="form-control"
                                                    name="password" required
                                                    oninvalid="this.setCustomValidity('Password wajib di isi')"
                                                    oninput="this.setCustomValidity('')" />
                                                <label class="form-label" for="form3Example4">Password</label>
                                            </div>

                                            <!-- Checkbox -->
                                            <div class="form-check d-flex justify-content-center mb-2">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="form2Example33" checked />
                                                <label class="form-check-label" for="form2Example33">
                                                    Remember Me
                                                </label>
                                            </div>

                                            <!-- Submit button -->
                                            <div class="d-flex justify-content-center align-items-center">
                                                <button type="submit" name="sumbit"
                                                    class="btn btn-dark me-2 mb-3 button-85">
                                                    Sign in
                                                </button>
                                            </div>

                                            <div class="d-flex justify-content-center align-items-center gap-4">
                                                <a href="register" class="btn btn-outline-light me-2 mb-2 button-86">
                                                    Register</a>
                                                <a href="/" class="btn btn-outline-light mb-2 button-86">Guest</a>
                                            </div>


                                        </form>
                                    </div>
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

    <!-- HTML !-->

@endguest
