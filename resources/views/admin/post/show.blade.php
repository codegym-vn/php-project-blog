@extends('layouts.app')
@section('content')
    <button type="button" class="close" aria-label="Close" onclick="window.history.go(-1); return false;">
        <span aria-hidden="true">&times; </span>
    </button>

    <div class="jumbotron">
        <p class="display-4">
            <div class=" row col-12">
                <div class="col-9 ">
                    <h1 style="color: navy">
                        {{$posts->title}}
                    </h1>
                    {{$posts->created_at}}
                </div>
                @foreach($posts->image as $image)
                    @if ("/storage{{ $posts->images }}")
                        <img src="{{ $posts->images }}">
        @else
            <p>No image found</p>
        @endif
        <div class="float-right col-3">
            <img src="{{ asset('storage/'. $image) }}" style="height: 140px; width:200px" class="rounded"
                 alt="image blog">
        </div>
        @endforeach
    </div>
    <hr class="my-4">
    <p>{{$posts->desc}}</p>
    <p>{!! $posts->content !!}}</p>
    <p>{!! $posts->body !!}</p>


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
                <p class="image is-32x32">
                    <img src="https://bulma.io/images/placeholders/32x32.png">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>admin</strong>
                        <br>
                        {{$comment->body}}
                        <br>
                        <small><a>Like</a> · <a>Reply</a> · 3 hrs</small>
                    </p>
                </div>

            </div>
        </article>
    @endforeach
    <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Back</a>
@endsection
