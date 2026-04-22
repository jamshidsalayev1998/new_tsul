<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a single answer option for a poll question.
 *
 * Options belong to 'single' or 'multi' type questions. Each option
 * has multilingual text and a display order. Responses reference
 * options when a user selects them.
 *
 * @property int    $id
 * @property int    $question_id  Foreign key to the poll_questions table
 * @property string $text_uz      Option text in Uzbek
 * @property string $text_ru      Option text in Russian
 * @property string $text_en      Option text in English
 * @property int    $order        Display order within the question
 */
class PollOption extends Model
{
    protected $fillable = ['question_id', 'text_uz', 'text_ru', 'text_en', 'order'];

    /**
     * Get the question this option belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo(PollQuestion::class, 'question_id');
    }

    /**
     * Get all responses that selected this option.
     *
     * Used to calculate vote counts and percentages in result views.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responses()
    {
        return $this->hasMany(PollResponse::class);
    }
}
