<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bumida') }}</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    {{-- <link href="{{ asset('css/_cetak.css') }}" rel="stylesheet">
     --}}
</head>

<body>
    <div id="app">
        <div class="container">
            @yield('content')
        </div>
    </div>

</body>

</html>