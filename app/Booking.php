<?php

namespace App;

use Article;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function article() {
    	return $this->belongsTo(Article::class);
    }
}
