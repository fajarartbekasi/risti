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
                        @forelse ($permintaans as $permintaan)
                            <tr>
                                <td>{{$permintaan->permintaan->name}}</td>
                                <td>{{$permintaan->categorie->name}}</td>
                                <td>{{$permintaan->permintaan->address}}</td>
                                <td>{{$permintaan->permintaan->problem}}</td>
                                <td>{{$permintaan->permintaan->status}}</td>
                                <td>
                                    <form type="hidden" action="" method="post">
                                        @csrf
                                        @method('PACTH')
                                        <input type="hidden" name="status" value="accept" id="">
                                        <button type="submit" class="btn btn-outline-info">
                                            Accpet Permintaan
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty

                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection