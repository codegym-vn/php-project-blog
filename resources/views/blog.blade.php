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
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra
                    attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger
                    container.</p>

                <a href="{{route('blog')}}" class="btn btn-outline-secondary">Get started</a>
                <a href="http://localhost:4200/post" class="btn btn-outline-success">Go BLog</a>
            </div>
        </div>
        @foreach($posts as $post)
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">{{$post->title}}</div>
                        <div class="card-body">
                            <h5 class="card-title">{{$post->desc}}</h5>
                            <p class="card-text">{!! $post->content !!}</p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Secondary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Success card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Danger card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Warning card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Info card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                            <div class="card bg-light mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body">
                                    <h5 class="card-title">Light card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                        of the card's content.</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="col-md-12" style="background: #1d68a7">
                        <div class="d-flex justify-content-around">
                            <div class="col-md-4">
                                <div>
                                    <div class="card-body">
                                        <h5>Giới Thiệu</h5>
                                        <a class="card-text">Về Blog</a>
                                <br>
                                <a class="card-text">Sản Phẩm về BLOG</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <div class="card-body">
                                <h5>Cộng Đồng</h5>
                                <a class="card-text">Fanpage</a>
                                <br>
                                <a class="card-text">Nhóm Tác Giả</a>
                                <br>
                                <a class="card-text">Blogger</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <div class="card-body">
                                <h5>Tài Nguyên</h5>
                                <a class="card-text">Blog</a>
                                <br>
                                <a class="card-text">Tạp chí BLOG</a>
                                <br>
                                <a class="card-text">Tạp chí PlayBoy</a>
                                <br>
                                <a class="card-text">BLog Codegym</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card text-center">
                <div class="card-footer text-muted">
                    BY TEAM WFC
                </div>
            </div>
@endsection

