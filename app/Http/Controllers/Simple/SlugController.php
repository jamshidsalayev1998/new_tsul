<?php

namespace App\Http\Controllers\Simple;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Page;
use App\SliderImage;

use App\SliderText;
use App\SystemCard;
use Illuminate\Http\Request;

class SlugController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($slug){
//        return $slug;
        if (Page::where('slug' , $slug)->exists()){
            $menus = Menu::where('leap' , 0)->get();
            $content = Page::where('slug' , $slug)->first();
            $menu = Menu::where('slug' , '/general-page/'.$slug)->first();
//            return $menu;
            if ($menu->has_child()){
                $links = $menu->childs();
            }
            else{
                $links = Menu::where('parent_id' , $menu->parent_id)->where('leap' , $menu->leap)->get();
            }
            return view('simple.general_page' , [
                'content' => $content,
                'menu' => $menu,
                'links' => $links
            ]);
        }
        else{
            abort(404);
        }

    }
}
