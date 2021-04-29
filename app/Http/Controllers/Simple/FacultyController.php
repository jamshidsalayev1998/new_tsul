<?php

namespace App\Http\Controllers\Simple;
use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\Faculty;
use App\AdministrationFaculty;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $faculties = Faculty::all();
        $menu = Menu::where('slug' , '/all-faculties')->first();
        $links = Menu::where('leap' , $menu->leap)->where('parent_id' , $menu->parent_id)->get();
        return view('simple.all_faculties' , [
            'data' => $faculties,
            'links' => $links
        ]);
    }

    public function show($id , $name){
        $faculty = Faculty::find($id);
        $other_faculties = Faculty::where('id' , '<>' , $faculty->id)->get();
        if($faculty){
            return view('simple.faculty_show' , [
                'data' => $faculty,
                'other_faculties' => $other_faculties
            ]);
        }
    }




}
