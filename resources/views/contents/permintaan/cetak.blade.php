@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-left">
            <P>
                <b>
                    <h4>
                        Bumida Bumi Putra Muda
                        <br>
                        Jl. Satria I, RT.006/RW.012, Pejuang,
                        Kecamatan Medan Satria,
                        Kota Bks, Jawa Barat 17131
                    </h4>
                    <hr>
                </b>
            </P>
            @if (request('tgl_awal'))
            <small>dari tanggal {{ request('tgl_awal') }} sampai tanggal {{ request('tgl_akhir') }}</small>
            @endif
        </div>
        <u>
            <h4>Laporan Permintaan Service AC</h4>
        </u>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cateegori</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Problem</th>
                    <th>Unit</th>
                    <th>Tipe</th>
                    <th>Tanggal Permintaa</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($permintaan as $cetak_data)
                <tr>
                    <td>{{$cetak_data->categorie->name}}</td>
                    <td>{{$cetak_data->name}}</td>
                    <td>{{$cetak_data->address}}</td>
                    <td>{{$cetak_data->phone}}</td>
                    <td>{{$cetak_data->email}}</td>
                    <td>{{$cetak_data->problem}}</td>
                    <td>{{$cetak_data->unit}}</td>
                    <td>{{$cetak_data->type}}</td>
                    <td>{{$cetak_data->request_date}}</td>
                    <td>{{$cetak_data->time}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="6">Data tidak ditemukan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection