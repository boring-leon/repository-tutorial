<?php

namespace App\Repositories;

use App\Article;

class EloquentArticles implements ArticleQueries
{
    public function getLastArticles(){
        return Article::orderBy('created_at', 'desc')->limit(15)->get();
    }
}