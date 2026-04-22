<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a scientific publication (ilmiy nashr = scientific publication).
 *
 * Stores records of academic journals, books, and other publications
 * issued by the university or its affiliated researchers.
 * Content is stored in three languages.
 *
 * @property int    $id
 * @property string $title_uz    Publication title in Uzbek
 * @property string $title_ru    Publication title in Russian
 * @property string $title_en    Publication title in English
 * @property string $content_uz  Publication description/abstract in Uzbek
 * @property string $content_ru  Publication description/abstract in Russian
 * @property string $content_en  Publication description/abstract in English
 * @property string $image       Path to the publication cover image
 */
class IlmiyNashr extends Model
{
    protected $table = 'ilmiy_nashrlar';
}
