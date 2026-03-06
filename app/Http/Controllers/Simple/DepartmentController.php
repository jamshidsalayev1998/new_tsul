<?php

namespace App\Http\Controllers\Simple;
use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\Faculty;
use App\AdministrationFaculty;
use App\SliderImage;
use App\SliderText;
use App\Management;
use App\Kafedra;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
//        return "Dsds";
        $faculties = Kafedra::all();
        $menu = Menu::where('slug' , '/all-departments')->first();
        $links = Menu::where('leap' , $menu->leap)->where('parent_id' , $menu->parent_id)->get();
//        return $links;
        return view('simple.all_departments' , [
            'data' => $faculties,
            'links' => $links,
            'menu' => $menu
        ]);
    }

    public function show($id , $name){
        $faculty = Kafedra::find($id);
        $other_faculties = Kafedra::where('id' , '<>' , $faculty->id)->get();
        if($faculty){
            return view('simple.department_show' , [
                'data' => $faculty,
                'other_faculties' => $other_faculties
            ]);
        }
    }




}
