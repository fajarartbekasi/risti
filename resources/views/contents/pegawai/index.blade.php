@extends('layouts.app')

@section('content')
<div class="d-flex align-items-center p-3 my-3 text-white-50 bg-primary rounded shadow-sm">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="48" height="48" class="mr-3">
        <path fill="#ffffff"
            d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z" />
    </svg>
    <div class="lh-100">
        <h6 class="mb-0 text-white lh-100">Data Pegawai</h6>
        <small class="text-white">Semua data pegawai</small>
    </div>
    <div class="ml-auto">
        <a href="{{route('pegawai.create')}}">
            <button type="button" class="btn btn-outline-light text-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20" class="mr-3">
                    <path fill="#ffffff"
                        d="M2 6H0v2h2v2h2V8h2V6H4V4H2v2zm7 0a3 3 0 0 1 6 0v2a3 3 0 0 1-6 0V6zm11 9.14A15.93 15.93 0 0 0 12 13c-2.91 0-5.65.78-8 2.14V18h16v-2.86z" />
                </svg>
                Tambah Pegawai
            </button>
        </a>
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Email Verified</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Akses</th>
                        </thead>
                        <tbody>
                            @forelse ($pegawais as $pegawai)
                            <tr>
                                <th>
                                    <a href="{{route('pegawai.edit', $pegawai->id)}}">
                                        {{$pegawai->name}}
                                    </a>
                                </th>
                                <td>{{$pegawai->email}}</td>
                                <td>{{$pegawai->email_verified_at}}</td>
                                <td>{{$pegawai->jabatan ?? '-'}}</td>
                                <td>{{$pegawai->roles->implode('name',', ')}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    Data pegawai belum tersedia
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection