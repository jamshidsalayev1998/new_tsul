<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    protected $fillable = ['title_uz', 'title_ru', 'title_en', 'slug', 'status', 'show_results'];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function getStatusLabelAttribute()
    {
        $labels = [
            0 => '<span class="badge badge-info">Yangi</span>',
            1 => '<span class="badge badge-success">Aktiv</span>',
            2 => '<span class="badge badge-secondary">Arxiv</span>',
        ];
        return $labels[$this->status] ?? 'Noma\'lum';
    }

    public function questions()
    {
        return $this->hasMany(PollQuestion::class)->orderBy('order');
    }

    public function responses()
    {
        return $this->hasMany(PollResponse::class);
    }
}
