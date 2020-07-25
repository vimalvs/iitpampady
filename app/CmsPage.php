<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CmsPage extends Model
{
    protected $table = "cms_page";
    protected $fillable = ['page', 'content'];
}
