<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a survey/questionnaire (so'rovnoma in Uzbek).
 *
 * A requestment is a structured survey shown on the homepage when active.
 * Only one requestment can be active at a time (isActive = 1). Each requestment
 * contains multiple questions, each with multiple answer options.
 *
 * @property int    $id
 * @property string $name_uz         Survey name in Uzbek
 * @property string $name_ru         Survey name in Russian
 * @property string $name_en         Survey name in English
 * @property string $description_uz  Survey description in Uzbek (HTML)
 * @property string $description_ru  Survey description in Russian (HTML)
 * @property string $description_en  Survey description in English (HTML)
 * @property string $slug            URL-friendly identifier
 * @property int    $isActive        1 = currently active on homepage, 0 = inactive
 */
class Requestment extends Model
{
    protected $table = 'requestments';

    /**
     * Get all questions belonging to this survey, ordered by ID ascending.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(RequestmentQuestion::class, 'requestment_id', 'id')->orderBy('id', 'ASC');
    }
}
