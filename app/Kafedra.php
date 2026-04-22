<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an academic department (kafedra).
 *
 * A kafedra is a sub-unit within a faculty that groups teachers by
 * their academic discipline. Each department has a head (KafedraAdmin)
 * and a set of teachers. Content is stored in three languages.
 *
 * @property int    $id
 * @property string $name_uz       Department name in Uzbek
 * @property string $name_ru       Department name in Russian
 * @property string $name_en       Department name in English
 * @property string $content_uz    Full description in Uzbek (HTML)
 * @property string $content_ru    Full description in Russian (HTML)
 * @property string $content_en    Full description in English (HTML)
 * @property string $short_info_uz Short summary in Uzbek
 * @property string $short_info_ru Short summary in Russian
 * @property string $short_info_en Short summary in English
 */
class Kafedra extends Model
{
    protected $table = 'kafedra';
}
