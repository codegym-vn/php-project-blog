@extends('layouts.app')
@section('title')
    @endsection
@section('content')
    <div class="media">
        <img class="mr-3" src='{{'/upload/images/' . $posts->image}}'style="height: 130px; width:100px">
        <div class="media-body">
            <h5 class="mt-0">{{$posts->title}}</h5>
            <p>{{$posts->decs}}</p>
            <p>{{$posts->content}}</p>

        </div>
    </div>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
@endsection

