<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        @include('partials/header')

        <div class="container">
            @yield('content')
        </div>

        @include('partials/footer')
    </body>
</html>
