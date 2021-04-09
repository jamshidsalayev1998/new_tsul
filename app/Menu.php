<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    public function scopeBasic($query)
    {
        return $query->where('type', 1);
    }
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function childs(){
        $childs = Menu::where('parent_id' , $this->id)->get();
        return $childs;
    }
    public function has_child(){
        if (Menu::where('parent_id' , $this->id)->exists()){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function has_second_leap_child(){
        $childs = Menu::where('parent_id' , $this->id)->pluck('id');
        if (Menu::where('leap' , 2)->whereIn('parent_id' , $childs)->exists()){
            return 1;
        }
        else{
            return 0;
        }
    }
}
