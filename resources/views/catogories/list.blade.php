@extends('layouts.app')
@section('title', 'Danh sách thể loại')

@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Thể Loại</h1>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Số bài viết</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @if(count($catogories) == 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($catogories as $key => $catogory)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $catogory->name }}</td>
                            <td>{{ count($catogory->posts) }}</td>
                            <td><a href="{{ route('catogories.edit', $catogory->id) }}">sửa</a></td>
                            <td><a href="{{ route('catogories.destroy', $catogory->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <a class="btn btn-primary" href="{{ route('catogories.create') }}">Thêm mới</a>
        </div>
    </div>
@endsection
