<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a scientific article authored by a teacher.
 *
 * Articles are associated with a specific teacher and represent
 * their academic publications. Content is stored in three languages.
 *
 * @property int    $id
 * @property int    $teacher_id  Foreign key to the teachers table
 * @property string $title_uz    Article title in Uzbek
 * @property string $title_ru    Article title in Russian
 * @property string $title_en    Article title in English
 * @property string $content_uz  Article content/abstract in Uzbek
 * @property string $content_ru  Article content/abstract in Russian
 * @property string $content_en  Article content/abstract in English
 */
class Article extends Model
{
    protected $table = 'articles';

    /**
     * Get the teacher who authored this article.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
