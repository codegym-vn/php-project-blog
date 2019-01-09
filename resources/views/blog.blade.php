@extends('welcome')
@section('content')

        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(90).jpg"
                         alt="First slide"></div>
                <div class="carousel-item" data-interval="2000">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(60).jpg"
                         alt="First slide"></div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
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
                <a href="{{route('admin.post.index')}}" class="btn btn-primary">Go Blog</a>
            </div>
            <div class="card-body">
                <a href="#" class="btn btn-success">Sign up</a>
            </div>
            <div class="card-footer text-muted">
                BY TEAM WFC
            </div>
            {{--<div class="d-flex flex-wrap-reverse">--}}
                {{--<div class="card" style="width: 18rem;">--}}
                    {{--<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(90).jpg"--}}
                         {{--alt="First slide">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title">Card title</h5>--}}
                        {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of--}}
                            {{--the card's content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    {{--</div>--}}

                {{--</div>--}}

                {{--<div class="card" style="width: 18rem;">--}}
                    {{--<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(90).jpg"--}}
                         {{--alt="First slide">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title">Card title</h5>--}}
                        {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk--}}
                            {{--of the card's content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="d-flex flex-row-reverse bd-highlight">--}}
                    {{--<div class="card" style="width: 18rem;">--}}
                        {{--<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(90).jpg"--}}
                             {{--alt="First slide">--}}
                        {{--<div class="card-body">--}}
                            {{--<h5 class="card-title">Card title</h5>--}}
                            {{--<p class="card-text">Some quick example text to build on the card title and make up the--}}
                                {{--bulk of the card's content.</p>--}}
                            {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>

    @endsection