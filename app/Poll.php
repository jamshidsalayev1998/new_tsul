<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model representing a public survey/poll.
 *
 * A poll contains one or more questions, each with options and responses.
 * Polls have three statuses: New (0), Active (1), Archived (2).
 * Only active polls are visible to the public. Results can optionally
 * be shown to respondents after submission.
 *
 * @property int    $id
 * @property string $title_uz     Poll title in Uzbek
 * @property string $title_ru     Poll title in Russian
 * @property string $title_en     Poll title in English
 * @property string $slug         URL-friendly unique identifier
 * @property int    $status       0 = New, 1 = Active, 2 = Archived
 * @property int    $show_results Whether to display results to the public (1 = yes, 0 = no)
 */
class Poll extends Model
{
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'slug', 'status', 'show_results'];

    /**
     * Scope to filter only active (published) polls.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Get a human-readable HTML badge representing the poll's current status.
     *
     * Returns a Bootstrap badge element styled per status:
     * - 0 (New): info badge
     * - 1 (Active): success badge
     * - 2 (Archived): secondary badge
     *
     * @return string HTML badge string, or 'Noma\'lum' for unknown status values
     */
    public function getStatusLabelAttribute()
    {
        $labels = [
            0 => '<span class="badge badge-info">Yangi</span>',
            1 => '<span class="badge badge-success">Aktiv</span>',
            2 => '<span class="badge badge-secondary">Arxiv</span>',
        ];
        return $labels[$this->status] ?? 'Noma\'lum';
    }

    /**
     * Get all questions belonging to this poll, ordered by their display order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function questions()
    {
        return $this->hasMany(PollQuestion::class)->orderBy('order');
    }

    /**
     * Get all responses submitted for this poll across all questions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responses()
    {
        return $this->hasMany(PollResponse::class);
    }
}
