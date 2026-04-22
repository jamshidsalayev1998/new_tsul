<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing the text overlay content for the homepage slider.
 *
 * Stores multilingual headline and subtitle text displayed over the
 * hero carousel. Typically only one active record is fetched via ::first().
 *
 * @property int    $id
 * @property string $title_uz    Headline text in Uzbek
 * @property string $title_ru    Headline text in Russian
 * @property string $title_en    Headline text in English
 * @property string $content_uz  Subtitle/body text in Uzbek
 * @property string $content_ru  Subtitle/body text in Russian
 * @property string $content_en  Subtitle/body text in English
 * @property int    $status      1 = active/visible, 0 = inactive/hidden
 */
class SliderText extends Model
{
    protected $table = 'slider_texts';
}
