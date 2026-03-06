<?php

namespace App\Http\Controllers\Simple;
use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\Ustav;
use App\Faculty;
use App\AdministrationFaculty;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class UstavController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $data = Ustav::active()->get();
        $menu = Menu::where('slug' , '/ustav')->first();
        $links = Menu::where('parent_id' , $menu->parent_id)->where('leap' , $menu->leap)->where('id' , '<>' , $menu->id)->get();
        return view('simple.ustav' , [
            'data' => $data,
            'links' => $links
        ]);
        return $data;
    }

    public function show($id , $name){


    }




}
