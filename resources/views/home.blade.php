@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
    </ol>
</nav>
<div class="row">
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="mt-3 mb-3">
                    <h4 class="text-muted">Total Permintaan Jasa Service</h4>
                </div>
                <div class="text-center">
                    <h1 class="text-info">
                        {{$acceptsPermintaan}}
                    </h1>
                    Accept
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <div class="mt-3 mb-3">
                    <h4 class="text-muted">Total Permintaan Jasa Service</h4>
                </div>
                <div class="text-center">
                    <h1 class="text-info">
                        {{$waittingLis}}
                    </h1>
                    Waitting List
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
