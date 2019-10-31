@extends('layouts.app')

@section('content')
    <div class="justify-content-center">
        <div class="card border-0">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama Customer</th>
                            <th>Jenis Permintaan</th>
                            {{-- <th>Nama Teknisi</th> --}}
                            <th>Tanggal Permintaan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <tbody>
                            @forelse ($permintaans as $permintaan)
                                <tr>
                                    <td>{{$permintaan->name}}</td>
                                    <td>{{$permintaan->categorie->name}}</td>
                                    <td>{{$permintaan->request_date}}</td>
                                    <td>{{$permintaan->status}}</td>
                                    <td>
                                        <form action="{{route('controlling.update',['id' => $permintaan->id])}}" type="hidden" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="selesai">
                                            <button type="submit" class="btn btn-outline-danger">
                                                Permintaan Selesai
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection