<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a user-submitted question to the university.
 *
 * Stores questions sent through the public-facing "Ask a Question" form.
 * Used for tracking and responding to visitor inquiries.
 *
 * @property int         $id
 * @property string      $name     Questioner's name
 * @property string      $email    Questioner's email address
 * @property string      $question The question text
 * @property int         $status   Processing status (0 = new, 1 = answered)
 */
class Question extends Model
{
    protected $table = 'questions';
}
