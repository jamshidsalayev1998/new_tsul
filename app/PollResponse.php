<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a single answer submitted by a respondent.
 *
 * Each row captures one answer to one question. For 'single' and 'multi'
 * type questions, option_id is populated. For 'text' type questions,
 * text_answer is populated instead. IP address is stored to allow
 * basic duplicate-submission detection (no strict prevention enforced).
 *
 * @property int         $id
 * @property int         $poll_id      Foreign key to the polls table
 * @property int         $question_id  Foreign key to the poll_questions table
 * @property int|null    $option_id    Foreign key to the poll_options table (null for text answers)
 * @property string|null $text_answer  Free-text answer (null for option-based questions)
 * @property string      $ip_address   Respondent's IP address at submission time
 */
class PollResponse extends Model
{
    protected $fillable = ['poll_id', 'question_id', 'option_id', 'text_answer', 'ip_address'];

    /**
     * Get the poll this response belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    /**
     * Get the question this response answers.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(PollQuestion::class, 'question_id');
    }

    /**
     * Get the selected option for this response (null for text-type questions).
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function option()
    {
        return $this->belongsTo(PollOption::class);
    }
}
