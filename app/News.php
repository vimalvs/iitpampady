<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $fillable = ['title', 'content', 'pdf_url', 'is_flash_news', 'flash_news_end_time'];
}
