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

class BranchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $menu = Menu::where('slug' , '/all-branches')->first();
        $links = Menu::where('id' , '<>' , $menu->id)->where('leap' , $menu->leap)->where('parent_id' , $menu->parent_id)->get();
       return view('simple.branches' , [
           'links' => $links,
           'menu' => $menu
       ]);
    }

    public function show($id , $name){

    }




}
