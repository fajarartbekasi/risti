@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 20 20"
                         width="50" height="50"
                         class="mr-3">
                        <path fill="#ffffff"
                              d="M1 4h2v2H1V4zm4 0h14v2H5V4zM1 9h2v2H1V9zm4 0h14v2H5V9zm-4 5h2v2H1v-2zm4 0h14v2H5v-2z" />
                    </svg>
                    <div class="lh-100">
                        <h6 class="mb-0 text-white lh-100">Data Categori</h6>
                        <small class="text-white">Semua data categori</small>
                    </div>
                    <div class="ml-auto">
                        <a href="{{route('categories.create')}}">
                            <button type="button" class="btn btn-outline-light text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20" class="mr-3">
                                    <path fill="#ffffff"
                                        d="M2 6H0v2h2v2h2V8h2V6H4V4H2v2zm7 0a3 3 0 0 1 6 0v2a3 3 0 0 1-6 0V6zm11 9.14A15.93 15.93 0 0 0 12 13c-2.91 0-5.65.78-8 2.14V18h16v-2.86z" />
                                </svg>
                                Tambah Categori
                            </button>
                        </a>
                    </div>
                </div>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $categorie)
                                <tr>
                                    <td>{{$categorie->name}}</td>
                                    <td>{{$categorie->price}}</td>
                                    <td class="text-center">
                                        <form type="hidden" action="{{route('categories.destroy', $categorie->id)}}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route('categories.edit', $categorie->id)}}"
                                                class="btn btn-outline-success btn-sm">
                                                Edit data please
                                            </a>

                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                Hapus Data Please
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="3" class="text-center">
                                        Maaf Data categori belum tersedia kaka. input dulu ya.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection