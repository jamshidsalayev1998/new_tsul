<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollQuestion extends Model
{
    protected $fillable = ['poll_id', 'text_uz', 'text_ru', 'text_en', 'type', 'order'];

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    public function options()
    {
        return $this->hasMany(PollOption::class, 'question_id')->orderBy('order');
    }

    public function responses()
    {
        return $this->hasMany(PollResponse::class, 'question_id');
    }
}
