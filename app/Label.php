<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Label extends Model
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

    protected $table = 'labels';

    protected $fillable = [
    	'name', 'type',
    ];

    public function posts()
    {
    	return $this->belongsToMany(Post::class, 'label_post');
    }
}
