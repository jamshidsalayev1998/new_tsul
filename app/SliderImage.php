<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a homepage slider image.
 *
 * Slider images are displayed in the hero carousel on the homepage.
 * Only images with status = 1 are shown to public visitors.
 *
 * @property int    $id
 * @property string $image   Path to the slider image file
 * @property string $url     Optional link URL when the slide is clicked
 * @property int    $status  1 = active/visible, 0 = inactive/hidden
 * @property int    $order   Display order in the carousel
 */
class SliderImage extends Model
{
    protected $table = 'slider_images';
}
