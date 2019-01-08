@extends('welcome')
@section('title', 'add new')
@section('content')
<div class="col -12">
    <h1></h1>
</div>
<form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Title</label>
        <input name="title" class="form-control" placeholder="title" >
        {{--@if($errors ->has('student_code'))--}}
            {{--<p class="help is-danger" style="color:red; ">{{$errors->first('student_code')}}</p>--}}
        {{--@endif--}}
    </div>
    <div class="form-group">
        <label>Decs</label>
        <input name="decs" class="form-control">
        {{--@if($errors ->has('name'))--}}
            {{--<p class="help is-danger" style="color:red; ">{{$errors->first('name')}}</p>--}}
        {{--@endif--}}
    </div>
    <div class="form-group">
        <label>Content</label>
        <textarea name="content" id="editor" class="form-control"></textarea>

        {{--@if($errors ->has('age'))--}}
            {{--<p class="help is-danger" style="color:red; ">{{$errors->first('age')}}</p>--}}
        {{--@endif--}}
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" class="form-control-file" name="image">

    </div>
    <div class="form-group">
        <label>id_user</label>
        <input name="id_user" class="form-control" placeholder="id_user">

    </div>
    <div id="editor">
        <p>This is some sample content.</p>
    </div>


    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
</form>
    @endsection