@extends('welcome')
@section('title', 'add new')
@section('content')
    <div class="col -12">
        <h1></h1>
    </div>
    <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>id_user</label>
            <input name="id_user" class="form-control" placeholder="id_user">
        </div>
        <div class="form-group">
            <label>Title</label>

            <input name="title" class="form-control" placeholder="title">
            @if($errors ->has('title'))
                <p class="help is-danger" style="color:red; ">{{$errors->first('title')}}</p>
            @endif
        </div>
        <div id="editor">
            <div class="form-group">
                <label>Decs</label>
                <div id="editor">
                    <input name="decs" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label>Content</label>
                <input name="content" class="form-control">

                @if($errors ->has('content'))
                    <p class="help is-danger" style="color:red; ">{{$errors->first('content')}}</p>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image</label>
            <input type="file" class="form-control-file" name="image">

        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
        <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
    </form>
@endsection