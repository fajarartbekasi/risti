@extends('layouts.app')

@section('content')
    <div class="col-lg-12">

        <div class="card">
            <h5 class="card-header">Edit Pengguna : {{$pegawai->name}}</h5>
            <div class="card-body">
                <form action="{{route('pegawai.perbarui-profile.update', $pegawai->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-mail:</label>
                                <input type="email" name="email" value="{{old('email', $pegawai->email)}}" id="email"
                                    class="form-control" placeholder="Email...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama:</label>
                                <input type="text" name="name" value="{{old('name', $pegawai->name)}}" id="nama"
                                    class="form-control" placeholder="Nama...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jabatan">Jabatan:</label>
                                <input type="text" name="jabatan" value="{{old('jabatan', $pegawai->jabatan)}}" id="jabatan"
                                    class="form-control" placeholder="Jabatan...">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="roles">Akses:</label>
                                <select name="roles" id="roles" class="form-control">
                                    @foreach ($roles as $role)
                                    <option value="{{ $role }}"
                                        {{ $pegawai->roles->implode('name', ', ') == $role ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-outline-primary">
                                Simpan
                            </button>
                            <button type="submit" class="btn btn-outline-secondary">
                                Cancel
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection