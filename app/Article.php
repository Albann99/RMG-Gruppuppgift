<?php

namespace App;

use Category;
use Booking;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = ['name', 'slug'];
	
    public function category() {
    	return $this->belongsTo(Category::class);
    }
    public function bookings() {
        return $this->hasMany(Booking::class);
    }
    public function user() {
        return $this->belongTo(User::class);
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
