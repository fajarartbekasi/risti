@extends('layouts.app')

@section('content')

    <div class="justify-content-center">
        <div class="card border-0">
            <h4 class="font-weight-bold ml-4 pt-3">
                Filter By Categorie Cuci Ac
            </h4>
            <div class="card-body">
                <div class="row">
                    @forelse($getData as $get)
                    <div class="col-md-4">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <h5 class="font-weight-bold">{{$get->name}}</h5>
                                <h6>Rp. {{number_format($get->price, 2)}}</h6>
                                <p class="text-muted">
                                    {{$get->manfaat}}
                                </p>

                                <div class="pt-3 mb-3">
                                    <a href="{{route('pengajuan.edit', $get->id)}}" class="btn btn-outline-info btn-block">
                                        Pesan Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        <h1 class="font-weight-bold text-center">
                            Maaf Categorie belum tersedia
                        </h1>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection