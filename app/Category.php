<?php

namespace App;

use Article;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name', 'slug'];
	public function category() {
    	return $this->hasMany(Article::class);
    }


	use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName() {
    	return 'slug';
    }
    
}
