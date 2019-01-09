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
                <td>Decs</td>
                <td>Content</td>
                <td>Image</td>
                <td colspan="2">Action</td>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->decs}}</td>
                    <td>{!! $post->content !!}</td>
                    <td><img src="{{'/upload/images/' . $post->image}}" style="height: 130px; width:100px"></td>
                    <td><a href="{{ route('admin.post.show',$post->id)}}" class="btn btn-success">Show</a></td>

                    <td><a href="{{ route('admin.post.edit',$post->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <a href="{{ route('admin.post.destroy',$post->id) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <i class="icon ion-md-add"></i>
                <a href="{{ route('admin.post.create') }}">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                        <i class="material-icons">add</i>
                    </button>
                </a>
            </div>

        </div>
    </div>



@endsection
