<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    public function teacher(){
        return $this->belongsTo(Teacher::class , 'teacher_id' , 'id');
    }

}
