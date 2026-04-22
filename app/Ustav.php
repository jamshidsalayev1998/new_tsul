<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * Model representing a university charter/statute document (ustav = charter).
 *
 * Stores statutory and regulatory documents published on the university website.
 * Only active documents (status = 1) are shown to the public.
 *
 * @property int    $id
 * @property string $title_uz    Document title in Uzbek
 * @property string $title_ru    Document title in Russian
 * @property string $title_en    Document title in English
 * @property string $file        Path to the document file (PDF or similar)
 * @property int    $status      1 = active/visible, 0 = inactive/hidden
 */
class Ustav extends Model
{
    protected $table = 'ustav';

    /**
     * Scope to filter only active (published) charter documents.
     *
     * Note: this scope is missing a return statement in the original implementation,
     * which means it modifies the query but does not return it — chaining this scope
     * will not work as expected.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return void
     */
    public function scopeActive($query)
    {
        $query->where('status', 1);
    }
}
