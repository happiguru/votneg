<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
    </head>
    <body>
    <header>
        @include('partials.navbar')
    </header>
   
    @yield('content')
    
    <footer class="container-fluid site-footer">
        @include('partials.footer')
    </footer>
    </body>
</html>