<?php

namespace App\Http\Controllers;

use App\Article;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::latest()->limit(15)->get();
        
        return view('articles')->with('articles', $articles);
    }

    public function show(Article $article){  
        return view('article')->with('article', $article);
    }
}
