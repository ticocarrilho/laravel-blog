<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(PostComments);
    }
}
