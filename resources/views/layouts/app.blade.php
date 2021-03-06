<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VOS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <?php
        /*
            @include('layouts/navigationBar')
            */?>

            <main class="py-4">
                    <div class="row">
                        <div class="col-sm-0 col-md-0 col-lg-1"></div>
                        <div class="col-sm-12 col-md-12 col-lg-10">
                            @include('layouts/statusMessage')
                            @yield('content')
                        </div>
                        <div class="col-sm-0 col-md-0 col-lg-1"></div>
                    </div>
                </main>
    </div>
</body>
</html>
