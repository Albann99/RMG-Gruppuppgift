<?php

namespace App;

use Article;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public function category() {
    	return $this->hasMany(Article::class);
    }
}
