<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an academic year/course level (e.g., 1st year, 2nd year).
 *
 * Courses group student cohorts into academic year levels and are associated
 * with a faculty type. Used to filter and organize student groups by year.
 *
 * @property int    $id
 * @property int    $type_id   Faculty type this course belongs to
 * @property string $name_uz   Course level name in Uzbek (e.g., "1-kurs")
 * @property string $name_ru   Course level name in Russian
 * @property string $name_en   Course level name in English
 */
class Course extends Model
{
    protected $table = 'courses';

    /**
     * Get all student groups belonging to this course/year level.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups()
    {
        return $this->hasMany(Group::class, 'course_id', 'id');
    }

    /**
     * Get all faculties that share the same type as this course.
     *
     * Used to filter faculties relevant to a given course level when
     * building timetable or group selection views.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function get_faculties()
    {
        $faculties = Faculty::where('type_id', $this->type_id)->get();
        return $faculties;
    }
}
