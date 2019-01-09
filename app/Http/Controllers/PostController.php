<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        return view('admin.post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new Post();
        $posts->title = $request->input('title');
        $posts->decs = $request->input('decs');
        $posts->content = $request->input('content');
        $posts->id_user = $request->input('id_user');
        if($request->hasFile('image')) {
            if($request->file('image')->isValid()) {
                $image = $request->image;
                $clientName = $image->getClientOriginalName();
                $path = $image->move(public_path('upload/images'), $clientName);
                $posts->image = $clientName;
            }
        }
        $posts->save();

        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('admin.post.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::findOrFail($id);
        return view('admin.post.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Post::findOrFail($id);
        $posts->title = $request->input('title');
        $posts->decs = $request->input('decs');
        $posts->content = $request->input('content');
        $posts->id_user = $request->input('id_user');
        if ($request->hasFile('image')) {
            $currentImg = $posts->image;
            if ($currentImg) {
                Storage::delete('upload/images', $currentImg);
            }
            $image = $request->image;
            $clientName = $image->getClientOriginalName();
            $path = $image->move(public_path('upload/images'), $clientName);
            $posts->image = $clientName;
        }
        $posts->save();

        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();

        return redirect()->route('admin.post.index');
    }
}
