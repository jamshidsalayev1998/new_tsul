<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Ustav extends Model
{
    protected $table = 'ustav';
    public function scopeActive($query){
        $query->where('status' , 1);
    }
}
