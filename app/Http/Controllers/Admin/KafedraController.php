<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\Section;
use App\AdministrationSection;
use App\SliderImage;
use App\SliderText;
use App\Kafedra;
use Illuminate\Http\Request;

/**
 * Admin controller for managing academic departments (kafedra).
 *
 * Provides CRUD operations for department records. Each department stores
 * multilingual name, full description, and short summary content.
 *
 * Note: several methods contain unreachable `return $request` and `return $faculty`
 * statements — these are legacy debugging artifacts preserved from development.
 */
class KafedraController extends Controller
{
    /**
     * Display a list of all departments.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $faculties = Kafedra::all();
        return view('admin.pages.kafedra.index', [
            'data' => $faculties
        ]);
    }

    /**
     * Show the form for creating a new department.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.kafedra.create');
    }

    /**
     * Generate a unique filename by appending a timestamp suffix.
     *
     * Format: {name}{ss}_{ii}_{hh}_{dd}_{mm}
     *
     * @param string $name Base name (without extension)
     * @return string Timestamped filename
     */
    public function file_name($name)
    {
        $name2 = $name . date('s') . '_' . date('i') . '_' . date('h') . '_' . date('d') . '_' . date('m');
        return $name2;
    }

    /**
     * Generate a random lowercase alphabetic string of the given length.
     *
     * Excludes ambiguous characters (i, o, l) for readability.
     * Used as a filename prefix to reduce collision risk.
     *
     * @param int $count Number of characters to generate
     * @return string Random alphabetic string
     */
    public function randomPassword_alpha($count)
    {
        $alphabet = 'abcdefghjkmnpqrstuvwxyz';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $count; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    /**
     * Store a newly created department in the database.
     *
     * No input validation is applied. Multilingual name, content,
     * and short_info fields are saved directly from the request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $new = new Kafedra();
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->save();
        return redirect(route('admin_kafedra.index'))->with('success', 'Malumot saqlandi');
        return $request;
    }

    /**
     * Update an existing department record.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The department's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $new = Kafedra::find($id);
        $new->type_id = $request->type_id;
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->update();
        return redirect(route('admin_kafedra.index'))->with('success', 'Malumot ozgartirildi');
        return $request;
    }

    /**
     * Show the edit form for an existing department.
     *
     * @param int $id The department's primary key
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $faculty = Kafedra::find($id);
        return view('admin.pages.kafedra.edit', [
            'data' => $faculty
        ]);
        return $faculty;
    }

    /**
     * Delete a department record from the database.
     *
     * Note: teachers linked to this department are NOT reassigned or deleted —
     * their kafedra_id will become a dangling reference after deletion.
     *
     * @param int $id The department's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $section = Kafedra::find($id);
        $section->delete();
        return redirect()->back()->with('success', 'O`chirildi');
    }
}
