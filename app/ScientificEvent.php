<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScientificEvent extends Model
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
        'status'
    ];
}
