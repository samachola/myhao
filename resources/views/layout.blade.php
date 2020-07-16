<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="header">
            <div class="logo title">MY HAO</div>

            <div class="nav">
                <a href="/">HOME</a>
                <a href="#">PROJECTS</a>
                @if (Auth::user())
                <a href="#">MY HAO</a>
                <a href="#">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    LOG OUT
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @else
                <a href="/login">SIGN IN</a>
                <a href="/register">REGISTER</a>
                @endif
            </div>
        </div>
        @yield ('content')
    </body>
</html>
