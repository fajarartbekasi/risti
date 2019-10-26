@extends('layouts.app')

@section('content')
    <div class="jutify-content-center">
        <div class="card border-0">
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Awal</label>
                                <input type="date" name="" class="form-control" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tanggal Akhir</label>
                                <input type="date" name="" class="form-control" id="">
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
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>John Doe</td>
                                <td>Service Ac</td>
                                <td>Jl. Entah Dimana Berada</td>
                                <td>Tidak punya ac</td>
                                <td>Selesai</td>
                                <td>
                                    <a href="http://" class="btn btn-outline-success">
                                        Print Permintaan
                                    </a>
                                    <a href="http://" class="btn btn-outline-info">
                                        Buat Surat Jalan
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection