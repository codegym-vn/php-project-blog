{{--@extends('layouts.app')--}}

@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        <table class="table table-striped">
            <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Desc</td>
                <td>Content</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->desc}}</td>
                    <td>{{$blog->content}}</td>
                    <td><a href="{{ route('admin.post.edit',$blog->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form>
                            action="{{ route('admin.post.destroy', $blog->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a href="{{ route('admin.post.create') }}">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add Blog
                    </button>
                </a>
            </div>
        </div>
        <div>
@endsection
