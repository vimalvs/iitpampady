<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    protected $table = "gallery_image";
    protected $fillable = ['gallery_id', 'image_pathname'];

    public function gallery() {
    	return $this->belongsTo(Gallery::class);
    }
}
