<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an administrative section of the university.
 *
 * A section is a structural unit (e.g., department, office) that can have
 * its own administration staff. Note: the foreign key in the
 * AdministrationSection relationship is named 'faculty_id' despite referencing
 * a section — this appears to be a legacy naming convention in the database.
 *
 * @property int    $id
 * @property string $name_uz  Section name in Uzbek
 * @property string $name_ru  Section name in Russian
 * @property string $name_en  Section name in English
 */
class Section extends Model
{
    protected $table = 'sections';

    /**
     * Get all administration members belonging to this section.
     *
     * Note: the FK column is named 'faculty_id' in the section_administration
     * table — this is a legacy naming inconsistency in the database schema.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administrations()
    {
        return $this->hasMany(AdministrationSection::class, 'faculty_id');
    }
}
