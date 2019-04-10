<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        $categories = Category::all();
        return view('admin.post.list', compact('posts', 'categories'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $request = $request->toArray();
        unset($request['_token']);
        $createPost = Post::insert($request);
        if ($createPost) {
            Session::flash("success", 'Tao moi thanh cong');
        } else {
            Session::flash("errors", 'Tao moi k thanh cong');
        }
        return redirect()->route('admin.post.list');
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
        $categories = Category::all();
        return view('admin.post.edit', compact('posts','categories'));
    }


    public function update(Request $request, $id)
    {
        $request = $request->toArray();
        unset($request['_token']);
        $editPost = Post::where('id', $id)->update($request);
        if ($editPost) {
            Session::flash('success', "Update thanh cong");
        } else {
            Session::flash('error', "Update khong thanh cong");
        }
        return redirect()->route('admin.post.list');
    }


    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        Session::flash('success', 'Xóa bài viết thành công');
        return redirect()->route('admin.post.index');
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
