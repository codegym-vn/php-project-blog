@extends('welcome')
@section('content')
    <div class="card-uper">
        <div class="card-header">
            Edit Blog
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.post.update', $posts->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title" value="{{ $posts->title }}">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" class="form-control" name="decs" value="{{ $posts->decs }}">
                </div>
                <textarea name="content" id="editor">
                <div class="form-group">
                    <label>Content:</label>
                    <input type="text" class="form-control" name="content" value="{!! $posts->content !!}    ">
                </div>
                </textarea>
                <div class="form-group">
                    @if ("/upload/images/{{ $posts->images }}")
                        <img src="{{ $posts->images }}">
                    @else
                        <p>No image found</p>
                    @endif
                    image <input type="file" name="image" value="{{ $posts->images }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>

            </form>
        </div>
    </div>
@endsection
