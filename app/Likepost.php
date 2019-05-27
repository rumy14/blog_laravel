<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likepost extends Model
{
    protected $table = 'likepost';

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
