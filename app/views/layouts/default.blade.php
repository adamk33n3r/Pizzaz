<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <!-- jQuery -->
    {{ HTML::script("https://code.jquery.com/jquery-2.1.1.min.js") }}

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    {{ HTML::style("https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css") }}

    <!-- Optional theme -->
    {{ HTML::style("https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css") }}

    <!-- Latest compiled and minified JavaScript -->
    {{ HTML::script("https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js") }}

    {{ HTML::style("/stylesheets/main.css") }}
    @yield('head')
</head>
<body>
    <div class="container">
        <div>
            <h1>Pizzaz!</h1>
        </div>
        @include('layouts.navbar')

        @yield('content')
    </div>
</body>
</html>