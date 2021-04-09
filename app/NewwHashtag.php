<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewwHashtag extends Model
{
    protected $table = 'news_hashtags';

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
