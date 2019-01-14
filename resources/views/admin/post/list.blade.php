{{--@extends('layouts.app')--}}

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
                <h1>My Blog</h1>
                <div class="form-group">
                    <div class="d-flex flex-row-reverse bd-highlight">
                        <i class="icon ion-md-add"></i>
                        <a href="{{ route('admin.post.create') }}">
                            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                                <i class="material-icons">add</i>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <table class="col-12 table table-striped">
                        <thead style="background: #6cb2eb">
                        <tr class="text-center" style="font-size: 20px">
                            <td>Title</td>
                            <td>Decs</td>
                            <td>Due Date</td>
                            <td>Created</td>
                            <td>Image</td>
                            <td colspan="3">Action</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>{{$post->decs}}</td>
                                <td>{{$post->due_date}}</td>
                                <td>{{$post->created_at}}</td>
                                {{--<td>{!!$post->content!!}</td>--}}
                                <td><img src="{{asset('storage/'. $post->image)}}" style="height: 150px; width:130px">
                                </td>
                                <td><a href="{{ route('admin.post.show',$post->id)}}" class="btn btn-success">Show</a>
                                </td>

                                <td><a href="{{ route('admin.post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin.post.destroy',$post->id) }}" class="btn btn-danger"
                                       onclick="return confirm('Bạn có muốn xoá ? ')">Delete</a>
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
                    <div class="col-6">
                        <div class="pagination float-lg-right">{{$posts->links()}}</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
