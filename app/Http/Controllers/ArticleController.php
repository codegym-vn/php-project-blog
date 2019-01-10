<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return response()->json(['data' => $articles]);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        return response()->json([$article]);
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return response()->json([$article]);
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
}
