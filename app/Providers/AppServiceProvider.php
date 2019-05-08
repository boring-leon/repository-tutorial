<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Repositories\ArticleQueries;
use App\Repositories\CachedArticles;
use App\Repositories\EloquentArticles;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ArticleQueries::class, CachedArticles::class);

        $this->app->when(CachedArticles::class)->needs(ArticleQueries::class)->give(EloquentArticles::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
