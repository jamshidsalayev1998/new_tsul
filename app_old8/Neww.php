<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Neww extends Model
{
    protected $table = 'news';

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function type()
    {
        return $this->belongsTo(NewwType::class, 'type_id', 'id');
    }

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

    public function create_type_slug()
    {
        $name_locale = 'name_' . app()->getLocale();
        $new_type = NewwType::find($this->type_id);
        if ($new_type) {
            $slug = $new_type->$name_locale;
        }
        else{
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
