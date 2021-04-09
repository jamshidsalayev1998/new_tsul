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
//        return "D";
        $menus = Menu::where('leap' , 0)->get();
        $leap = 0;
        $parent_id = null;
        return view('admin.pages.menu.index' , [
            'menus' => $menus,
            'leap' => $leap,
            'parent_id' => $parent_id
        ]);
    }
    public function show($id){
//        return "D";
        $one = Menu::find($id);
        $menus = Menu::where('leap' , $one->leap+1)->where('parent_id' , $one->id)->get();
        $leap = $one->parent_id;
        $parent_id = $one->parent_id;
        return view('admin.pages.menu.show' , [
            'menus' => $menus,
            'leap' => $leap,
            'parent_id' => $parent_id,
            'parent' => $one
        ]);
    }

    public function change_eye_menu(Request $request){
        $menu = Menu::find($request->menu_id);
        if ($menu->status == 1){
            $menu->status = 0;
        }
        else{
            $menu->status = 1;
        }
        $menu->update();
        return $request->menu_id;
    }

    public function change_name_menu(Request $request , $id){
        $menu = Menu::find($id);
        if($menu){
            $menu->name_uz = $request->name_uz;
            $menu->name_ru = $request->name_ru;
            $menu->name_en = $request->name_en;
            $menu->update();
            return redirect()->back()->with('success' , 'Malumot o`zgartirildi');
        }
    }

    public function store(Request $request){

    }

    public function update(Request $request , $id){
        $menu = Menu::find($id);
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_en = $request->name_en;
        $menu->update();
        return redirect()->back()->with('success' , 'Malumot ozgartirildi');
    }
}
