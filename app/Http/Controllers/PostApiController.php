<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index()
    {
        return Post::get();
    }

    public function store(Request $request) {
        $post = new Post();
        $post->title = $request->title;
        $post->decs = $request->decs;
        $post->image = $request->image;
        $post->content = $request->input('content');
        $post->save();
    }

    public function show($id) {
        return Post::findOrFail($id);
    }

    public function update(Request $request, $id) {
       $post = Post::findOrFail($id);
       $post->update($request->all());
       return $post;
    }

    public function destroy($id) {
        if($id != null) {
            $post = Post::findOrFail($id);
            $post->delete();
        }
    }
}
