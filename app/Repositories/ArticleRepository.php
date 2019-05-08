<?php

namespace App\Repositories;

use App\Article;

class ArticleRepository extends BaseRepository
{
    public function __construct(Article $model){
        $this->model = $model;
    }

    public function getLastArticles(){
        return $this->latest()->limit(15)->get();
    }
}