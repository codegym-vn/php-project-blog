@extends('welcome')
@section('title', 'blogger')
<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <img src="/docs/4.2/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            <a href="#">BLog</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tất cả các bài đăng</li>
    </ol>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Xem blog</a>

    <button type="button" class="btn btn-secondary">Baì đăng mới</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

    </div>
</nav>
<ul>
    <li><a class="active" href="#home">Bài Đăng</a></li>
    <li><a href="#news"></a></li>
    <li><a href="#contact"></a></li>
    <li><a href="#about"></a></li>
</ul>