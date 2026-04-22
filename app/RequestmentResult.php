<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a single vote/response submitted in a survey.
 *
 * Each row records one participant's answer to one question, identified
 * by their IP address. The IP is used for basic duplicate-submission
 * detection (no strict enforcement enforced at model level).
 *
 * @property int    $id
 * @property int    $requestment_id  Foreign key to the requestments table
 * @property int    $question_id     Foreign key to the requestment_questions table
 * @property int    $answer_id       Foreign key to the requestment_question_answers table
 * @property string $ip_address      Respondent's IP address at submission time
 */
class RequestmentResult extends Model
{
    protected $fillable = ['question_id', 'answer_id', 'ip_address', 'requestment_id'];

    /**
     * Get the answer option that was selected in this result.
     *
     * Uses a hasOne with a reversed key mapping (local key = answer_id,
     * foreign key = id on the answers table) to resolve the selected option.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function answer()
    {
        return $this->hasOne(RequestmentQuestionAnswer::class, 'id', 'answer_id');
    }
}
