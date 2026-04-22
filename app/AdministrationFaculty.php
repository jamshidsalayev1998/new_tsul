<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an administration member of a university faculty.
 *
 * Stores contact, biographical, and professional details for faculty
 * leadership and staff. Each record is linked to a faculty via faculty_id.
 *
 * Note: the underlying table is named 'facyulty_administration' — this is
 * a known typo in the original database schema.
 *
 * @property int    $id
 * @property int    $faculty_id                      Foreign key to the faculties table
 * @property string $full_name_uz                    Full name in Uzbek
 * @property string $full_name_ru                    Full name in Russian
 * @property string $full_name_en                    Full name in English
 * @property string $type_name_uz                    Position/role title (Uzbek)
 * @property string $phone                           Contact phone number
 * @property string $email                           Contact email address
 * @property string $faks                            Fax number
 * @property string $address_uz                      Office address in Uzbek
 * @property string $address_ru                      Office address in Russian
 * @property string $address_en                      Office address in English
 * @property string $reception_days_uz               Reception schedule in Uzbek
 * @property string $reception_days_ru               Reception schedule in Russian
 * @property string $reception_days_en               Reception schedule in English
 * @property string $labor_activity_uz               Work history in Uzbek
 * @property string $labor_activity_ru               Work history in Russian
 * @property string $labor_activity_en               Work history in English
 * @property string $professional_development_uz     Training/development in Uzbek
 * @property string $professional_development_ru     Training/development in Russian
 * @property string $professional_development_en     Training/development in English
 * @property string $lessons_uz                      Taught subjects in Uzbek
 * @property string $lessons_ru                      Taught subjects in Russian
 * @property string $lessons_en                      Taught subjects in English
 * @property string $scientific_activity_uz          Scientific work in Uzbek
 * @property string $scientific_activity_ru          Scientific work in Russian
 * @property string $scientific_activity_en          Scientific work in English
 * @property string $image                           Path to profile photo
 */
class AdministrationFaculty extends Model
{
    // Note: intentional typo in the original database table name preserved as-is
    protected $table = 'facyulty_administration';
}
