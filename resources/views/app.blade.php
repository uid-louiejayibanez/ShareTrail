<!DOCTYPE html>
<html>
<head>
    {{-- THIS META IS FOR DEVELOPMENT PURPOSES ONLY! PLS REMOVE THIS ON PRODUCTION MODE --}}
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    {{-- THIS META IS FOR DEVELOPMENT PURPOSES ONLY! PLS REMOVE THIS ON PRODUCTION MODE --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <title>ShareTrail</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme/modern.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/iziToast/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/leaflet/leaflet.css') }}">
    <script type="text/javascript" src="{{ asset('library/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('library/iziToast/iziToast.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('library/leaflet/leaflet.js') }}"></script>
    <script type="text/javascript" src="{{ asset('library/leaflet/leaflet-src.js') }}"></script>
</head>
<body id="mainLayout">
    <div id="loaderWrapper">
        <div id="customLoader"></div>
        @if (isset($session_userid) && $checkpoint === true || isset($cookie_userid) && $checkpoint === true)
            @include('dashboard.main')
        @else
            @include('auth.logregfor')
        @endif
    </div>
</body>
</html>
