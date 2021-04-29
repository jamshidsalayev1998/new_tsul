<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table = 'centers';
//    protected $course_id;
//    public function get_groups($course_id){
//        $groups = Group::where('faculty_id' , $this->id)->where('course_id' , $course_id)->get();
//        return $groups;
//    }
//
    public function administrations(){
        return $this->hasMany(AdministrationCenter::class , 'center_id');
    }


}
