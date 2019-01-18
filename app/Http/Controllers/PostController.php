<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreBlogPost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('admin.post.list', compact('posts'));
    }


    public function create()
    {
        return view('admin.post.create');
    }


    public function store(Request $request)
    {
        $posts = new Post();
        $posts->title = $request->input('title');
//        $posts->tag = $request->input('tag');
        $posts->desc = $request->input('desc');
        $posts->content = $request->input('content');
        $posts->id_user = $request->input('id_user');

        if ($request->hasFile('images')) {
            $files = [];
            foreach ($request->file('images') as $image) {
//                $image = $request->image;
                $path = $image->store('images', 'public');
                array_push($files, $path);
            }
            $posts->image = $files;

        }

        $posts->save();
        Session::flash('success', 'Tạo mới thành công');
        return redirect()->route('admin.post.index');
    }


    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('admin.post.show', compact('posts'));
    }


    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('admin.post.edit', compact('posts'));
    }


    public function update(Request $request, $id)
    {
        $posts = Post::findOrFail($id);
        $posts->title = $request->input('title');
        $posts->tags = $request->input('tags');
        $posts->desc = $request->input('desc');
        $posts->content = $request->input('content');
        $posts->id_user = $request->input('id_user');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $posts->image = $path;
        }
        $posts->save();
        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('admin.post.index');
    }


    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        Session::flash('success', 'Xóa khách hàng thành công');
        return redirect()->route('admin.post.index');
    }

    public function list()
    {
        $posts = new Post();
        return redirect()->route('admin.post.index', compact($posts));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('admin.post.index');
        }
        $posts = Post::where('title', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('admin.post.list', compact('posts'));
    }
}
