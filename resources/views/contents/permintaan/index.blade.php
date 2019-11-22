@extends('layouts.app')

@section('content')
    <div class="jutify-content-center">
        <div class="card border-0">
            <div class="card-body">
                <form action="{{route('cari-report.permintaan')}}" method="GET">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Awal</label>
                                <input type="date" name="tgl_awal" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Akhir</label>
                                <input type="date" name="tgl_akhir" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-outline-info">
                                Cari Report
                            </button>
                        </div>
                    </div>
                </form>

                <div class="mt-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama Customer</th>
                                <th>Jenis Permintaan</th>
                                <th>Alamat</th>
                                <th>Problem</th>
                                <th>Tanggal Permintaan</th>
                                <th>Jam</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach($permintaans as $permintaan)
                                    <td>{{$permintaan->name}}</td>
                                    <td>{{$permintaan->categorie->name}}</td>
                                    <td>{{$permintaan->address}}</td>
                                    <td>{{$permintaan->problem}}</td>
                                    <td>{{$permintaan->request_date}}</td>
                                    <td>{{$permintaan->time}}</td>
                                    <td>{{$permintaan->status}}</td>
                                    <td>
                                        <form action="{{route('permintaan.update-status', ['id'=>$permintaan->id])}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status" value="progress" id="">
                                            <button type="submit" class="btn btn-outline-info">
                                                progress
                                            </button>
                                        </form>
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection