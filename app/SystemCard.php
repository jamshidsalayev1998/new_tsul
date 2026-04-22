<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Model representing a statistics/info card displayed on the homepage.
 *
 * System cards typically show key university statistics such as
 * number of students, teachers, faculties, or years of operation.
 * Multiple cards are displayed as a grid on the homepage.
 *
 * @property int    $id
 * @property string $title_uz  Card label in Uzbek
 * @property string $title_ru  Card label in Russian
 * @property string $title_en  Card label in English
 * @property string $value     The statistic value to display (e.g., "5000+")
 * @property string $icon      CSS class or icon identifier for the card icon
 */
class SystemCard extends Model
{
    protected $table = 'system_cards';
}
