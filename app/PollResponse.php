<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollResponse extends Model
{
    protected $fillable = ['poll_id', 'question_id', 'option_id', 'text_answer', 'ip_address'];

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    public function question()
    {
        return $this->belongsTo(PollQuestion::class, 'question_id');
    }

    public function option()
    {
        return $this->belongsTo(PollOption::class);
    }
}
