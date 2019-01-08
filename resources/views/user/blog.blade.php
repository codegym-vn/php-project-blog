@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">

        <form action="{{ url('user.blog') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

            <div class="form-group">
                <label for="blog" class="col-sm-3 control-label">Blog</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Blog
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
