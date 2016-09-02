<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';

    protected $fillable = [
    	'path', 'type', 'server', 'post_id',
    ];

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
