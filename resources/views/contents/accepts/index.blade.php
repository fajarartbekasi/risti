@extends('layouts.app')

@section('content')
<div class="jutify-content-center">
    <div class="card border-0">
        <div class="card-body">

            <div class="mt-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Customer</th>
                            <th>Jenis Permintaan</th>
                            <th>Alamat</th>
                            <th>Problem</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permintaans as $permintaan)
                            <tr>
                                <td>{{$permintaan->name}}</td>
                                <td>{{$permintaan->categorie->name}}</td>
                                <td>{{$permintaan->address}}</td>
                                <td>{{$permintaan->problem}}</td>
                                <td>{{$permintaan->status}}</td>
                                <td>
                                    <form type="hidden" action="{{route('payment.update', ['id'=>$permintaan->id])}}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="accept" id="">
                                        <button type="submit" class="btn btn-outline-info">
                                            Accpet Permintaan
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection