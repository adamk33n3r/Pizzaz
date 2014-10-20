<?php
$start = microtime(true);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- jQuery -->
    {{ HTML::script("https://code.jquery.com/jquery-2.1.1.min.js") }}

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    {{ HTML::style("https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css") }}

    <!-- Optional theme -->
    {{ HTML::style("https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css") }}

    <!-- Latest compiled and minified JavaScript -->
    {{ HTML::script("https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js") }}

    {{ HTML::style(asset("stylesheets/main.css")) }}
    {{ HTML::script(asset("scripts/main.js")) }}
    @yield('head')
</head>
<body>
    <div class="container">
        <div>
            {{ HTML::image(asset("images/pizzaman-sm.png"), "Pizzaz!", ['id' => 'pizza-img', 'class' => 'img-responsive']) }}
            <span id="pizza-pizza" style="display: none;">Pizza! Pizza!</span>
        </div>
        @if (Auth::check())
            @include('layouts.navbar_logged')
        @else
            @include('layouts.navbar')
        @endif
        <div class="panel panel-default">
            <div class="panel-body">
                @if (Session::has('flashes'))
                    @foreach (Session::get('flashes') as $type => $messages)
                        @foreach ($messages as $message)
                            <div class="alert alert-{{ $type }}">{{ $message }}</div>
                        @endforeach
                    @endforeach
                @endif
                @yield('content')
            </div>
            <div class="panel-footer">
                <?php $time = round(microtime(true) - $start, 2) ?>
                <div class="text-center{{ $time > 3 ? ' text-danger' : ($time > 0.1 ? ' text-warning' : '') }}">Page loaded in {{ $time }} seconds</div>
                <div class="text-center">&copy; 2014 Pizzaz ltd. All rights reserved</div>
            </div>
        </div>
    </div>
</body>
</html>