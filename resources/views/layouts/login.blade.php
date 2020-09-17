<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{asset('js/material/bin/materialize.min.js')}}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animated.css') }}" rel="stylesheet">

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fiori-fundamentals.min.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
<style>
</style>
</head>
<body id="bodylogin">
<div id="app" >
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
