<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a university announcement.
 *
 * Announcements are short-lived public notices displayed on the website.
 * Each announcement has a publication date and can be activated or deactivated
 * via the status field. Content is stored in three languages.
 *
 * @property int    $id
 * @property string $title_uz    Announcement title in Uzbek
 * @property string $title_ru    Announcement title in Russian
 * @property string $title_en    Announcement title in English
 * @property string $content_uz  Body text in Uzbek (HTML)
 * @property string $content_ru  Body text in Russian (HTML)
 * @property string $content_en  Body text in English (HTML)
 * @property string $date        Publication date (YYYY-MM-DD)
 * @property int    $status      1 = active/visible, 0 = inactive/hidden
 */
class Announce extends Model
{
    protected $table = 'announces';

    /**
     * Scope to filter only active (published) announcements.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Return the abbreviated month name for the announcement's date, localized by language.
     *
     * Used in view templates to display publication dates in a compact format.
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
}
