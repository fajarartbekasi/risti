@extends('layouts.app')

@section('content')
<div class="justify-content-center">
    <div class="card border-0">
        <div class="card-body">
            <div class="mt-3 mb-3">
                <h5 class="text-muted">Saya memesan permintaan</h5>
                <h3 class="text-info font-weight-bold">
                    {{$categorie->name}}
                    <small>Rp. {{number_format($categorie->price,2)}}</small>
                </h3>
                <small>Silahkan isi formulir dibawah ini kak:</small>

                <div class="mt-2 mb-2">
                    <form action="{{route('pengajuan.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" value="{{old('name')}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="+62" value="{{old('phone')}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Example@gmail.com" value="{{old('email')}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="problem" class="form-control" placeholder="Ceritakan masalahnya apa" value="{{old('problem')}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" name="unit" class="form-control" value="{{old('unit')}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="type" class="form-control" id="">
                                        <option value=""> Pilih Jenis Ac Anda.</option>
                                        <option value="LG"> LG</option>
                                        <option value="Samsung"> Samsung</option>
                                        <option value="Politron"> Politron</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="date" name="request_date" class="form-control" value="{{old('request_date')}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="time" name="time" class="form-control" value="{{old('time')}}" id="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="number" name="nominal" class="form-control" value="{{old('nominal')}}" id="">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="address" class="form-control" id="" cols="30"></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="status" value="masuk" id="">
                            <input type="hidden" name="categorie_id" value="{{$categorie->id}}" id="">
                        </div>

                        <div class="mt-3 mb-3">
                            <button type="submit" class="btn btn-outline-info">
                                Kirim Permintaan Saya
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection