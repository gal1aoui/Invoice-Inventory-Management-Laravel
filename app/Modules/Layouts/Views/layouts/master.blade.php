<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('bt.headerTitleText') }}</title>

    <link rel="stylesheet" href="/css/app.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
    @include('layouts._head')

    <script src="/js/app.js"></script>
    @include('layouts._js_global')

    @yield('javascript')

</head>
<body class=" hold-transition sidebar-mini sidebar-{{$sidebarMode}}">

<div class="wrapper">

    @include('layouts._header')

    @include('layouts.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

</div>

<div id="modal-placeholder"></div>

<a href="#" class="back-to-top" >
    <i class="fa fa-chevron-circle-up"></i>
</a>

@stack('scripts')

</body>
</html>
