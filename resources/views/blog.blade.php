@extends('layouts.app')
@section('content')
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(67).jpg"
                     alt="First slide"></div>
            <div class="carousel-item" data-interval="2000">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
                     alt="First slide"></div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg"
                     alt="First slide"></div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="card text-center">
        <div class="card-body">
            <h1 class="display-4">Welcome To The Best BLog!</h1>

            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>

                <a href="{{route('home')}}" class="btn btn-outline-secondary">Get started</a>
                <a href="http://localhost:4200/post" class="btn btn-outline-success">Go BLog</a>
            </div>
        </div>

        <div class="card-footer text-muted">
                <div class="wrapper">
                    <div class="b"><a href="#">
                            <img src="https://www.brandsupply.com/upload/project_files/ec456bac5ab514f7f089178b619788de.jpg" >
                        </a></div>
                    <div class="b"><h2>GIỚI THIỆU</h2>
                        <p class="b">Blog</p>
                        <p class="b">Các bài blog khác</p>
                        <p class="b">Gửi liên hệ</p>
                    </div>
                    <div class="b">
                        <h2>HỎI ĐÁP</h2>
                        <p class="b">Về Blog</p>
                    </div>
                    <div class="b"><h2>LIÊN KẾT</h2>
                        <p class="b">HanoiSrum</p>
                        <p class="b">Tạp trí blog lập trình</p>
                    </div>
                </div>
        </div>
    </div>
@endsection

