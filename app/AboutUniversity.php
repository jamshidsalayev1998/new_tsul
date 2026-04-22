<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing the "About the University" informational page content.
 *
 * Stores multilingual static content describing the university's history,
 * mission, and general information. Typically only one record is used
 * (fetched via ::first()) rather than multiple entries.
 *
 * @property int    $id
 * @property string $content_uz  Page content in Uzbek (HTML)
 * @property string $content_ru  Page content in Russian (HTML)
 * @property string $content_en  Page content in English (HTML)
 */
class AboutUniversity extends Model
{
    protected $table = 'about_university';
}
