<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleQueries;
use App\Article;

class ArticlesController extends Controller
{
    public $articleRepo;

    public function __construct(ArticleQueries $articleRepo){
        $this->articleRepo = $articleRepo;        
    }
    
    public function index() {
        $articles = $this->articleRepo->getLastArticles();
        
        return view('articles')->with('articles', $articles);
    }

    public function show(Article $article){  
        return view('article')->with('article', $article);
    }
}
