<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('/img/favicon.png')}}" type="image/*">
    </link>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
        }

        /* Utilities */
        .bg-white-50 {
            background: rgba(255, 255, 255, .5);
            transition: .5s;
        }

        .bg-dark-50 {
            background: rgba(0, 0, 0, .5);
        }

        .bg-light {
            background: #f4f6f9;
        }

        .text-white-80 {
            color: rgba(255, 255, 255, .8);
        }

        .text-lg {
            font-size: 1.25rem;
        }

        a.text-white-80:hover {
            color: rgba(255, 255, 255, .5);
        }

                /* Header & Navbar */
                .header {
            font-size: 14px;
        }
        .navbar-brand img {
            width: 170px;
            height: 40px;
            position: absolute;
            top: 4px;
        }
        #navbar1 .nav-link {
            padding: .35rem 1.25rem;
            border-radius: 25px;
            color: #333333;
            transition: .3s;
        }
        #navbar1 .nav-link:hover,
        #navbar1 .nav-link:focus,
        #navbar1 .nav-link.active {
            background: var(--primary);
            color: var(--white);
        }
        #navbar1 .dropdown-menu {
            padding: 0;
            border-radius: 0;
            border: 0;
            margin-top: 8px;
        }
        #navbar1 .dropdown-item {
            transition: .3s;
        }
        #navbar1 .dropdown-item:hover,
        #navbar1 .dropdown-item:focus {
            background: var(--primary);
            color: var(--white);
        }
        .navbar-toggler {
            border: 0;
            background: transparent !important;
        }
        .navbar-toggler:focus {
            outline: 0;
            background: transparent !important;
        }
        .navbar-toggler .icon-bar {
            background-color: rgba(0, 0, 0, .7);
            transform: rotate(0deg) translate(0px, 0px);
            transition: ease all .2s;
            display: block;
            width: 22px;
            height: 2px;
            border-radius: 1px;
        }
        .navbar-toggler .icon-bar+.icon-bar {
            margin-top: 4px;
        }
        .icon-bar:nth-child(2) {
            width: 16px;
            transition: ease all .2s;
        }
        .navbar-toggler:hover>.icon-bar:nth-child(2) {
            width: 22px;
            transition: ease all .2s;
        }
        .navbar-toggler:active>.icon-bar:nth-child(2) {
            width: 22px;
            transition: ease all .2s;
        }
        .navbar-toggler:not(.collapsed):not(.first-load) .icon-bar:nth-child(1) {
            transform: rotate(45deg) translate(5px, 4px);
            transition: ease all .2s;
        }
        .navbar-toggler:not(.collapsed):not(.first-load) .icon-bar:nth-child(2) {
            opacity: 0;
            transition: ease all .2s;
        }
        .navbar-toggler:not(.collapsed):not(.first-load) .icon-bar:nth-child(3) {
            transform: rotate(-45deg) translate(4px, -4px);
            transition: ease all .2s;
        }

        @media (max-width: 992px) {
            .header .social {
                text-align: center;
                margin-bottom: 1rem;
            }
            .header .office-info {
                margin-bottom: 1rem;
            }
            .header .office-info a {
                white-space: nowrap;
            }
            .header .action {
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            #navbar1 .nav-link:first-child:not(.dropdown-toggle) {
                display: none;
            }
        }

        @media (max-width: 575.98px) {
            #navbar1 .nav-link {
                border-radius: 0;
            }
            #navbar1 .nav-link:first-child:not(.dropdown-toggle) {
                display: block;
            }
            .navbar-collapse {
                margin-top: 1rem;
                transition: .3s;
            }
            .navbar-brand {
                padding-top: 1.25rem;
                padding-bottom: 1.25rem;
            }
            .navbar-brand img {
                top: 7.5px;
            }
        }

    </style>

    @stack('css')

    <title>@yield('title')</title>
</head>

<body class="bg-light">
    {{-- Header --}}
    <div class="header bg-primary text-white py-2">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 social">
                    <a href="" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    <a href="" class="text-white ml-3"><i class="fab fa-twitter"></i></a>
                    <a href="" class="text-white ml-3"><i class="fab fa-google-plus-g"></i></a>
                    <a href="" class="text-white ml-3"><i class="fab fa-facebook-f"></i></a>
                </div>
                <div class="col-lg-7 office-info text-center">
                    <a href="" class="text-white text-decoration-none">
                        <i class="fas fa-phone-alt"></i>
                        <span class="ml-1">0815-2013-5046</span>
                    </a>
                    <a href="" class="text-white text-decoration-none ml-3">
                        <i class="fas fa-clock"></i>
                        <span class="ml-1">Senin-jum'at, 08:00 s/d 16:00</span>
                    </a>
                    <a href="" class="text-white text-decoration-none ml-3">
                        <i class="fas fa-envelope"></i>
                        <span class="ml-1">support@youthped.com</span>
                    </a>
                </div>
                <div class="col-lg-2 action" style="white-space:nowrap;">
                    <a href="" class="btn btn-sm btn-light py-0 rounded-0">Donasi</a>
                    <a href="" class="btn btn-sm btn-light py-0 rounded-0">Galang Dana </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-sm sticky-top navbar-light bg-white border-bottom" style="top:-1px;">
        <div class="container">
            <a class="navbar-brand" href="#">
              <img src="{{ asset('/img/logoYI.png')}}" alt="">
            </a>
            <button class="navbar-toggler first-load" type="button" data-toggle="collapse" data-target="#navbar1"
                aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle Navigation</span>
            </button>

            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto">
                    <a class="nav-link active" href="#">Home</a>
                    <a class="nav-link " href="#">Kontak</a>
                    <a class="nav-link " href="#">Tentang Kami</a>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Bantuan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Login</a>
                            <a class="dropdown-item" href="#">Register </a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- footer --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script>
      $('.navbar-toggler').on('click', function() {
        $(this).removeClass('first-load')
      })
    </script>

    @stack('scripts')
</body>

</html>
