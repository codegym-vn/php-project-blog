@extends('welcome')
@section('title', 'add new')
@section('content')
    <div class="col -12">
        <h2>CREATE POST</h2>
    </div>
    <form method="post" action="{{route('admin.post.store')}}" enctype="multipart/form-data" id='registration'>
        @csrf
        <div class="form-group">
            <label><h4>Title</h4></label>
            <input name="title" class="form-control" placeholder="title" id="text-title">
        </div>
        <div class="form-group">
            <label><h4>Summary</h4></label>
            <input name="desc" class="form-control" placeholder="summary" id="editor">
        </div>
        {{--<div class="form-group" id="editor">--}}
            {{--<label>Content</label>--}}
            {{--<textarea name="content" class="form-control" id="content"></textarea>--}}
            {{--<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>--}}
            {{--<script>--}}
                {{--CKEDITOR.replace('content');--}}
            {{--</script>--}}
        {{--</div>--}}
        <div class="form-group">
            <label for="exampleFormControlFile1">Avatar</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Tỉnh thành</label>
            <select class="form-control" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
<style>
    label {
        display: inline-block;
        width: 150px;
    }
    label.error {
        display: inline-block;
        color: red;
        width: 200px;
    }
</style>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<script>
 $(document).ready(function () {
     $('#registration').validate({
         onfocusout: false,
         onkeyup: false,
         onclick: false,
         rules: {
             title: {
                 required: true,
                 minLength: 2
             },
             desc: {
                 required: true,
                 minLength: 2
             },
             content: {
                 required: true,
                 minLength: 2
             },
         },
         messages: {
             "title": {
                 required: "bắt buộc nhập title",
                 minLength: "hãy nhập ít nhất 1 kí tự",
             },
             "desc": {
                 required: "bắt buộc nhập desc",
                 minLength: "hãy nhập ít nhất 1 kí tự",
             },
             "content": {
                 required: "bắt buộc nhập content",
                 minLength: "hãy nhập ít nhất 1 kí tự",
             }
         }

     });
 });
</script>