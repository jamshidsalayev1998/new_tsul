<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Utility class providing shared helper methods used across controllers.
 *
 * Despite extending Eloquent Model, this class is not mapped to a database table
 * and is used purely as a utility/service object. It provides common request
 * validation helpers, slug generation, and Cyrillic-to-Latin transliteration.
 *
 * Note: This class would be better implemented as a plain PHP class or a
 * dedicated Service/Helper — it extends Model only for historical reasons.
 *
 * @property mixed $request Placeholder property (unused)
 */
class AdditionalFunctions extends Model
{
    /** @var mixed Placeholder; this class is not backed by a DB table */
    public $request;

    /**
     * Check whether the 'word' search parameter in the request is a valid, non-empty string.
     *
     * Guards against empty strings, null, 'null', and 'undefined' values
     * that can arrive from JavaScript-driven AJAX requests.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request
     * @return int 1 if the word parameter is usable, 0 otherwise
     */
    public function search_word_is_not_null($request)
    {
        if (isset($request->word) && $request->word != '' && $request->word != null && $request->word != 'null' && $request->word != 'undefined') {
            return 1;
        } else {
            return 0;
        }
//        return $request;
    }

    /**
     * Check whether the 'show_count' pagination parameter is a valid numeric value.
     *
     * Rejects empty, null, 'all', 'null', and 'undefined' values sent from
     * front-end filters that may pass non-numeric strings.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request
     * @return int 1 if show_count is a usable number, 0 otherwise
     */
    public function show_count_is_not_null($request)
    {
        if (isset($request->show_count) && is_numeric($request->show_count) && $request->show_count != '' && $request->show_count != null && $request->show_count != 'all' && $request->show_count != 'null' && $request->show_count != 'undefined') {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Check whether the 'department_id' filter parameter is a valid numeric ID.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request
     * @return int 1 if department_id is a valid numeric value, 0 otherwise
     */
    public function department_id_is_not_null($request)
    {
        if (isset($request->department_id) && is_numeric($request->department_id) && $request->department_id != '' && $request->department_id != null && $request->department_id != 'all' && $request->department_id != 'null' && $request->department_id != 'undefined') {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Check whether the 'degree_id' filter parameter is a valid numeric ID.
     *
     * @param \Illuminate\Http\Request $request The incoming HTTP request
     * @return int 1 if degree_id is a valid numeric value, 0 otherwise
     */
    public function degree_id_is_not_null($request)
    {
        if (isset($request->degree_id) && is_numeric($request->degree_id) && $request->degree_id != '' && $request->degree_id != null && $request->degree_id != 'all' && $request->degree_id != 'null' && $request->degree_id != 'undefined') {
            return 1;
        } else {
            return 0;
        }
    }

    /**
     * Generate a URL-friendly slug from the given text string.
     *
     * Replaces spaces with hyphens and strips quotes, slashes, backticks,
     * and curly apostrophes. Used to build SEO-friendly URL segments.
     *
     * @param string $text The source text to slugify
     * @return string The generated slug
     */
    public function create_slug($text)
    {
        $slug = $text;
        $slug = str_replace(' ', '-', $slug);
        $slug = str_replace('\'', '', $slug);
        $slug = str_replace('"', '', $slug);
        $slug = str_replace('/', '', $slug);
        $slug = str_replace('`', '', $slug);
        $slug = str_replace(''', '', $slug);
        $slug = str_replace(''', '', $slug);
        $slug = str_replace('\\', '', $slug);
        return $slug;
    }

    /**
     * Transliterate Cyrillic (Uzbek/Russian) characters to their Latin equivalents.
     *
     * Used when generating URL slugs from Cyrillic content so they remain
     * ASCII-safe for use in web addresses. Handles both lowercase and uppercase
     * characters, including Uzbek-specific letters (қ, ў, ҳ).
     *
     * @param string $textcyr The input string containing Cyrillic characters
     * @return string The transliterated string in Latin script
     */
    function cryllic_to_latin($textcyr)
    {
        $textlat = '';
        $cyr = array(
            'ж', 'ч', 'щ', 'ш', 'ю', 'а', 'б', 'в', 'г', 'д', 'е', 'з', 'и', 'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф', 'х', 'ц', 'ъ', 'ь', 'я', 'қ', 'ў', 'ҳ', 'э',
            'Ж', 'Ч', 'Щ', 'Ш', 'Ю', 'А', 'Б', 'В', 'Г', 'Д', 'Е', 'З', 'И', 'Й', 'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф', 'Х', 'Ц', 'Ъ', 'Ь', 'Я', 'Қ', 'Ў', 'ҳ', 'Э');
        $lat = array(
            'zh', 'ch', 'sht', 'sh', 'yu', 'a', 'b', 'v', 'g', 'd', 'e', 'z', 'i', 'y', 'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f', 'h', 'c', '', '', 'ya', 'q', 'o', 'x', 'e',
            'Zh', 'Ch', 'Sht', 'Sh', 'Yu', 'A', 'B', 'V', 'G', 'D', 'E', 'Z', 'I', 'Y', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'F', 'H', 'c', '', '', 'Ya', 'Q', 'O', 'X', 'E');
        return str_replace($cyr, $lat, $textcyr);
    }
}
