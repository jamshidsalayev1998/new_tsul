<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Menu;
use App\MenuTop;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuTopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
//        return "D";
        $menus = MenuTop::where('leap' , 0)->get();
        $leap = 0;
        $parent_id = null;
        return view('admin.pages.menu_top.index' , [
            'menus' => $menus,
            'leap' => $leap,
            'parent_id' => $parent_id
        ]);
    }
    public function show($id){
//        return "D";
        $one = MenuTop::find($id);
        $menus = MenuTop::where('leap' , $one->leap+1)->where('parent_id' , $one->id)->orderBy('order' , 'ASC')->get();
        $leap = $one->leap+1;
        $parent_id = $one->id;
//        return $leap;
        return view('admin.pages.menu_top.show' , [
            'menus' => $menus,
            'leap' => $leap,
            'parent_id' => $parent_id,
            'parent' => $one
        ]);
    }

    public function change_eye_menu(Request $request){
        $menu = MenuTop::find($request->menu_id);
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
        $menu = MenuTop::find($id);
        if($menu){
            $menu->name_uz = $request->name_uz;
            $menu->name_ru = $request->name_ru;
            $menu->name_en = $request->name_en;
            $menu->update();
            return redirect()->back()->with('success' , 'Malumot o`zgartirildi');
        }
    }

    public function store(Request $request){
        $validator = Validator::make($request->all() , [
            'parent_id' => ['required'],
            'leap' => ['required'],
            'name_uz' => ['required'],
            'name_ru' => ['required'],
            'name_en' => ['required'],
        ]);
        if ($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $menu = new MenuTop();
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_en = $request->name_en;
        $menu->leap = $request->leap;
        $menu->parent_id = $request->parent_id;
        $menu->dynamik = 1;
        $menu->type = 1;
        $menu->status = 1;
        $menu->save();
        $menu->order = $menu->id;
        $menu->update();
        return redirect()->back()->with('success' , 'Menyu qo`shildi');
//        return $request;
    }

    public function update(Request $request , $id){
        $menu = MenuTop::find($id);
        $menu->name_uz = $request->name_uz;
        $menu->name_ru = $request->name_ru;
        $menu->name_en = $request->name_en;
        $menu->update();
        return redirect()->back()->with('success' , 'Malumot ozgartirildi');
    }

    public function delete(Request $request){
        $menu = MenuTop::find($request->id);
        $menu->delete();
//        return $menu;
        return redirect()->back()->with('success' , 'Malumot ochirildi');
    }
    public function move_up($id){
        $menu = MenuTop::find($id);
//        return $menu;
        if($menu){
            $upper = MenuTop::where('status' , $menu->status)->where('leap' , $menu->leap)->where('parent_id' , $menu->parent_id)->where('order' , '<' , $menu->order)->orderBy('order' , 'DESC')->get();
//            return $upper;
            if(count($upper)){
                $upper_one = $upper[0];
                $lll = $upper_one->order;
                $upper_one->order = $menu->order;
                $menu->order = $lll;
                $upper_one->update();
                $menu->update();
                return redirect()->back();
            }
            else{
                return redirect()->back();
            }
        }
    }
    public function move_down($id){
        $menu = MenuTop::find($id);
        if($menu){
            $upper = MenuTop::where('status' , $menu->status)->where('leap' , $menu->leap)->where('parent_id' , $menu->parent_id)->where('order' , '>' , $menu->order)->orderBy('order' , 'ASC')->get();
            if(count($upper)){
                $upper_one = $upper[0];
                $lll = $upper_one->order;
                $upper_one->order = $menu->order;
                $menu->order = $lll;
                $upper_one->update();
                $menu->update();
                return redirect()->back();
            }
            else{
                return redirect()->back();
            }
        }
    }
}
