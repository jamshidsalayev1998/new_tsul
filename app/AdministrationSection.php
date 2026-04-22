<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an administration member of a university section.
 *
 * Stores contact and biographical details for staff members within
 * a structural section. The foreign key column is named 'faculty_id'
 * in the database due to a legacy naming convention, despite logically
 * belonging to a section.
 *
 * @property int    $id
 * @property int    $faculty_id   Foreign key referencing the sections table (legacy column name)
 * @property string $full_name_uz Full name in Uzbek
 * @property string $full_name_ru Full name in Russian
 * @property string $full_name_en Full name in English
 * @property string $type_name_uz Position/role title in Uzbek
 * @property string $phone        Contact phone number
 * @property string $email        Contact email address
 * @property string $image        Path to profile photo
 */
class AdministrationSection extends Model
{
    protected $table = 'section_administration';
}
