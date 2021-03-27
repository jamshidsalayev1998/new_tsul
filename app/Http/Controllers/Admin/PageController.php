<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Page;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $data = Page::all();
        return view('admin.pages.pages.index' , [
            'data' => $data
        ]);
    }

    public function create(){
        $menus = Menu::where('slug' , '')->orWhere('slug' , null)->get();
        return view('admin.pages.pages.create' , [
            'menus' => $menus
        ]);
    }

    public function store(Request $request){
//        return $request;
        $new = new Page();
                $slug = $this->clear_slug(trim($request->slug , '/'));
        $new->title = $request->title;
        $new->slug = $slug;
        $start = '<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="row">
';
        $end = ' </div>

                    </div>
                </div>
            </div>
        </div>';
        $new->content_uz = $start.$request->content_uz.$end;
        $new->content_ru = $start.$request->content_ru.$end;
        $new->content_en = $start.$request->content_en.$end;
        $new->save();
        if ($request->menu_id != ""){
            $menu = Menu::find($request->menu_id);
            if ($menu->slug == '' || $menu->slug == null){
                $menu->slug = '/general-page/'.$slug;
                $menu->update();

            }
        }
        return redirect(route('admin.page.index'))->with('success' , 'Malumot qo`shildi');
    }
    public function clear_slug($slug){
        $slug = str_replace('/' , '-' , $slug);
                $slug = str_replace(' ' , '-' , $slug);
                $slug = str_replace('\'' , '-' , $slug);
                $slug = str_replace('"' , '-' , $slug);
                $slug = str_replace('`' , '-' , $slug);
                $slug = str_replace('_' , '-' , $slug);
                $slug = str_replace('%' , '-' , $slug);
                $slug = str_replace('^' , '-' , $slug);
                $slug = str_replace('&' , '-' , $slug);
                $slug = str_replace('*' , '-' , $slug);
                $slug = str_replace('(' , '-' , $slug);
                $slug = str_replace(')' , '-' , $slug);
                $slug = str_replace('+' , '-' , $slug);
                $slug = str_replace('=' , '-' , $slug);
                $slug = str_replace('@' , '-' , $slug);
                $slug = str_replace('!' , '-' , $slug);
                return $slug;
    }
}
