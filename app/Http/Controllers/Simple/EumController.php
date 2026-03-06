<?php

namespace App\Http\Controllers\Simple;
use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\Faculty;
use App\Center;
use App\AdministrationFaculty;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class EumController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
//        $menu = Menu::where('slug' , '/all-centers')->first();
//        $links = Menu::where('leap' , $menu->leap)->where('parent_id' , $menu->parent_id)->get();
        return view('simple.eum');
    }

//    public function show($id , $name){
//        $faculty = Center::find($id);
//        $other_faculties = Center::where('id' , '<>' , $faculty->id)->get();
//        $menu = Menu::where('slug' , '/all-centers')->first();
//        if($faculty){
//            return view('simple.center_show' , [
//                'data' => $faculty,
//                'other_centers' => $other_faculties,
//                'menu' => $menu
//            ]);
//        }
//    }




}
