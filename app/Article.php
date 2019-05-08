<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title' ,'body'];

    public function scopeLatest($query){
        return $query->orderBy('created_at', 'desc');
    }
}
