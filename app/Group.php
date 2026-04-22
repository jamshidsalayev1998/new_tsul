<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a student group (cohort).
 *
 * Groups are student cohorts associated with a specific faculty and
 * academic course/year level. Used for organizing students in
 * timetable and schedule management.
 *
 * @property int    $id
 * @property int    $faculty_id  Foreign key to the faculties table
 * @property int    $course_id   Foreign key to the courses table (academic year)
 * @property string $name        Group identifier/name (e.g., "101-guruh")
 */
class Group extends Model
{
    protected $table = 'groups';

    /**
     * Get the faculty this group belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id', 'id');
    }
}
