@extends('welcome')
@section('title', 'add new')
@section('content')
    <div class="col -12">
        <h2>CREATE POST</h2>
    </div>
    <form method="post" action="{{route('admin.post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><h4>Title</h4></label>
            <input name="title" class="form-control" placeholder="title">
            @if($errors ->has('title'))
                <p class="help is-danger" style="color:red; ">{{$errors->first('title')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label><h4>Summary</h4></label>
            <input name="desc" class="form-control" placeholder="summary">
            @if($errors ->has('desc'))
                <p class="help is-danger" style="color:red; ">{{$errors->first('desc')}}</p>
            @endif
        </div>
        <label><h4>Content</h4></label>
        <textarea name="content" id="editor">
            <div class="form-group">
                <input name="content" class="form-control">
                @if($errors ->has('content'))
                    <p class="help is-danger" style="color:red; ">{{$errors->first('content')}}</p>
                @endif
            </div>
        </textarea>
        <div class="form-group">
            <label for="exampleFormControlFile1">Avatar</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
