<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFSP-Provas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    @yield('assets')
</head>
<body>
<div class="container">
    @yield('main')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
