<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    public function groups(){
        return $this->hasMany(Group::class , 'course_id' , 'id');
    }

    public function get_faculties(){
        $faculties = Faculty::where('type_id' , $this->type_id)->get();
        return $faculties;
    }

}
