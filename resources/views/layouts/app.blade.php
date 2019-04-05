<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('layout_admin/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('layout_admin/icon/css/all.min.css') }}">

    <!-- Custom fonts for this template -->
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ asset('magnific-popup/magnific-popup.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/freelancer.css') }}">

    <title>Document</title>
</head>
<body id="page-top">
@yield('content')

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('layout_admin/js/jquery-3.2.1.slim.js') }}"></script>
<script src="{{ asset('layout_admin/js/bootstrap.js') }}"></script>
<script src="{{ asset('layout_admin/js/popper.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{asset('jquery-easing/jquery.easing.js/jquery.easing.min.js')}}"></script>
<script src="{{asset('magnific-popup/jquery.magnific-popup.min.js')}}}"></script>

<script src="{{asset('js/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('js/contact_me.js')}}"></script>
<script src="{{asset('js/freelancer.min.js')}}"></script>
@yield('js')
</body>



</html>