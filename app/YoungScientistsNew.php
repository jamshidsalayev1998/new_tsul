<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a news item from the Young Scientists section.
 *
 * Stores news and announcements relevant to the university's young
 * scientists community. Content is managed through the admin panel
 * and stored in three languages.
 *
 * @property int    $id
 * @property string $title_uz    Article title in Uzbek
 * @property string $title_ru    Article title in Russian
 * @property string $title_en    Article title in English
 * @property string $content_uz  Article content in Uzbek (HTML)
 * @property string $content_ru  Article content in Russian (HTML)
 * @property string $content_en  Article content in English (HTML)
 * @property string $image       Path to the article image
 * @property string $date        Publication date (YYYY-MM-DD)
 * @property int    $status      1 = active/visible, 0 = inactive/hidden
 */
class YoungScientistsNew extends Model
{
    protected $table = 'young_scientists_news';
}
