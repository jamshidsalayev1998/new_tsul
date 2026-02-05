<?php

namespace App\Http\Controllers\Simple;
use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\MenuTop;
use App\Faculty;
use App\AdministrationFaculty;
use App\SliderImage;
use App\SliderText;
use App\Management;
use App\IlmiyNashr;
use Illuminate\Http\Request;

class IlmiyNashrController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
//        return "Dsds";
        $faculties = IlmiyNashr::all();
        $menu = MenuTop::where('slug' , '/ilmiy-nashrlar-all')->first();
        $links = MenuTop::where('leap' , $menu->leap)->where('parent_id' , $menu->parent_id)->get();
//        return $links;
        return view('simple.ilmiy_nashrlar' , [
            'data' => $faculties,
            'links' => $links,
            'menu' => $menu
        ]);
    }

    public function show($id , $name){
        $faculty = IlmiyNashr::find($id);
        $other_faculties = IlmiyNashr::where('id' , '<>' , $faculty->id)->get();
        if($faculty){
            return view('simple.ilmiy_nashrlar_show' , [
                'data' => $faculty,
                'other_faculties' => $other_faculties
            ]);
        }
    }




}
