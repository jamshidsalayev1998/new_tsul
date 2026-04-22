<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a university research or service center.
 *
 * Centers are standalone organizational units (distinct from faculties)
 * that can have their own administration staff. Content is multilingual.
 *
 * @property int    $id
 * @property string $name_uz     Center name in Uzbek
 * @property string $name_ru     Center name in Russian
 * @property string $name_en     Center name in English
 * @property string $content_uz  Center description in Uzbek (HTML)
 * @property string $content_ru  Center description in Russian (HTML)
 * @property string $content_en  Center description in English (HTML)
 */
class Center extends Model
{
    protected $table = 'centers';

    /**
     * Get all administration members belonging to this center.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administrations()
    {
        return $this->hasMany(AdministrationCenter::class, 'center_id');
    }
}
