<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a featured/standalone news item displayed separately.
 *
 * Used to highlight individual news articles in a dedicated section
 * separate from the main news listing. The class name contains a typo
 * ("Seperately" instead of "Separately") preserved from the original schema.
 *
 * @property int    $id
 * @property string $title_uz    Featured item title in Uzbek
 * @property string $title_ru    Featured item title in Russian
 * @property string $title_en    Featured item title in English
 * @property string $content_uz  Content in Uzbek (HTML)
 * @property string $content_ru  Content in Russian (HTML)
 * @property string $content_en  Content in English (HTML)
 * @property string $image       Path to featured image
 * @property int    $status      1 = active/visible, 0 = inactive/hidden
 */
class SeperatelyOneNew extends Model
{
    // Note: table name "separately_one_new" contains original typo from schema
    protected $table = 'separately_one_new';
}
