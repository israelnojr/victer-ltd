<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JBOXCOIN') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
    @if(Request::is('login') || Request::is('register'))
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ asset('css/application.css') }}" rel="stylesheet">
    @endif
</head>
<body>
    <div id="app">
        <main class="py-4">
        @if(Request::is('home'))
            @include('layouts.inc.sidebar')
            @include('layouts.inc.header')
        @endif
            @yield('content')
        @if(Request::is('home'))
            @include('layouts.inc.footer')
        @endif
        </main>
    </div>
    
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <script src="{{ asset('lib/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('lib/jquery-pjax/jquery.pjax.js')}}"></script>
    <script src="{{ asset('lib/bootstrap-sass/assets/javascripts/bootstrap.min.js')}}"></script>
    <script src="{{ asset('lib/widgster/widgster.js')}}"></script>
    <script src="{{ asset('lib/underscore/underscore.js')}}"></script>

    <!-- common application js -->
    <script src="{{ asset('js/application.js')}}"></script>
    <script src="{{ asset('js/settings.js')}}"></script>

    

    <!-- page specific scripts -->
    <!-- page libs -->
    <script src="{{ asset('lib/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{ asset('lib/jquery.sparkline/index.js')}}"></script>

    <script src="{{ asset('lib/backbone/backbone.js')}}"></script>
    <script src="{{ asset('lib/backbone.localStorage/build/backbone.localStorage.min.js')}}"></script>

    <script src="{{ asset('lib/d3/d3.min.js')}}"></script>
    <script src="{{ asset('lib/nvd3/build/nv.d3.min.js')}}"></script>

    <!-- page application js -->
    <script src="{{ asset('js/index.js')}}"></script>
    <script src="{{ asset('js/chat.js')}}"></script>

</body>
</html>
