<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Model representing a university teacher/lecturer.
 *
 * Stores biographical, academic, and contact information for each teacher.
 * A teacher belongs to a specific department (kafedra) and may hold
 * an academic degree and title. Teachers can also have published articles.
 *
 * @property int    $id
 * @property int    $kafedra_id        Foreign key to the kafedra table
 * @property string $fio_uz            Full name in Uzbek
 * @property string $fio_ru            Full name in Russian
 * @property string $fio_en            Full name in English
 * @property string $image             Path to teacher's profile photo
 * @property int    $degree            Foreign key to teacher_degree table
 * @property int    $academic_title    Foreign key to academic_titles table
 * @property string $general_info_uz   Biography/general info in Uzbek (HTML)
 * @property string $general_info_ru   Biography/general info in Russian (HTML)
 * @property string $general_info_en   Biography/general info in English (HTML)
 * @property string $contact_info_uz   Contact details in Uzbek (HTML)
 * @property string $contact_info_ru   Contact details in Russian (HTML)
 * @property string $contact_info_en   Contact details in English (HTML)
 * @property string $language          Languages the teacher speaks
 * @property string $spin_rints        SPIN/RINC researcher identifier
 * @property string $orcid             ORCID researcher identifier
 * @property int    $staj              Years of professional experience
 */
class Teacher extends Model
{
    protected $table = 'teachers';

    /**
     * Get the department (kafedra) this teacher belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kafedra()
    {
        return $this->belongsTo(Kafedra::class, 'kafedra_id', 'id');
    }

    /**
     * Get all scientific articles authored by this teacher.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(Article::class, 'teacher_id', 'id');
    }

    /**
     * Get the academic degree associated with this teacher.
     *
     * The degree field stores the ID referencing the teacher_degree table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher_degree()
    {
        return $this->belongsTo(TeacherDegree::class, 'degree', 'id');
    }

    /**
     * Get the academic title (e.g., Professor, Associate Professor) for this teacher.
     *
     * The academic_title field stores the ID referencing the academic_titles table.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher_academic_title()
    {
        return $this->belongsTo(AcademikTitle::class, 'academic_title', 'id');
    }
}
