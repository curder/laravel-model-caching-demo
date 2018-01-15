<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    protected $touches = ['article'];

    public function article()
    {
        return $this->belongsTo(\App\Article::class);
    }
}
