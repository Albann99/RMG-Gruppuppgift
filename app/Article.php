<?php

namespace App;

<<<<<<< HEAD
=======
use Category;
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function category() {
    	return $this->belongsTo(Category::class);
    }
}
