<?php

namespace App;



use Category;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category() {
    	return $this->belongsTo(Category::class);
    }
}
