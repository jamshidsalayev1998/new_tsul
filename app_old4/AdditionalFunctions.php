<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdditionalFunctions extends Model
{
    public $request;

    public function search_word_is_not_null($request)
    {
        if (isset($request->word) && $request->word != '' && $request->word != null && $request->word != 'null' && $request->word != 'undefined') {
            return 1;
        } else {
            return 0;
        }
//        return $request;
    }

    public function show_count_is_not_null($request)
    {
        if (isset($request->show_count) && is_numeric($request->show_count) && $request->show_count != '' && $request->show_count != null && $request->show_count != 'all' && $request->show_count != 'null' && $request->show_count != 'undefined') {
            return 1;
        } else {
            return 0;
        }
    }

    public function department_id_is_not_null($request)
    {
        if (isset($request->department_id) && is_numeric($request->department_id) && $request->department_id != '' && $request->department_id != null && $request->department_id != 'all' && $request->department_id != 'null' && $request->department_id != 'undefined') {
            return 1;
        } else {
            return 0;
        }
    }
    public function degree_id_is_not_null($request)
    {
        if (isset($request->degree_id) && is_numeric($request->degree_id) && $request->degree_id != '' && $request->degree_id != null && $request->degree_id != 'all' && $request->degree_id != 'null' && $request->degree_id != 'undefined') {
            return 1;
        } else {
            return 0;
        }
    }




}
