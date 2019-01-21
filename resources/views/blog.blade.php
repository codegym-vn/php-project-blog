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

        <div class="card-footer text-muted">

        </div>
    </div>
@endsection

