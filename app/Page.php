<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a static content page.
 *
 * Used for standalone informational pages whose content is managed
 * through the admin panel (e.g., regulatory documents, policies).
 * Content is stored in three languages.
 *
 * @property int    $id
 * @property string $title_uz    Page title in Uzbek
 * @property string $title_ru    Page title in Russian
 * @property string $title_en    Page title in English
 * @property string $content_uz  Page body in Uzbek (HTML)
 * @property string $content_ru  Page body in Russian (HTML)
 * @property string $content_en  Page body in English (HTML)
 * @property string $slug        URL-friendly identifier
 */
class Page extends Model
{
    protected $table = 'pages';
}
