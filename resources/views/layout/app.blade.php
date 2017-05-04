<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cozquette</title>

        <!-- Homepage Style -->
        <link href="/css/main.css" rel="stylesheet">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">

        <!-- Bootstrap Style -->
        <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>

    <body>

    <div class="container-fluid">
          <nav class="navigation">
            <div class="navigation-left">
                <img src="{{ url('img/logo-main.svg') }}" alt="" class="navigation-logo">
            </div>
            <div class="navigation-right">
                <div class="menu">
                     <a href="" class="menu-list">panduan</a>
                     <a href="" class="menu-list">tema bouquet</a>
                     <a href="" class="menu-list">custom now</a>
                     <a href="" class="login">login</a>
                 </div> 
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif
            </div>
        </nav>  
    </div>
            
    </body>
</html>
