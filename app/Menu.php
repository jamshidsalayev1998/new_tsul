<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Menu extends Authenticatable
{
    protected $table = 'menus';

    public function scopeBasic($query)
    {
        return $query->where('type', 1);
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
}
