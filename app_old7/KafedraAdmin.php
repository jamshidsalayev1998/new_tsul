<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KafedraAdmin extends Model
{
    protected $table = 'kafedra_admins';

    public function kafedra(){
        return $this->belongsTo(Kafedra::class , 'kafedra_id' , 'id');
    }
    public function user(){
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
