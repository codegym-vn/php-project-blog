@extends('welcome')
@section('title', 'blogger')
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Xem blog</a>

    <button type="button" class="btn btn-secondary">Bài đăng mới</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">


    </div>
</nav>
<ul>
    <li><a class="active" href="#home">Bài Đăng</a></li>
    <li><a href="#news"></a></li>
    <li><a href="#contact"></a></li>
    <li><a href="#about"></a></li>
</ul>
@endsection