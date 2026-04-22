<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Model representing the banner displayed on the teachers listing page.
 *
 * Stores a banner image and optional text shown at the top of the
 * "All Teachers" page. The active banner (status = 1) is shown first;
 * if none is active, the first available record is used as a fallback.
 *
 * @property int    $id
 * @property string $image   Path to the banner image file
 * @property int    $status  1 = active/visible, 0 = inactive/hidden
 */
class TeachersBanner extends Model
{
    protected $table = 'teachers_banner';
}
