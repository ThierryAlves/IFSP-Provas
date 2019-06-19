<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <title>IFSP-Provas</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Styles -->
    <style>

    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <!-- Login Form -->
                <form class="form-horizontal" method="POST" action="{{ url('/autenticar') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label for="login"></label><input type="text" id="login" class="fadeIn second" name="login" placeholder="login">
                    <label for="password"></label><input type="text" id="password" class="fadeIn third" name="login" placeholder="senha">
                    <input type="submit" class="fadeIn fourth" value="Conectar">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
