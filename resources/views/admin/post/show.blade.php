@extends('layouts.app')
@section('content')
    <button type="button" class="close" aria-label="Close" onclick="window.history.go(-1); return false;">
        <span aria-hidden="true">&times; </span>
    </button>

    <div class="jumbotron">
        <p>{{$posts->id}}</p>
        <h1 class="display-4">{{$posts->title}}</h1>
        <p class="lead">{{$posts->decs}}</p>
        <hr class="my-4">
        <p>{!! $posts->content !!}</p>
        <div class="text-center">
            <img src="{{'/upload/images/' . $posts->image}}" class="rounded" alt="image blog" style="height: 200px; width:300px">
        </div>
    </div>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
@endsection