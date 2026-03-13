<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollOption extends Model
{
    protected $fillable = ['question_id', 'text_uz', 'text_ru', 'text_en', 'order'];

    public function question()
    {
        return $this->belongsTo(PollQuestion::class, 'question_id');
    }

    public function responses()
    {
        return $this->hasMany(PollResponse::class);
    }
}
