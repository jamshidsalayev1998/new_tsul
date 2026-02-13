<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestmentResult extends Model
{
    protected $fillable = ['question_id', 'answer_id', 'ip_address', 'requestment_id'];

    public function answer(){
        return $this->hasOne(RequestmentQuestionAnswer::class, 'id', 'answer_id');
    }
}
