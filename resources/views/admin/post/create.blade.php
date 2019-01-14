@extends('welcome')
@section('title', 'add new')
@section('content')
    <div class="col -12">
        <h1>CREATE POST</h1>
    </div>
    <form method="post" action="{{route('admin.post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input name="title" class="form-control" placeholder="title">
            @if($errors ->has('title'))
                <p class="help is-danger" style="color:red; ">{{$errors->first('title')}}</p>
            @endif
        </div>
        <div class="form-group">
            <label>Summary</label>
            <input name="decs" class="form-control" placeholder="summary">
            @if($errors ->has('decs'))
                <p class="help is-danger" style="color:red; ">{{$errors->first('decs')}}</p>
            @endif
        </div>

        <label>Content</label>
        <textarea name="content" id="editor">
            <div class="form-group">
                <input name="content" class="form-control">
                @if($errors ->has('content'))
                    <p class="help is-danger" style="color:red; ">{{$errors->first('content')}}</p>
                @endif
            </div>
        </textarea>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
