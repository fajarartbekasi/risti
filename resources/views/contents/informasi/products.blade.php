@extends('layouts.app')

@section('content')
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Produk yang kami tawarkan</h1>
        <p class="lead">
            Nikmati berbagai jenis layanan yang kami tawarkan dengan berbagai macam fitur.
            dan pelayanan yang profesional.
        </p>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('asset/ac_service.png')}}"
                         alt=""
                         width="100"
                         height="100"
                         srcset="">
                </div>
                <div class="mt-3 mb-3">
                    <h4 class="text-info text-center">Cuci AC</h4>
                    <h6 class="text-muted">harga mulai dari</h6>
                    <h4>Rp. 65.000.00,- </h4>

                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('login')}}" class="btn btn-outline-info btn-block">
                        Pesan sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('asset/service-ac-di-sukoharjo.png')}}" alt="" width="100" height="100" srcset="">
                </div>
                <div class="mt-3 mb-3">
                    <h4 class="text-info text-center">Bongkar pasang AC</h4>
                    <h6 class="text-muted">harga mulai dari</h6>
                    <ul>
                        <li>Ruko (+Rp.25.000)</li>
                        <li>Apartemen (+Rp.25.000)</li>
                        <li>Gedung Kantor (+Rp.25.000)</li>
                    </ul>

                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('login')}}" class="btn btn-outline-info btn-block">
                        Pesan sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="{{asset('asset/images.png')}}" alt="" width="100" height="100" srcset="">
                </div>
                <div class="mt-3 mb-3">
                    <h4 class="text-info text-center">Reparasi AC</h4>
                    <h6 class="text-muted">harga mulai dari</h6>
                    <h4>Rp. 55.000</h4>

                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('login')}}" class="btn btn-outline-info btn-block">
                        Pesan sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection