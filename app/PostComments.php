<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComments extends Model
{
    public function posts()
    {
        return $this->belongsTo(Posts);
    }
}
