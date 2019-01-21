@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
    </style>
    <div class="uper">
        <div class="container">
            <div class="col-12">
                <h1>List Post</h1>
                @if(Session::has('success'))
                    <h5 class="text-primary">{{ Session::get('success')}}</h5>
                @endif

                @if(isset($message))
                    <h5 class="text-primary">{{ $message }}</h5>
                @endif
                <div class="form-group sticky-top">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <i class="icon ion-md-add"></i>
                        <a href="{{ route('admin.post.create') }}">
                            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                                <i class="material-icons">add</i>
                            </button>
                        </a>
                    </div>
                </div>
                @foreach( $tags as $tag)
                    <div class="row">
                        <table class="col-12 table table-striped">
                            <thead style="background: #6cb2eb">
                            <tr class="text-center" style="font-size: 20px">
                                <td>Title</td>
                                <td>Summary</td>
                                <td>Created</td>
                                <td>Avatar</td>
                                <td colspan="4">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->desc}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>
                                        <img src="{{asset('storage/'. $post->image[0])}}"
                                             style="height: 150px; width:130px">
                                    </td>
                                    <td><a href="{{ route('admin.post.show',$post->id)}}"
                                           class="btn btn-success">Show</a>
                                    </td>

                                    <td><a href="{{ route('admin.post.edit',$post->id)}}"
                                           class="btn btn-primary">Edit</a>
                                    </td>
                                    <td><a href="{{route('post.exportPDF', $post->id)}}"
                                           class="btn btn-warning">Export</a>
                                    <td>
                                        <a href="{{ route('admin.post.destroy',$post->id) }}" class="btn btn-danger"
                                           onclick="return confirm('Bạn có muốn xoá ? ')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection
