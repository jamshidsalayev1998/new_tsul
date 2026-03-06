<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestmentQuestion extends Model
{
    protected $table = 'requestment_questions';

    public function answers()
    {
        return $this->hasMany(RequestmentQuestionAnswer::class , 'question_id' , 'id')->orderBy('id' , 'ASC');
    }

    public function result()
    {
        return $this->hasMany(RequestmentResult::class, 'question_id', 'id');
    }

    public function result_answer_count($answer_id){
        return $this->hasMany(RequestmentResult::class, 'question_id', 'id')->where('answer_id' , $answer_id)->count();
    }

    public function result_count(){

    }
}
