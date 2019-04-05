<?php

namespace App\Http\Controllers;

use App\Catogory;
use App\Http\Requests\StoreBlogPost;
use App\Post;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        $catogories = Catogory::all();
        return view('admin.post.list', compact('posts', 'catogories'));
    }


    public function create()
    {
        $catogories = Catogory::all();
        return view('admin.post.create', compact('catogories'));
    }


    public function store(StoreBlogPost $request)
    {
        $posts = new Post();
        $posts->title = $request->input('title');
        $posts->desc = $request->input('desc');
        $posts->content = $request->input('content');
        $posts->user_id = $request->input('user_id');
        $posts->catogory_id = $request->input('catogory_id');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $posts->image = $path;
        }

        $posts->save();
        Session::flash('success', 'Tạo mới bài viết thành công');
        return redirect()->route('admin.post.index');
    }


    public
    function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('admin.post.show', compact('posts'));
    }


    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        $catogories = Catogory::all();
        return view('admin.post.edit', compact('posts','catogories'));
    }


    public function update(Request $request, $id)
    {
        $posts = Post::findOrFail($id);
        $posts->title = $request->input('title');
        $posts->desc = $request->input('desc');
        $posts->content = $request->input('content');
        $posts->user_id = $request->input('user_id');
        $posts->catogory_id = $request->input('catogory_id');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $posts->image = $path;
        }
        $posts->save();
        Session::flash('success', 'Cập nhật bài viết thành công');
        return redirect()->route('admin.post.index');
    }


    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        Session::flash('success', 'Xóa bài viết thành công');
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

    public function exportPDF($id)
    {
        $post = Post::find($id);
        $pdf = PDF::loadView('admin.post.detail', ['post' => $post]);
        return $pdf->download('admin.post.detail.pdf');
    }

    public function detail($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.post.detail', compact('post'));
    }

    public function view()
    {
        $posts = Post::all();
        return view('blog', compact('posts'));
    }
}
