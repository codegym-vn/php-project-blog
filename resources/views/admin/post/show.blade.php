@extends('layouts.app')
@section('content')
    <button type="button" class="close" aria-label="Close" onclick="window.history.go(-1); return false;">
        <span aria-hidden="true">&times; </span>
    </button>

    <div class="jumbotron">
        <p class="display-4"><h1 style="color: navy">{{$posts->title}}</h1></p>
        <p class="lead">{{$posts->desc}}</p>
        <hr class="my-4">
        <p>{!! $posts->body !!}</p>
        <div class="text-center">
            <img src="{{ asset('storage/'. $posts->image) }}" style="height: 500px; width:600px" class="rounded"
                 alt="image blog">
        </div>
    </div>
    <form method="post" action="{{route('comment.store', $posts->id)}}">
        @csrf
        <article class="media">
            <figure class="media-left">
                <p class="image is-64x64">
                </p>
            </figure>
            <div class="media-content">
                <div class="field">
                    <p class="control">
                        <textarea class="textarea" placeholder="Add a comment..." name="body"></textarea>
                    </p>
                </div>
                <nav class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <button class="btn btn-success">Post comment</button>
                        </div>
                    </div>
                </nav>
            </div>
        </article>
    </form>
    @foreach($posts->comments as $comment)
        <article class="media">
            <figure class="media-left">
                <p class="image is-64x64">
                    <img src="https://bulma.io/images/placeholders/128x128.png">
                </p>
            </figure>
            <div class="media-content">
                {{--@foreach($users->$comment as $user)--}}
                {{--{{$user->name}}--}}
                {{--@endforeach--}}

                <div class="content">
                    <p>
                        <strong>admin</strong>
                        <br>
                        {{$comment->body}}
                        <br>
                        <small><a>Like</a> · <a>Reply</a> · 3 hrs</small>
                    </p>
                </div>


                <article class="media">
                    <figure class="media-left">
                        <p class="image is-48x48">
                            <img src="https://bulma.io/images/placeholders/96x96.png">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>admin </strong>
                                <br>
                                Sed convallis scelerisque mauris, non pulvinar nunc mattis vel. Maecenas varius felis
                                sit amet magna vestibulum euismod malesuada cursus libero. Vestibulum ante ipsum primis
                                in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus lacinia non nisl id
                                feugiat.
                                <br>
                                <small><a>Like</a> · <a>Reply</a> · 2 hrs</small>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </article>
    @endforeach
    <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Back</a>
@endsection
