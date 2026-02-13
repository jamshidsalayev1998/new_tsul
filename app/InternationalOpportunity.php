<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        'status'
    ];
}
