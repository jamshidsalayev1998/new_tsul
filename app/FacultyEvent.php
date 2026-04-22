<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a faculty-level event or conference.
 *
 * Stores multilingual details about academic events organized by a faculty,
 * including title, description, date, location, speakers, and participation rules.
 * Each event is linked to the admin user who created it.
 *
 * @property int         $id
 * @property string      $title_uz                  Event title in Uzbek
 * @property string      $title_ru                  Event title in Russian
 * @property string      $title_en                  Event title in English
 * @property string      $description_uz            Full description in Uzbek (HTML)
 * @property string      $description_ru            Full description in Russian (HTML)
 * @property string      $description_en            Full description in English (HTML)
 * @property string      $event_date                Date of the event (YYYY-MM-DD)
 * @property string      $location_uz               Venue/location in Uzbek
 * @property string      $location_ru               Venue/location in Russian
 * @property string      $location_en               Venue/location in English
 * @property string      $speakers_uz               Speakers list in Uzbek
 * @property string      $speakers_ru               Speakers list in Russian
 * @property string      $speakers_en               Speakers list in English
 * @property string      $participation_rules_uz    Rules for participation in Uzbek
 * @property string      $participation_rules_ru    Rules for participation in Russian
 * @property string      $participation_rules_en    Rules for participation in English
 * @property string      $image                     Path to the event banner image
 * @property int         $status                    1 = active/visible, 0 = inactive/hidden
 * @property int         $user_id                   Foreign key to the users table (creator)
 */
class FacultyEvent extends Model
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
        'speakers_uz',
        'speakers_ru',
        'speakers_en',
        'participation_rules_uz',
        'participation_rules_ru',
        'participation_rules_en',
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
