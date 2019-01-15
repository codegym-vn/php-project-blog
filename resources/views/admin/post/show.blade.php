@extends('layouts.app')
@section('content')
    <button type="button" class="close" aria-label="Close" onclick="window.history.go(-1); return false;">
        <span aria-hidden="true">&times; </span>
    </button>

    <div class="jumbotron">
        <p class="display-4"><h1 style="color: navy">{{$posts->id}} : {{$posts->title}}</h1></p>
        <p class="lead">{{$posts->desc}}</p>
        <hr class="my-4">
        <p>{!! $posts->content !!}</p>
        <div class="text-center">
            <img src="{{ asset('storage/'. $posts->image) }}" style="height: 500px; width:600px" class="rounded"
                 alt="image blog">
        </div>
    </div>
    <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Cancel</a>
@endsection
