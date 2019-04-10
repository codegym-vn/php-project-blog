<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/form-create.css')}}">
    <script src="{{asset('js/jquery-3.3.1.js')}}">
    </script>
    <script
            src="{{asset('js/jquery.validate.js')}}"
    ></script>
</head>
<body>
<div class="container">
    <div class="col-md-12">
        @yield('content')
    </div>
</div>
<script src="{{asset('js/form-validate.js')}}"></script>
<script src="{{asset('js/edit-validate.js')}}"></script>
</body>
</html>
