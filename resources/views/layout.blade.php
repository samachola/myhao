<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ secure_asset('css/style.css')}}">
        <script src="https://use.fontawesome.com/1a0acd2580.js"></script>
    </head>
    <body>
        <div class="header">
            <div class="logo title">MY HAO</div>

            <div class="nav">
                <a href="/">HOME</a>
                <a href="/projects">PROJECTS</a>
                <a href="#">MARKETPLACE</a>
                @if (Auth::user())
                <a href="/projects/myhao">MY HAO</a>
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
