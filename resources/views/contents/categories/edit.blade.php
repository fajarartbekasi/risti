@extends('layouts.app')


@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <form action="{{route('categories.update', $categories->id)}}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">Nama Categories*</label>
                        <input type="text" name="name" class="form-control" value="{{$categories->name}}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price*</label>
                        <input type="text" name="price" class="form-control" value="{{$categories->price}}">
                    </div>

                    <div class="mt-3 mb-3">
                        <button type="submit" class="btn btn-outline-success">
                            Save New Categori
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection