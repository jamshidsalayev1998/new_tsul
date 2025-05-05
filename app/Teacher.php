<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Teacher extends Model
{
    protected $table = 'teachers';
    public function kafedra(){
        return $this->belongsTo(Kafedra::class , 'kafedra_id' , 'id');
    }

    public function articles(){
        return $this->hasMany(Article::class , 'teacher_id' , 'id');
    }

    public function teacher_degree(){
        return $this->belongsTo(TeacherDegree::class , 'degree' , 'id');
    }
    public function teacher_academic_title(){
        return $this->belongsTo(AcademikTitle::class , 'academic_title' , 'id');
    }

}
