<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a media gallery item (photo or video).
 *
 * Used to manage multimedia content displayed in the university's
 * media gallery section. Items may include images, videos, or links
 * to external media.
 *
 * @property int    $id
 * @property string $title_uz    Media title in Uzbek
 * @property string $title_ru    Media title in Russian
 * @property string $title_en    Media title in English
 * @property string $image       Path to the media file or thumbnail
 * @property string $type        Media type (e.g., 'photo', 'video')
 * @property int    $status      1 = active/visible, 0 = inactive/hidden
 */
class Media extends Model
{
    protected $table = 'medias';
}
