<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a university news article.
 *
 * Stores multilingual news content (UZ/RU/EN) including titles, body text,
 * short previews, images per locale, publication date, and type classification.
 * The class name "Neww" uses a double-w to avoid collision with PHP reserved words.
 *
 * @property int         $id
 * @property string      $title_uz      Article title in Uzbek
 * @property string      $title_ru      Article title in Russian
 * @property string      $title_en      Article title in English
 * @property string      $content_uz    Full article body in Uzbek (HTML)
 * @property string      $content_ru    Full article body in Russian (HTML)
 * @property string      $content_en    Full article body in English (HTML)
 * @property string      $short_info_uz Short preview text in Uzbek
 * @property string      $short_info_ru Short preview text in Russian
 * @property string      $short_info_en Short preview text in English
 * @property string      $image_uz      Path to image for Uzbek locale
 * @property string      $image_ru      Path to image for Russian locale
 * @property string      $image_en      Path to image for English locale
 * @property string      $date          Publication date (YYYY-MM-DD)
 * @property int         $type_id       Foreign key to news_types table
 * @property int         $status        Publication status: 1 = active, 0 = inactive
 */
class Neww extends Model
{
    protected $table = 'news';

    /**
     * Scope to filter only published (active) news items.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Get the news type/category this article belongs to.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(NewwType::class, 'type_id', 'id');
    }

    /**
     * Return the abbreviated month name for the article's date, localized by language.
     *
     * Used in view templates to display dates in a compact format.
     * Note: all three locales currently return the same Uzbek abbreviations —
     * RU and EN localizations appear to be incomplete/placeholders.
     *
     * @param string $locale The active locale: 'uz', 'ru', or 'en'
     * @return string Abbreviated month name (e.g. 'Yan', 'Fev', 'Mar')
     */
    public function get_month_short_name($locale)
    {
        if ($locale == 'uz') {
            $month[1] = 'Yan';
            $month[2] = 'Fev';
            $month[3] = 'Mar';
            $month[4] = 'Apr';
            $month[5] = 'May';
            $month[6] = 'Iyun';
            $month[7] = 'Iyul';
            $month[8] = 'Avg';
            $month[9] = 'Sen';
            $month[10] = 'Okt';
            $month[11] = 'Noy';
            $month[12] = 'Dek';
        } elseif ($locale == 'ru') {
            $month[1] = 'Yan';
            $month[2] = 'Fev';
            $month[3] = 'Mar';
            $month[4] = 'Apr';
            $month[5] = 'May';
            $month[6] = 'Iyun';
            $month[7] = 'Iyul';
            $month[8] = 'Avg';
            $month[9] = 'Sen';
            $month[10] = 'Okt';
            $month[11] = 'Noy';
            $month[12] = 'Dek';
        } elseif ($locale == 'en') {
            $month[1] = 'Yan';
            $month[2] = 'Fev';
            $month[3] = 'Mar';
            $month[4] = 'Apr';
            $month[5] = 'May';
            $month[6] = 'Iyun';
            $month[7] = 'Iyul';
            $month[8] = 'Avg';
            $month[9] = 'Sen';
            $month[10] = 'Okt';
            $month[11] = 'Noy';
            $month[12] = 'Dek';
        }
        $mm = intval(date('m', strtotime($this->date)));
        return $month[$mm];
    }

    /**
     * Generate a URL-friendly slug from the article's title in the current locale.
     *
     * Strips special characters and replaces spaces with hyphens. Used to build
     * SEO-friendly URLs for news detail pages.
     *
     * @return string The generated slug
     */
    public function create_slug()
    {
        $title_locale = 'title_' . app()->getLocale();
        $slug = $this->$title_locale;
        $slug = str_replace(' ', '-', $slug);
        $slug = str_replace('\'', '', $slug);
        $slug = str_replace('"', '', $slug);
        $slug = str_replace('/', '', $slug);
        $slug = str_replace('`', '', $slug);
        $slug = str_replace('‘', '', $slug);
        $slug = str_replace('’', '', $slug);
        $slug = str_replace('\\', '', $slug);
        return $slug;
    }

    /**
     * Generate a URL-friendly slug from this article's news type name in the current locale.
     *
     * Falls back to 'all' if the news type record no longer exists, allowing
     * gracefully degraded links when a type is deleted.
     *
     * @return string The generated type slug, or 'all' if the type is missing
     */
    public function create_type_slug()
    {
        $name_locale = 'name_' . app()->getLocale();
        $new_type = NewwType::find($this->type_id);
        if ($new_type) {
            $slug = $new_type->$name_locale;
        } else {
            $slug = 'all';
        }
        $slug = str_replace(' ', '-', $slug);
        $slug = str_replace('\'', '', $slug);
        $slug = str_replace('"', '', $slug);
        $slug = str_replace('/', '', $slug);
        $slug = str_replace('`', '', $slug);
        $slug = str_replace('‘', '', $slug);
        $slug = str_replace('’', '', $slug);
        $slug = str_replace('\\', '', $slug);
        return $slug;
    }
}
