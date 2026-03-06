<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';
    public function faculty(){
        return $this->belongsTo(Faculty::class , 'faculty_id' , 'id');
    }

}
