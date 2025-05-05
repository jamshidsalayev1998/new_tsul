<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewwType extends Model
{
    protected $table = 'news_types';

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    public function scopeIsset($query)
    {
        return $query->where('is_deleted', 0);
    }

}
