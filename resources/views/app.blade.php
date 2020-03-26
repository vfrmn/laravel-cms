<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <title>@yield('title_of_page')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
    @include('include.header')
    @yield('content')
    @include('include.footer')
    </body>
</html>
