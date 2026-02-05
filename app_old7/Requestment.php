<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestment extends Model
{
    protected $table = 'requestments';

    public function questions()
    {
        return $this->hasMany(RequestmentQuestion::class , 'requestment_id' , 'id')->orderBy('id' , 'ASC');
    }


}
