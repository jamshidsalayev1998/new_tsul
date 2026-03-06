<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'sections';
    public function administrations(){
        return $this->hasMany(AdministrationSection::class , 'faculty_id');
    }
}
