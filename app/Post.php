<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected $table = 'posts';

    protected $fillable = [
    	'title', 'released', 'synopsis', 'number', 'language', 'runtime', 'type', 'country', 'post_parent', 'rating_id', 'user_id',
    ];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function labels()
    {
    	return $this->belongsToMany(Label::class, 'label_post');
    }

    public function links()
    {
    	return $this->belongsToMany(Link::class, 'link_post');
    }

    public function people()
    {
    	return $this->belongsToMany(Person::class, 'person_post');
    }

    public function rating()
    {
    	return $this->belongsTo(Rating::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
