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
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $faculties = Management::all();
        $menu = Menu::where('slug' , '/all-managements')->first();
        $links = Menu::where('leap' , $menu->leap)->where('parent_id' , $menu->parent_id)->get();
        return view('simple.all_management' , [
            'data' => $faculties,
            'links' => $links,
            'menu' => $menu
        ]);
    }

    public function show($id , $name){
        $faculty = Management::find($id);
        $other_faculties = Management::where('id' , '<>' , $faculty->id)->get();
        if($faculty){
            return view('simple.management_show' , [
                'data' => $faculty,
                'other_faculties' => $other_faculties
            ]);
        }
    }




}
