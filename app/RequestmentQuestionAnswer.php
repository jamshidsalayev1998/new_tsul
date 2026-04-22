<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a predefined answer option for a survey question.
 *
 * Answer options are presented to users when they participate in a survey.
 * Each answer is linked to a specific question and stores multilingual text.
 *
 * @property int    $id
 * @property int    $question_id  Foreign key to the requestment_questions table
 * @property string $text_uz      Answer option text in Uzbek
 * @property string $text_ru      Answer option text in Russian
 * @property string $text_en      Answer option text in English
 */
class RequestmentQuestionAnswer extends Model
{
    protected $table = 'requestment_question_answers';
}
