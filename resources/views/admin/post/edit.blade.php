@extends('welcome')
@section('title', 'Update')
@section('content')
    <div class="card-uper">
        <div class="card-header">
            <h1>EDIT POST</h1>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.post.update', $posts->id) }}" enctype="multipart/form-data"
                  id='edit-registration'>
                @csrf
                <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title" value="{{ $posts->title }}" id="txt_title">
                </div>
                <div class="form-group">
                    <label>Summary:</label>
                    <input type="text" class="form-control" name="desc" value="{{ $posts->desc }}" id="desc_txt">
                </div>
                <label><h4>Content</h4></label>
                <textarea name="content" id="editor">
                    <div class="form-group">
                       <input name="content" class="form-control" type="text" value="{!!$posts->content!!}"
                              id="content_txt">
                    </div>
               </textarea>
                <div class="form-group">
                    <label>Thể loại</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option
                                    @if($posts->category_id == $category->id)
                                    {{"selected"}}
                                    @endif
                                    value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('admin.post.index')}}" class="btn btn-secondary">Cancel</a>

            </form>
        </div>
    </div>
    {{--<script>--}}
        {{--ClassicEditor--}}
            {{--.create(document.querySelector('#editor'), {--}}
                {{--ckfinder: {--}}
                    {{--// eslint-disable-next-line max-len--}}
                    {{--uploadUrl: 'https://cksource.com/weuy2g4ryt278ywiue/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'--}}
                {{--}--}}
            {{--})--}}
            {{--.catch(error => {--}}
                {{--console.error(error);--}}
            {{--});--}}
    {{--</script>--}}
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--$("#edit-registration").submit(function (i) {--}}
            {{--i.preventDefault();--}}
            {{--var txt_title = $('#txt_title').val();--}}
            {{--var desc_txt = $('#desc_txt').val();--}}
            {{--var content_txt = $('#content_txt').val();--}}

            {{--$(".error").remove();--}}
            {{--if(txt_title.length < 1) {--}}
                {{--$('#txt_title').after('<span class="error">This field is required</span>');--}}
            {{--}--}}
            {{--if(desc_txt.length < 1) {--}}
                {{--$("#desc_txt").after('<span class="error">This field is required</span>')--}}
            {{--}--}}
            {{--if(content_txt.length < 1) {--}}
                {{--$('#content_txt').after('<span class="error">This field is required</span>')--}}
            {{--}--}}
        {{--});--}}

    {{--});--}}
{{--</script>--}}