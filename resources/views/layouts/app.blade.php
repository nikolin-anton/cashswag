<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cashswag') }}</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   
    <link rel="stylesheet" href="{{asset('css/main.dd79597f.chunk.css?ver='.uniqid())}}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.min.css')}}" /> 

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('img/site.webmanifest')}}">
    <link rel="mask-icon" href="{{asset('img/safari-pinned-tab.svg')}}" color="#5bbad5">

    <!-- <script src="https://widget.cloudpayments.ru/bundles/checkout"></script> -->


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <div id="pageLoading" style="background:#fff;z-index: 99999;position:fixed;top:0;right:0;bottom:0;left:0;"><span style="animation-name: loader;animation-duration: 7000ms;animation-iteration-count: infinite;animation-timing-function: linear;top: 50%;left: 50%;position: absolute;"><img title="Page is loading..." alt="Page is loading..." style="position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-moz-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);-o-transform:translate(-50%,-50%);transform:translate(-50%,-50%);width:220px;" src="{{asset('img/logo.svg')}}"></span></div>
    <div id="pageFading" style="display:none;background:#000;z-index: 99999;position:fixed;top:0;right:0;bottom:0;left:0;"></div>

</head>
<body>
    <div id="root">
        <div class="App">
            <div class="client-content">
                @yield('content')
            </div>
            @extends('inc.footer')
        </div>
    </div>

</body>
</html>
