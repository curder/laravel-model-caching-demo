<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'body'
    ];
    
    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }

    public function cacheKey()
    {
        return sprintf(
            "%s:%s:%s",
            $this->getTable(),
            $this->getKey(),
            $this->updated_at->timestamp
        );
    }

    public function getCachedCommentsCountAttribute()
    {
        return \Cache::remember($this->cacheKey() . ':comments_count', 1, function () {
            return $this->comments->count();
        });
    }

    public function getCachedCommentsAttribute()
    {
        return \Cache::remember($this->cacheKey() . ':comments', 1, function () {
            return $this->comments;
        });
    }
}
