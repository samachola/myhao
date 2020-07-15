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
                <a href="#">HOME</a>
                <a href="#">PROJECTS</a>
                <a href="#">MY HAO</a>
                <a href="#">SIGN IN</a>
            </div>
        </div>
        @yield ('content')
    </body>
</html>
