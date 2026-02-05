<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected $table = 'announces';

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function get_month_short_name($locale){
        if ($locale == 'uz'){
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
        elseif ($locale == 'ru'){
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
        elseif ($locale == 'en'){
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
        $mm = intval(date('m' , strtotime($this->date)));
        return $month[$mm];
    }

}
