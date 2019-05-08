<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;

class ArticlesController extends Controller
{
    public $articleRepo;

    public function __construct(ArticleRepository $articleRepo){
        $this->articleRepo = $articleRepo;        
    }
    
    public function index() {
        $articles = $this->articleRepo->getLastArticles();
        
        return view('articles')->with('articles', $articles);
    }

    public function show($id){  
        $article = $this->articleRepo->find($id);

        return view('article')->with('article', $article);
    }
}
