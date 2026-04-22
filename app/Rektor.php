<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing the university Rector's profile.
 *
 * Stores biographical, contact, and descriptive information about the
 * university rector for display on the public website. Typically only
 * one active record exists.
 *
 * @property int    $id
 * @property string $full_name_uz    Rector's full name in Uzbek
 * @property string $full_name_ru    Rector's full name in Russian
 * @property string $full_name_en    Rector's full name in English
 * @property string $position_uz     Official title/position in Uzbek
 * @property string $position_ru     Official title/position in Russian
 * @property string $position_en     Official title/position in English
 * @property string $content_uz      Full biography in Uzbek (HTML)
 * @property string $content_ru      Full biography in Russian (HTML)
 * @property string $content_en      Full biography in English (HTML)
 * @property string $image           Path to rector's profile photo
 * @property string $phone           Contact phone number
 * @property string $email           Contact email address
 */
class Rektor extends Model
{
    protected $table = 'rektor';
}
