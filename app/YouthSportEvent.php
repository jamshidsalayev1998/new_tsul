<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a youth sports event organized by the university.
 *
 * Managed by users with the 'youth-sport-admin' role. Stores multilingual
 * event details including organizers and participant information.
 * Each event is linked to the admin user who created it.
 *
 * @property int         $id
 * @property string      $title_uz               Event title in Uzbek
 * @property string      $title_ru               Event title in Russian
 * @property string      $title_en               Event title in English
 * @property string      $description_uz         Full description in Uzbek (HTML)
 * @property string      $description_ru         Full description in Russian (HTML)
 * @property string      $description_en         Full description in English (HTML)
 * @property string      $event_date             Date of the event (YYYY-MM-DD)
 * @property string      $location_uz            Venue in Uzbek
 * @property string      $location_ru            Venue in Russian
 * @property string      $location_en            Venue in English
 * @property string      $organizers_uz          Organizers information in Uzbek
 * @property string      $organizers_ru          Organizers information in Russian
 * @property string      $organizers_en          Organizers information in English
 * @property string      $participants_info_uz   Participant info in Uzbek
 * @property string      $participants_info_ru   Participant info in Russian
 * @property string      $participants_info_en   Participant info in English
 * @property string      $image                  Path to event banner image
 * @property int         $status                 1 = active/visible, 0 = inactive/hidden
 * @property int         $user_id                Foreign key to the users table (creator)
 */
class YouthSportEvent extends Model
{
    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'description_uz',
        'description_ru',
        'description_en',
        'event_date',
        'location_uz',
        'location_ru',
        'location_en',
        'organizers_uz',
        'organizers_ru',
        'organizers_en',
        'participants_info_uz',
        'participants_info_ru',
        'participants_info_en',
        'image',
        'status',
        'user_id'
    ];

    /**
     * Get the admin user who created this event.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
