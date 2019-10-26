@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card border-0">
            <div class="card-body">
                <form action="{{route('confirmation.update', ['id'=>$permintaan->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="berkas">Bukti pembayaran</label>
                        <input type="file" name="berkas" id="berkas" class="form-control">
                    </div>

                    <input type="hidden" name="request_id" value="{{$permintaan->id}}" id="">
                    <div class="mt-3 mb-3">
                        <button type="submit" class="btn btn-outline-info">
                            Kirim pembayaran
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection