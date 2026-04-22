<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an administration member of a university center.
 *
 * Stores contact details, biographical information, and professional
 * background for staff members managing a specific center. Records
 * are linked to a center via the center_id foreign key.
 *
 * @property int    $id
 * @property int    $center_id               Foreign key to the centers table
 * @property string $full_name_uz            Staff member's full name in Uzbek
 * @property string $full_name_ru            Staff member's full name in Russian
 * @property string $full_name_en            Staff member's full name in English
 * @property string $type_name_uz            Position/role title in Uzbek
 * @property string $phone                   Contact phone number
 * @property string $email                   Contact email address
 * @property string $image                   Path to profile photo
 */
class AdministrationCenter extends Model
{
    protected $table = 'center_administration';
}
