<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Rating extends Model
{
	use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
    protected $table = 'ratings';

    protected $fillable = [
    	'name', 'description', 
    ];

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
