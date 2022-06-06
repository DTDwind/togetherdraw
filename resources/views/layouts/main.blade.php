<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @section('head')
        @include('partials.head')
    @show
</head>
<body>
    @section('header')
        @include('partials.header')
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>