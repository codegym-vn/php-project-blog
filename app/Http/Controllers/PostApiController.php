<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostApiController extends Controller
{

    public function index()
    {
        return Post::get();
    }


    public function store(Request $request)
    {
        $posts = new Post();
        $posts->title = $request->title;
        $posts->decs = $request->decs;
        $posts->content = $request->input('content');
        $posts->content = $request->input('image');
        $posts->save();
    }


    public function show($id)
    {
        return Post::find($id);
    }



    public function update(Request $request, $id)
    {
        $posts = Post::findOrFail($id);
        $posts->update($request->all());
        return $posts;
    }


    public function destroy($id)
    {
        $posts = Post::findOrFail($id);
        $posts->delete();
        return 204;

    }
}
