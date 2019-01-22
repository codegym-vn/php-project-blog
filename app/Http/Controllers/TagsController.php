<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tag;
use App\Post;

class TagsController extends Controller
{
    public function store(Request $request, $id)
    {
        $tag = new Tag();
        $tag->name = $request->input('name');
        $tag->user_id = Auth::user()->id;
        $tag->tag_id = $id;
        $tag->post_id = $id;
        $tag->save();
    }

    public function show($id)
    {
        $tags = Tag::findOrFail($id);

        return view('admin.post.listByTag', compact('tags'));
    }
    protected function filter(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return view('admin.post.listByTag');
        }
        $tags = Tag::where('name', 'LIKE', '%' . $keyword . '%')->paginate(3);
        return view('admin.post.listByTag', compact('tags'));
    }
}
