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
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h1 class="display-4">Welcome To The BLog!</h1>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="http://localhost:4200/post" class="btn btn-primary">Go Blog</a>
        </div>
        <div class="card-body">
<<<<<<< HEAD
            <a href="{{ route('admin.post.list') }}" class="btn btn-success">My Blog</a>
=======
            <a href="#" class="btn btn-success">My Blog</a>
>>>>>>> e2ffc4c7f199b8a45dcc1ab2f1784a8d7c9d273d
        </div>
        <div class="card-footer text-muted">
            BY TEAM WFC
        </div>

    </div>

@endsection
