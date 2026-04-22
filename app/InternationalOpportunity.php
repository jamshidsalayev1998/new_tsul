<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing an international opportunity (grant, scholarship, or exchange program).
 *
 * Stores multilingual details about international academic opportunities
 * available to students and staff, including deadlines, grant amounts,
 * eligibility conditions, and contact information.
 *
 * @property int         $id
 * @property string      $title_uz              Opportunity title in Uzbek
 * @property string      $title_ru              Opportunity title in Russian
 * @property string      $title_en              Opportunity title in English
 * @property string      $description_uz        Full description in Uzbek (HTML)
 * @property string      $description_ru        Full description in Russian (HTML)
 * @property string      $description_en        Full description in English (HTML)
 * @property string      $conditions_uz         Eligibility conditions in Uzbek
 * @property string      $conditions_ru         Eligibility conditions in Russian
 * @property string      $conditions_en         Eligibility conditions in English
 * @property string      $deadline              Application deadline date (YYYY-MM-DD)
 * @property string|null $grant_amount          Funding amount or description
 * @property string      $contact_info_uz       Contact details in Uzbek
 * @property string      $contact_info_ru       Contact details in Russian
 * @property string      $contact_info_en       Contact details in English
 * @property string      $image                 Path to the opportunity banner image
 * @property int         $status                1 = active/visible, 0 = inactive/hidden
 * @property int         $user_id               Foreign key to the users table (creator)
 */
class InternationalOpportunity extends Model
{
    protected $fillable = [
        'title_uz',
        'title_ru',
        'title_en',
        'description_uz',
        'description_ru',
        'description_en',
        'conditions_uz',
        'conditions_ru',
        'conditions_en',
        'deadline',
        'grant_amount',
        'contact_info_uz',
        'contact_info_ru',
        'contact_info_en',
        'image',
        'status',
        'user_id'
    ];

    /**
     * Get the admin user who created this opportunity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }
}
