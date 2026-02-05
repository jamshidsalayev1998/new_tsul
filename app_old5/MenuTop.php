<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTop extends Model
{
    protected $table = 'menus_top';

    public function scopeBasic($query)
    {
        return $query->where('type', 1);
    }
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function childs(){
        $childs = MenuTop::where('parent_id' , $this->id)->orderBy('order' , 'ASC')->get();
        return $childs;
    }
    public function has_child(){
        if (MenuTop::where('parent_id' , $this->id)->exists()){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function has_second_leap_child(){
        $childs = MenuTop::where('parent_id' , $this->id)->pluck('id');
        if (MenuTop::where('leap' , 2)->whereIn('parent_id' , $childs)->exists()){
            return 1;
        }
        else{
            return 0;
        }
    }
}
