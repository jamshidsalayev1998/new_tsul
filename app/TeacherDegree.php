<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Model representing an academic degree classification for teachers.
 *
 * Degree records are lookup values used to classify teachers by their
 * highest earned academic degree (e.g., PhD, Doctor of Science, Master's).
 * Referenced by the Teacher model via the 'degree' foreign key field.
 *
 * @property int    $id
 * @property string $name_uz  Degree name in Uzbek (e.g., "Falsafa doktori (PhD)")
 * @property string $name_ru  Degree name in Russian
 * @property string $name_en  Degree name in English
 */
class TeacherDegree extends Model
{
    protected $table = 'teacher_degree';
}
