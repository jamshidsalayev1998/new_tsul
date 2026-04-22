<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an academic title (e.g., Professor, Associate Professor, Docent).
 *
 * Academic titles are lookup values referenced by the Teacher model
 * via the 'academic_title' field. Content is stored in three languages.
 *
 * @property int    $id
 * @property string $name_uz  Title name in Uzbek
 * @property string $name_ru  Title name in Russian
 * @property string $name_en  Title name in English
 */
class AcademikTitle extends Model
{
    protected $table = 'academic_titles';
}
