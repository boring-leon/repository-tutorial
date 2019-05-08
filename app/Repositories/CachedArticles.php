<?php

namespace App\Repositories;

use Illuminate\Contracts\Cache\Repository as Cache;
use App\Article;

class CachedArticles implements ArticleQueries
{   
    private $base;
    private $cache;

    public function __construct(ArticleQueries $base, Cache $cache){
        $this->cache = $cache;
        $this->base = $base;
    }

    public function getLastArticles(){
        return $this->cache->remember('last_articles', 
            config('cache.stores.file.last'),
            function(){
                return $this->base->getLastArticles();
            }
        );
    }
}