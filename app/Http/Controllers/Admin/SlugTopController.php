<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Menu;
use App\MenuTop;
use App\Page;
use Illuminate\Http\Request;

class SlugTopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id){
        $menu = MenuTop::find($id);
        $clear = 0;
        if ($menu->slug){
            if ($menu->dynamik == 0){
                return redirect('/admin'.$menu->admin_slug);
            }
            $page = Page::where('slug' , str_replace('/general-page/', '',$menu->slug))->first();
            $for_slug =  str_replace('/general-page/', '',$menu->slug);
            $clear = 1;
        }
        else{
            $page = new Page();
            $for_slug = $this->clear_slug($menu->name_ru);
            $for_slug = 'top-menu-'.$this->cry_lat($for_slug);
        }
//        return $page;

        return view('admin.pages.slugs.index_top' , [
            'page' => $page,
            'menu' => $menu,
            'for_slug'  => $for_slug,
            'clear' => $clear
        ]);
        return $id;
    }

    public function cry_lat($word){
        $cyr = [
            'а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п',
            'р','с','т','у','ф','х','ц','ч','ш','щ','ъ','ы','ь','э','ю','я',
            'А','Б','В','Г','Д','Е','Ё','Ж','З','И','Й','К','Л','М','Н','О','П',
            'Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ы','Ь','Э','Ю','Я'
        ];
        $lat = [
            'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya',
            'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p',
            'r','s','t','u','f','h','ts','ch','sh','sht','a','i','y','e','yu','ya'
        ];
        $word = str_replace($cyr, $lat, $word);
        return $word;
    }
    public function clear_slug($slug){
        $slug = str_replace('/' , '' , $slug);
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
                $slug = str_replace(' ' , '-' , $slug);
                if ($slug[0] == '-'){
                    $slug = substr($slug, 1);
                }
                return $slug;
    }

    public function store(Request $request){
        $menu = MenuTop::find($request->menu_id);
//        return $request;
        if (Page::where('id',$request->page_id)->exists()){
            $page = Page::find($request->page_id);
        }
        else{
            $page = new Page();
        }
        $page->content_uz = $request->content_uz;
        $page->content_ru = $request->content_ru;
        $page->content_en = $request->content_en;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->save();
        $menu->slug = '/general-page/'.$request->slug;
        $menu->update();
        return redirect()->back()->with('success' , 'Malumot ozgartirildi');
    }

    public function clear(Request $request){
        $page = Page::find($request->page_id);
        $menu = MenuTop::find($request->menu_id);
        $menu->slug = null;
        $menu->update();
        $page->delete();
        return redirect()->back()->with('success' , 'Malumot ochirildi');
    }
}
