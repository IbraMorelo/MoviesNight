<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'links';

    protected $fillable = [
    	'name',
    ];

    public function people()
    {
    	return $this->belongsToMany(Person::class, 'link_person');
    }

    public function posts()
    {
    	return $this->belongsToMany(Post::class, 'link_post');
    }
}
