<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Transformers\ArticleTransformer;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::get();
        return response()->json($article, 200);
    }

    public function show($id)
    {
        $article = Article::find($id);
        return (new ArticleTransformer)->transformWithId($article);
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return response()->json($article, 201);
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
    }
}
