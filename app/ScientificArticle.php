<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a scientific article published by the university.
 *
 * Distinct from teacher-authored Article records, this model tracks
 * institutional scientific publications managed through the admin panel.
 * Content is stored in three languages.
 *
 * @property int    $id
 * @property string $title_uz     Article title in Uzbek
 * @property string $title_ru     Article title in Russian
 * @property string $title_en     Article title in English
 * @property string $content_uz   Article content/abstract in Uzbek (HTML)
 * @property string $content_ru   Article content/abstract in Russian (HTML)
 * @property string $content_en   Article content/abstract in English (HTML)
 * @property string $image        Path to article image or cover
 * @property int    $status       1 = active/visible, 0 = inactive/hidden
 */
class ScientificArticle extends Model
{
    protected $table = 'scientific_articles';
}
