<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a member of the Rektorat (university administration council).
 *
 * The Rektorat consists of vice-rectors and other senior administrative
 * officials. Each member has a profile with biographical and contact
 * information stored in three languages.
 *
 * @property int    $id
 * @property string $full_name_uz    Full name in Uzbek
 * @property string $full_name_ru    Full name in Russian
 * @property string $full_name_en    Full name in English
 * @property string $position_uz     Official position in Uzbek
 * @property string $position_ru     Official position in Russian
 * @property string $position_en     Official position in English
 * @property string $content_uz      Biography in Uzbek (HTML)
 * @property string $content_ru      Biography in Russian (HTML)
 * @property string $content_en      Biography in English (HTML)
 * @property string $image           Path to profile photo
 * @property string $phone           Contact phone number
 * @property string $email           Contact email address
 */
class Rektorat extends Model
{
    protected $table = 'rektorat';
}
