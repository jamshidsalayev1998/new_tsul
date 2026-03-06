<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hashtag extends Model
{
    protected $table = 'hashtags';

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

}
