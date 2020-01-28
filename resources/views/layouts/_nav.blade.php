<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            <img src="{{asset('logo/PT. YOSIKO INDONESIA-01.png')}}" height="50" alt="" srcset="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @if (Route::has('login'))
                    @auth
                    {{-- start roles for admin --}}
                        @role('admin')
                            <li class="nav-item">
                                <a href="{{route('categories.index')}}" class="nav-item text-white font-weight-bold">Categorie</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a href="{{route('permintaan.index')}}" class="nav-item text-white font-weight-bold">Permintaan</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a href="{{route('pegawai.index')}}" class="nav-item text-white font-weight-bold">Pegawai</a>
                            </li>
                        @endrole
                    {{-- start role for pengawas teknisi --}}
                        @role('pengawas')
                            <li class="nav-item">
                                <a href="{{route('controlling.index')}}" class="nav-item text-white font-weight-bold">Controlling</a>
                            </li>
                        @endrole
                        {{-- start role keuangan --}}
                        @role('keuangan')
                            <li class="nav-item">
                                <a href="{{route('payment.index')}}" class="nav-item text-white font-weight-bold">
                                    Data permintaan
                                </a>
                            </li>
                        @endrole

                        @role('customer')
                            <li class="nav-item">
                                <a href="{{route('informasi.produks')}}" class="nav-item text-white font-weight-bold">
                                    Cek Produk
                                </a>
                            </li>
                        @endrole
                    @endauth

                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('customers.signup') }}">{{ __('SignUp') }}</a>
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