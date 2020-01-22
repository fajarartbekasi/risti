<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/_landing.css') }}" rel="stylesheet">
    </head>
    <body class="bg-white">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-laravel fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('logo/PT. YOSIKO INDONESIA-01.png')}}" height="50" alt="" srcset="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Produk
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    </ul>
                    <div>
                        <ul class="navbar-nav">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>

                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main role="main" class="mb-4">
                <div class="jumbotron">
                    <div class="container text-center">
                        <h1 class="display-3">PT. YOSIKO INDONESIA</h1>
                        <p>
                            Rawat AC dengan cara yang salah dan asal akan memperpendek umur unitmu lho. Pastikan selalu gunakan jasa profesional untuk dapatkan hasil dan pengalaman terbaik dengan jaminan garansi
                        </p>
                        <p>
                            <a class="btn btn-primary btn-lg" href="{{route('informasi.produks')}}" role="button">
                                Pesan Jasa Service Ac
                            </a>
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 " style="margin-top: -60px;">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <h6 class="font-weight-bold">Bongkar Pasang AC</h6>
                                                    <p class="text-muted">
                                                        Dapatkan pelayanan profesional dari pakar jasa AC
                                                        dengan harga tetap
                                                    </p>
                                                    <a href="http://" class="card-link">
                                                        Request Now
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ml-2" width="15" height="15">
                                                                <path class="heroicon-ui" d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <h6 class="font-weight-bold">Perbaikan AC</h6>
                                                    <p class="text-muted">
                                                       Perbaikan AC oleh para ahli yang terlatih dan terpercaya
                                                    </p>
                                                    <a href="http://" class="card-link">
                                                        Request Now
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ml-2" width="15" height="15">
                                                                <path class="heroicon-ui" d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card border-0">
                                                <div class="card-body">
                                                    <h6 class="font-weight-bold">Cuci / Tambah Freon Ac</h6>
                                                    <p class="text-muted">
                                                        Buat AC anda kembali dingin dengan perawatan rutin dari teknisi kami.
                                                    </p>
                                                    <a href="http://" class="card-link">
                                                        Request Now
                                                        <span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ml-2" width="15" height="15">
                                                                <path class="heroicon-ui" d="M18.59 13H3a1 1 0 0 1 0-2h15.59l-5.3-5.3a1 1 0 1 1 1.42-1.4l7 7a1 1 0 0 1 0 1.4l-7 7a1 1 0 0 1-1.42-1.4l5.3-5.3z"/>
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-12 ">
                            <div class="card border-0 shadow">
                                <div class="card-body">
                                    <h5 class="text-center mb-3 font-weight-bold">
                                        Tentang Kami
                                    </h5>
                                    <section class="text-left">
                                        <p class="lead text-muted">
                                            PT. Yosiko Indonesia merupakan perusahaan yang  berdiri pada tanggal 3 juli 2009 dan didirikan oleh Bapak Sudiyono, Kantor PT. Yosiko Indonesia
                                            saat ini berlokasi di  Plaza Taman Harapan Baru (THB) Blok F2 No. 63, Medan Satria, Bekasi PT. Yosiko Indonesia Memiliki makna tersendiri
                                            bagi pemilik. Penamaan Yosiki merupakan gabungan dari nama pemilik dan istri.
                                        </p>
                                        <p class="lead text-muted">
                                            PT. Yosiko Indonesia menjalani usaha dibidang supplier dan maintenance semua jenis pendingin ruangan baik skala kecil maupun skala besar, seperti pmbuatan cold storage, perawatan, perbaikan
                                            (service) dan pembersihan AC, dan lainnya.
                                        </p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="footer mt-auto py-3">
                <div class="container">
                    <div class="d-flex">
                        <div class="mr-auto">
                            <span class="text-muted">&copy; Risti 2020</span>
                            <span class="text-muted">PT.YOSIKO INDONESIA</span>
                        </div>
                        <div>
                            Contact us .
                            <p>
                                Jl. Satria I, RT.006/RW.012,
                                Pejuang, Kecamatan Medan Satria,
                                Kota Bks, Jawa Barat 17131
                            </p>
                            <p>+62 877-4164-0471</p>
                        </div>
                    </div>

                </div>
            </footer>
        </div>
    </body>
</html>
