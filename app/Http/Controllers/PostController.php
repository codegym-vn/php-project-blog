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
        $posts = Post::paginate(3);
        return view('admin.post.list', compact('posts'));
    }


    public function create()
    {
        return view('admin.post.create');
    }


    public function store(StoreBlogPost $request)
    {
        $posts = new Post();
        $posts->title = $request->input('title');
        $posts->decs = $request->input('decs');
        $posts->content = $request->input('content');
        $posts->id_user = $request->input('id_user');
        $posts->due_date = $request->input('due_date');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $posts->image = $path;
        }
        $posts->save();
        Session::flash('success', 'them moi thành công');
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
        $posts->decs = $request->input('decs');
        $posts->content = $request->input('content');
        $posts->id_user = $request->input('id_user');
        $posts->due_date = $request->input('due_date');
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
