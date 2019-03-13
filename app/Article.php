<?php

namespace App;

use Category;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = ['name', 'slug'];
	
    public function category() {
    	return $this->belongsTo(Category::class);
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
