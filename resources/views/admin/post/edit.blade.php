@extends('layouts.app')
@section('content')
    <div class="card-uper">
        <div class="card-header">
            <h1>EDIT POST</h1>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.post.update', $posts->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title" value="{{ $posts->title }}">
                </div>
                <div class="form-group">
                    <label>Summary:</label>
                    <input type="text" class="form-control" name="desc" value="{{ $posts->desc }}">
                </div>
                <label><h4>Content</h4></label>
                <textarea name="content" id="editor">
             <div class="form-group">
                <input name="content" class="form-control" type="text" value="{!!$posts->content!!}">
            </div>
        </textarea>

                <div class="form-group">
                    <input type="file" class="form-control-file" name="image" value="{{ $posts->images }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Cancel</a>

            </form>
        </div>
    </div>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                ckfinder: {
                    // eslint-disable-next-line max-len
                    uploadUrl: 'https://cksource.com/weuy2g4ryt278ywiue/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
                }
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
