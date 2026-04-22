<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a single question within a survey (requestment).
 *
 * Each question has multiple predefined answer options. Results are
 * tracked via RequestmentResult records that link to a specific answer.
 *
 * @property int    $id
 * @property int    $requestment_id  Foreign key to the requestments table
 * @property string $text_uz         Question text in Uzbek
 * @property string $text_ru         Question text in Russian
 * @property string $text_en         Question text in English
 */
class RequestmentQuestion extends Model
{
    protected $table = 'requestment_questions';

    /**
     * Get all answer options for this question, ordered by ID ascending.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(RequestmentQuestionAnswer::class, 'question_id', 'id')->orderBy('id', 'ASC');
    }

    /**
     * Get all submitted results (votes) for this question.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function result()
    {
        return $this->hasMany(RequestmentResult::class, 'question_id', 'id');
    }

    /**
     * Count how many times a specific answer option was chosen for this question.
     *
     * Used when rendering survey result pages to show vote counts per option
     * without loading all result records into memory.
     *
     * @param int $answer_id The ID of the answer option to count votes for
     * @return int Number of results that selected the given answer
     */
    public function result_answer_count($answer_id)
    {
        return $this->hasMany(RequestmentResult::class, 'question_id', 'id')->where('answer_id', $answer_id)->count();
    }

    /**
     * Placeholder for total result count aggregation (not yet implemented).
     *
     * @return void
     */
    public function result_count()
    {
    }
}
