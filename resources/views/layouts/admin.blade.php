<!DOCTYPE html>
<html>
    <head>
        @include('partials._header')
    </head>
    <body>
        @include('partials.admin._nav')
        @yield('content')
        @include('partials.admin._footer')
    </body>
</html>