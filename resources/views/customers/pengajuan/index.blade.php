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
                                        A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of
                                        content, contextual background colors, and powerful display options. If you’re familiar with Bootstrap 3, cards replace
                                        our old panels, wells, and thumbnails. Similar functionality to those components is available as modifier classes for
                                        cards.
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