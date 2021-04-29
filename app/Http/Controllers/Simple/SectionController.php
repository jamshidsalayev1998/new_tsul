<?php

namespace App\Http\Controllers\Simple;

use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\Section;
use App\AdministrationSection;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $faculties = Section::all();
        $menu = Menu::where('slug', '/all-sections')->first();
        $links = Menu::where('leap', $menu->leap)->where('parent_id', $menu->parent_id)->get();
        return view('simple.sections', [
            'data' => $faculties,
            'links' => $links
        ]);
    }

    public function show($id, $name)
    {
        $faculty = Section::find($id);
        if ($faculty) {
            $other_faculties = Section::where('id', '<>', $faculty->id)->get();
            $menu = Menu::where('slug', '/all-sections')->first();
            if ($faculty) {
                return view('simple.section_show', [
                    'data' => $faculty,
                    'other_centers' => $other_faculties,
                    'menu' => $menu
                ]);
            }
        }
        else{
            abort(404);
        }

    }


}
