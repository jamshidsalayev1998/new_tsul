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

    public function create_slug($text)
    {
        $slug = $text;
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

    function cryllic_to_latin($textcyr)
    {
        $textlat = '';
        $cyr = array(
            'ж', 'ч', 'щ', 'ш', 'ю', 'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ъ', 'ь', 'я', 'қ','ў','ҳ','э',
            'Ж', 'Ч', 'Щ', 'Ш', 'Ю', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ъ', 'Ь', 'Я','Қ','Ў','ҳ','Э');
        $lat = array(
            'zh', 'ch', 'sht', 'sh', 'yu', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', '', '', 'ya','q','o','x','e',
            'Zh', 'Ch', 'Sht', 'Sh', 'Yu', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'c', '', '', 'Ya','Q','O','X','E');
         return str_replace($cyr, $lat, $textcyr);
    }


}
