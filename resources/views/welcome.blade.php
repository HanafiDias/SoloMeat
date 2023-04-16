<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>SOLOMEAT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/pricing/">

    <link href="{{ asset('pengguna/css/bootstrap.min.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('image/beef.png') }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">

    <!-- CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"
        integrity="sha512-yz/zcjsEPGgd+V8eWfvMwA/Lm+2YRmjpX7W+1JvD3+q3dLrJW5In5+Dp5Jd0t/skaK1Q2X1x/GG+0oKJjKzEeA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS AOS-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FontAwesomme -->
    <script src="https://kit.fontawesome.com/1a35c69008.js" crossorigin="anonymous"></script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        @media (max-width: 767.98px) {
            .card {
                width: 100%;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .card-header img {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }

        .list-unstyled {
            width: 100%;
            height: 80px;
            object-fit: cover;
        }

        .gra {
            background: linear-gradient(to bottom, #e4e0ff, #4f489d, #24243e);
        }

        .navbar .nav-link {
            color: #000000 !important;
        }
    </style>
    <style>
        /* css card */
        .cont {
            position: relative;
            width: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-warp: warp;
            padding: 10px;
        }

        .cont .card {
            position: relative;
            max-width: 300px;
            height: 255px;
            background: linear-gradient(to top, #E4E2E9, #5E7496);
            margin: 50px 10px;
            padding: 20px 10px;

            display: flex;
            flex-direction: column;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.5);
            transition: 0.3s ease-in-out;
            border-radius: 15px;
        }

        .cont .card:hover {
            height: 380px;
            display: flex;
        }


        .cont .card .image {
            position: relative;
            width: 260px;
            height: 260px;


            top: -35%;
            left: 8px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .cont .card .image img {
            max-width: 100%;
            border-radius: 20px;
        }

        .cont .card .content {
            position: relative;
            top: -150px;
            padding: 10px 15px;
            color: #333232;
            text-align: center;

            visibility: hidden;
            opacity: 0;
            transition: 0.3s ease-in-out;

        }

        .cont .card:hover .content {
            margin-top: 40px;
            visibility: visible;
            opacity: 1;
            transition-delay: 0.2s;

        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('pengguna/pricing.css') }}" rel="stylesheet">
</head>

<body>
    <div class="gra">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-flex d-lg-block"
            style="z-index: 2000; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" href="/">
                    <img class="mb-2" src="image/beef.png" width="50" height="50">
                    <strong>SOLOMEAT</strong>
                </a>
                <div class="d-flex align-items-center">
                    <a class="btn btn-danger px-3" href="login" role="button"><i
                            class="fa-solid fa-right-from-bracket"></i></a>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check" viewBox="0 0 16 16">
                <title>Check</title>
                <path
                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
            </symbol>
        </svg>



        <div class="p-3">
            <!-- slider -->
            <div class="container">
                <div class="row">
                    <div class="col-lg mb-5">
                        <div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="3000">
                                    <img src="image/opening.png" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="3000">
                                    <img src="image/event.png" class="d-block img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="3000">
                                    <img src="image/sale.png" class="d-block img-fluid" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <main>
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    @foreach ($data as $item)
                        <div class="col-md-3 col-lg-3 mb-3">
                            <div class="" data-aos="zoom-in-down" data-aos-easing="linier"
                                data-aos-duration="2000">
                                <!-- div atas ini terdapat class "card" dan "shadow-sm" jika mau pakai coding dibawah -->
                                {{-- <div class="card-header py-2 px-2">
                                    <img src="{{ asset('image/store/' . $item->gambar) }}" class="img-thumbnail"
                                        width="200" height="200">
                                </div>
                                <div class="card-body">
                                    <h2 class="card-title pricing-card-title">Rp. {{ number_format($item->harga) }}
                                    </h2>
                                    <div class="btn-group card-body d-flex justify-content-between" role="group"
                                        aria-label="Button group with nested dropdown">
                                        <div class="container">
                                            <ul class="col-1 list-unstyled mt-1 mb-1">
                                                <li>{{ $item->produk }}</li>
                                            </ul>
                                        </div>
                                        <div class="row text-end">
                                            <span style="font-size: 20px;">
                                                <a href="https://wa.me/{{ $item->nomor_whatsapp }}?text=Halo,apakah produk ini '{{ $item->produk }}' ready?"
                                                    target="blank">
                                                    <button type="button" class="w-80 btn btn-md btn-success"><i
                                                            class="fa-brands fa-whatsapp"></i></button>
                                                </a>
                                            </span>
                                            <span style="font-size: 20px;">
                                                <a href="{{ $item->link_toko_online }}" target="blank">
                                                    <button type="button" class="w-80 btn btn-md btn-warning"><i
                                                            class="fa-solid fa-cart-shopping"></i></button>
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class=cont>
                                    <div class=card>
                                        <div class=image>
                                            <img href="#" src="{{ asset('image/store/' . $item->gambar) }}">
                                        </div>
                                        <div class=content>
                                            <h2 class="card-title pricing-card-title">Rp.
                                                {{ number_format($item->harga) }}
                                            </h2>
                                            <div class="btn-group d-flex justify-content-between" role="group"
                                                aria-label="Button group with nested dropdown">
                                                <div class="container">
                                                    <ul class="col-1 list-unstyled mt-1 mb-1">
                                                        <li>{{ $item->produk }}</li>
                                                    </ul>
                                                </div>
                                                <div class="row text-end">
                                                    <span style="font-size: 20px;">
                                                        <a href="https://wa.me/{{ $item->nomor_whatsapp }}?text=Halo,apakah produk ini '{{ $item->produk }}' ready?"
                                                            target="blank">
                                                            <button type="button"
                                                                class="w-80 btn btn-md btn-success"><i
                                                                    class="fa-brands fa-whatsapp"></i></button>
                                                        </a>
                                                    </span>
                                                    <span style="font-size: 20px;">
                                                        <a href="{{ $item->link_toko_online }}" target="blank">
                                                            <button type="button"
                                                                class="w-80 btn btn-md btn-warning"><i
                                                                    class="fa-solid fa-cart-shopping"></i></button>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
    </div>

    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-3">
            <!-- Section: Social media -->
            <section class="mb-1">
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="mailto:hanafidias.hd@email.com"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/hanafidias/"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/HanafiDias"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: #171c31);">
            &copy; 2023 Copyright:
            <strong class="text-white" href="">Hanafi Dias - <a class="text-white" href="/"
                    style="text-decoration: none;">
                    SoloMeat</a> </strong>
        </div>
        <!-- Copyright -->
    </footer>




    <!-- JS bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-DrnM80GvnRB7sTDCvGOO2ZY0bF6a8omxKFbPPIZ/HjrCZp0gbAMukV69Uu1POUZZ" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-72Exo7Q+g6ULm+ZVwEBwJQLMn1uGd37IaXf+r/6jzidpzg+EoTJzN7ZwKysNY8gI" crossorigin="anonymous">
    </script>

    <!-- JS AOS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
