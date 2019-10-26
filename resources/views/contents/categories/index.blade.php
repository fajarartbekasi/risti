@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">

                        <div class="d-flex justify-content-end mb-3">
                            <a href="{{route('categories.create')}}" class="btn btn-outline-info">
                                Add New Categories
                            </a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $categorie)
                                <tr>
                                    <td>{{$categorie->name}}</td>
                                    <td>{{$categorie->price}}</td>
                                    <td>
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