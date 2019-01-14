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
<<<<<<< HEAD
            <img src="{{ asset('storage/'. $posts->image) }}" style="height: 500px; width:600px" class="rounded" alt="image blog">
=======
            <td><img src="{{asset('storage/'. $posts->image)}}" style="height: 500px; width:600px">
>>>>>>> e2ffc4c7f199b8a45dcc1ab2f1784a8d7c9d273d
        </div>
    </div>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
@endsection
