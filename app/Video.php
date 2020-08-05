<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function posts()
    {
        return $this->morphedByMany('App\Post','taggable');
    }

    public function tags()
    {
        return $this->morphedByMany('App\Tag','taggable');
    }
}
