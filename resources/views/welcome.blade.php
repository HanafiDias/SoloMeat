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

    <!-- FontAwesomme -->
    <script src="https://kit.fontawesome.com/1a35c69008.js" crossorigin="anonymous"></script>

    {{-- <!-- Link stylesheet untuk modal -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- Link library javascript untuk modal -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

    <!-- CSS bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


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
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('pengguna/pricing.css') }}" rel="stylesheet">
</head>

<body>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check" viewBox="0 0 16 16">
            <title>Check</title>
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
    </svg>

    <div class="p-2 m-4">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom border-4">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <img src="image/beef.png" width="40" height="40" class="me-2" viewBox="0 0 118 94"
                        role="img">
                    <title>Bootstrap</title>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"
                        fill="currentColor"></path></svg>
                    <span class="fs-4">SOLOMEAT</span>
                </a>

                <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                    <!-- <a class="me-3 py-2 text-dark text-decoration-none" href="#">Features</a -->
                    <a class="py-2 text-dark text-decoration-none" href="login">Logout</a>
                </nav>
            </div>

            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">SoloMeat</h1>
                <p class="fs-5 text-muted">Temukan Daging Terbaik Anda Disini, Pemasaran Daging Se-Solo Raya</p>
            </div>
        </header>

        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                @foreach ($data as $item)
                    <div class="col-md-3 col-lg-3 mb-4">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-2 px-2">
                                <img src="{{ asset('image/store/' . $item->gambar) }}" class="img-thumbnail"
                                    width="300" height="300">
                            </div>
                            <div class="card-body">
                                <h2 class="card-title pricing-card-title">Rp. {{ number_format($item->harga) }}</h2>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>{{ $item->produk }}</li>
                                </ul>
                                <div class="row">
                                    <div class="col-6 justify-content-center">
                                        <span style="font-size: 20px;">
                                            <a href="https://wa.me/{{ $item->nomor_whatsapp }}?text=Halo,apakah produk ini '{{ $item->produk }}' ready?"
                                                target="blank"><button type="button"
                                                    class="w-80 btn btn-md btn-success"><i
                                                        class="fa-brands fa-whatsapp"></i> What'sApp</button></a>
                                        </span>
                                    </div>
                                    <div class="col-6 justify-content-center">
                                        <span style="font-size: 20px;">
                                            <a href="{{ $item->link_toko_online }}" target="blank"><button
                                                    type="button" class="w-80 btn btn-md btn-outline-warning"><i
                                                        class="fa-solid fa-cart-shopping"></i> Toko Online</button></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>


        <footer class="pt-2 my-md-5 pt-md-3 border-top border-4">
            <div class="row">
                <div class="col-4 col-md">
                    <img class="mb-2" src="image/beef.png" alt="" width="50" height="50">
                    <small class="d-block mb-3 text-muted">&copy; 2023 Hanafi Dias Arif Dewanto</small>
                </div>
                <div class="col-4 col-md">
                    <h5>Contact</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-1"><a class="link-secondary text-decoration-none"
                                href="https://github.com/HanafiDias" target="blank"><i
                                    class="fa-brands fa-github"></i>
                                Hanafi Dias Arif Dewanto</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none"
                                href="mailto:hanafidias.hd@email.com" target="blank"><i
                                    class="fa-regular fa-envelope"></i> Hanafi Dias Arif Dewanto</a></li>
                        <li class="mb-1"><a class="link-secondary text-decoration-none"
                                href="https://www.instagram.com/hanafidias/" target="blank"><i
                                    class="fa-brands fa-instagram"></i> hanafidias</a></li>
                    </ul>
                </div>
                {{-- <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
        </ul>
      </div> --}}
                <div class="col-4 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                        <li class="mb-2">Tempat dimana berkumpulnya daging-daging berkualitas dengan harga yang
                            murah, temukan daging yang anda inginkan disini.</li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
    <!-- JS bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
