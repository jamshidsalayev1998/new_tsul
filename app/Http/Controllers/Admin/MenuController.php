<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Menu;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $menus = Menu::where('leap' , 0)->get();
        return view('admin.pages.menu.index' , [
            'menus' => $menus
        ]);
    }

    public function store(Request $request){

    }
}
