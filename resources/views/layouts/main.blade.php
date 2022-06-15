<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @section('head')
        @include('partials.head')
    @show
</head>
<style>
    body{
        background-image:url("{{ asset('picture/bg.jpg') }}");
        background-attachment:fixed;
    }
</style>
<body>
    @section('header')
        @include('partials.header')
    @show
    <div class="container">
        @yield('content')
    </div>
    @section('footer')
        @include('partials.footer')
    @show
</body>
</html>