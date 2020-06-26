<!DOCTYPE html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <title>@yield('title_of_page')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body >
    @include('testsite.include.header')
    @if(session('success'))
        <div class="mt-5 pt-5 w-50 mx-auto">
            <p class="alert-success text-center">{{session('success')}}</p>
        </div>
    @endif

    @yield('content')
    @include('testsite.include.footer')
    </body>
</html>
