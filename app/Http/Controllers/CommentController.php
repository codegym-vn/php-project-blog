<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
//    public function index()
//    {
//        $comments = Comment::all();
//        return view('admin.post.show', compact('comments'));
//
//    }


    public function store(Request $request, $id)
    {
        $comments = new Comment();
        $comments->body = $request->input('body');
        $comments->user_id = Auth::user()->id;
            $comments->post_id =  $id;
        $comments->save();

       return redirect()->route('admin.post.show', $id);

    }

}
