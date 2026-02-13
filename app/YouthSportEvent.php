<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'status'
    ];
}
