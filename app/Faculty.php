<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a university faculty (department/college).
 *
 * Faculties are top-level academic units that contain groups (student cohorts),
 * administration staff, and directional programs. Each faculty can have a type
 * (e.g., bachelor's, master's) identified by type_id.
 *
 * @property int    $id
 * @property int    $type_id       Faculty type identifier (e.g., bachelor/master)
 * @property string $name_uz       Faculty name in Uzbek
 * @property string $name_ru       Faculty name in Russian
 * @property string $name_en       Faculty name in English
 * @property string $content_uz    Full description in Uzbek (HTML)
 * @property string $content_ru    Full description in Russian (HTML)
 * @property string $content_en    Full description in English (HTML)
 * @property string $students_uz   Student information in Uzbek
 * @property string $students_ru   Student information in Russian
 * @property string $students_en   Student information in English
 * @property string $teachers_uz   Teacher information in Uzbek
 * @property string $teachers_ru   Teacher information in Russian
 * @property string $teachers_en   Teacher information in English
 * @property string $directions_uz Study directions/programs in Uzbek
 * @property string $directions_ru Study directions/programs in Russian
 * @property string $directions_en Study directions/programs in English
 */
class Faculty extends Model
{
    protected $table = 'faculties';

    /** @var int|null Locally held course ID for filtering groups — not a DB column */
    protected $course_id;

    /**
     * Get all student groups belonging to this faculty for a specific course year.
     *
     * Queries groups filtered by both faculty and course, allowing a faculty
     * page to display only the groups relevant to a selected academic year.
     *
     * @param int $course_id The course/year ID to filter groups by
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function get_groups($course_id)
    {
        $groups = Group::where('faculty_id', $this->id)->where('course_id', $course_id)->get();
        return $groups;
    }

    /**
     * Get all administration members of this faculty.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function administrations()
    {
        return $this->hasMany(AdministrationFaculty::class, 'faculty_id');
    }
}
