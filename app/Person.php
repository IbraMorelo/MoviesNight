<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Person extends Model
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
    
    protected $table = 'people';

    protected $fillable = [
    	'name', 'born', 'biography', 'country', 'headshots',
    ];

    public function posts()
    {
    	return $this->belongsToMany(Post::class, 'person_post');
    }
}
