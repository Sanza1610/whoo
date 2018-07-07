<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_News extends Model
{
    protected $table = 'category_news';
    protected $guarded = [];
    public $timestamps = false;

    public function news()
    {
        return $this->belongsTo('App\Models\News', 'news_id');
    }

}
