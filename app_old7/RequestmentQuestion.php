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
}
