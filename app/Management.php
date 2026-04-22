<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a university management/leadership profile.
 *
 * Stores information about top-level university management staff
 * (e.g., vice-rectors, directors). Content is stored in three languages.
 *
 * @property int    $id
 * @property string $full_name_uz    Full name in Uzbek
 * @property string $full_name_ru    Full name in Russian
 * @property string $full_name_en    Full name in English
 * @property string $position_uz     Position/title in Uzbek
 * @property string $position_ru     Position/title in Russian
 * @property string $position_en     Position/title in English
 * @property string $image           Path to profile photo
 * @property string $phone           Contact phone number
 * @property string $email           Contact email address
 */
class Management extends Model
{
    protected $table = 'managements';
}
