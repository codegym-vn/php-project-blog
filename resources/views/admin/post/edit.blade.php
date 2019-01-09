@extends('layouts.app')
@section('content')
    <div class="card-uper">
        <div class="card-header">
            Edit Blog</div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.post.update', $posts->id) }}">
                @csrf
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title" value="{{ $posts->title }}" >
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" class="form-control" name="decs" value="{{ $posts->decs }}" >
                </div>
                {{--<div class="form-group">--}}
                    {{--<label>Image:</label>--}}
                    {{--<input type="text" class="form-control" name="image" value="{{ $book->image }}" >--}}
                {{--</div>--}}
                <div class="form-group">
                    <label>Content:</label>
                    <input type="text" class="form-control" name="content" value="{{ $posts->content }}" >
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
