@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="card border-0">
            <div class="card-body">
                <div class="row">
                    @foreach ($categories as $categorie)

                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">
                                        {{$categorie->name}}
                                    </h5>
                                    <p class="text-muted">
                                       {{$categorie->manfaat}}
                                    </p>

                                    <div class="mt-3 mb-3">
                                        <a href="{{route('pengajuan.edit', $categorie->id)}}" class="btn btn-outline-info">
                                            Buat permintaan
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection