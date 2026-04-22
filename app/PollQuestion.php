<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a single question within a poll.
 *
 * Supports three question types:
 * - 'single': respondent selects one option
 * - 'multi': respondent selects multiple options
 * - 'text': respondent provides a free-text answer
 *
 * Questions are ordered within their poll via the 'order' field.
 *
 * @property int    $id
 * @property int    $poll_id   Foreign key to the polls table
 * @property string $text_uz   Question text in Uzbek
 * @property string $text_ru   Question text in Russian
 * @property string $text_en   Question text in English
 * @property string $type      Question type: 'single', 'multi', or 'text'
 * @property int    $order     Display order within the poll
 */
class PollQuestion extends Model
{
    protected $fillable = ['poll_id', 'text_uz', 'text_ru', 'text_en', 'type', 'order'];

    /**
     * Get the poll this question belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    /**
     * Get all answer options for this question, ordered by display order.
     *
     * Options are only relevant for 'single' and 'multi' type questions.
     * Text-type questions have no options.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany(PollOption::class, 'question_id')->orderBy('order');
    }

    /**
     * Get all responses submitted for this question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responses()
    {
        return $this->hasMany(PollResponse::class, 'question_id');
    }
}
