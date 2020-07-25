<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "gallery";
    protected $fillable = ['title', 'thumbnail'];
    
    public function photos() {
		return $this->hasMany(GalleryImage::class);
	}
}

