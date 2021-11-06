<?php

namespace App\Http\Controllers\Admin;
use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\SeperatelyOneNew;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class AnnouncesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $news  = Announce::all();
        return view('admin.pages.announces.index' , [
            'news' => $news
        ]);
    }

    public function create(){
        $types = NewwType::all();
        $hashtags = Hashtag::all();
        return view('admin.pages.announces.create' , [
            'types' => $types,
            'hashtags' => $hashtags
        ]);
    }

    public function file_name($name){
        $name = date('s').'_'.date('i').'_'.date('h').'_'.date('d').'_'.date('m');
    }
    public function edit($id){
        $types = NewwType::all();
        $hashtags = Hashtag::all();
        $new =  Announce::find($id);
        return view('admin.pages.announces.edit' , [
            'types' => $types,
            'hashtags' => $hashtags,
            'data' => $new
        ]);
    }
    public function store(Request $request){
//        return $request;
        $new = new Announce();
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->event = $request->event;
        if ($request->date){

        $new->date = $request->date;
        }
        $new->date = date('Y-m-d');
        $new->type_id = $request->type_id;
        if (isset($request->hashtags)){

        }
        $has_image = 0;
        if ($request->hasFile('image_uz')){
            $file = $request->file('image_uz');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path().'/images/news' , $file_name);
            $new->image_uz = 'images/news/'.$file_name;
            $new->image_ru = 'images/news/'.$file_name;
            $new->image_en = 'images/news/'.$file_name;
            $has_image = 1;
        }
        if ($request->hasFile('image_ru')){
            $file = $request->file('image_ru');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path().'/images/news' , $file_name);
            if($new->image_uz == null){
                $new->image_uz = 'images/news/'.$file_name;
            }
            $new->image_ru = 'images/news/'.$file_name;
            $new->image_en = 'images/news/'.$file_name;
            $has_image = 1;
        }
        if ($request->hasFile('image_en')){
            $file = $request->file('image_en');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path().'/images/news' , $file_name);
            if($new->image_uz == null){
                $new->image_uz = 'images/news/'.$file_name;
            }
            if($new->image_ru == null){
                $new->image_ru = 'images/news/'.$file_name;
            }
            $new->image_en = 'images/news/'.$file_name;
            $has_image = 1;
        }
        if (!$has_image){
            $new->image_uz = '/images/default-news-image.png';
            $new->image_ru = '/images/default-news-image.png';
            $new->image_en = '/images/default-news-image.png';
        }
        $new->save();
        return redirect()->back()->with('success' , 'Malumot saqlandi');
        return $request;
    }
    public function update(Request $request , $id){
        $new =  Announce::find($id);
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->event = $request->event;
        $new->date = $request->date;
        $new->type_id = $request->type_id;
        if (isset($request->hashtags)){

        }
        if ($request->hasFile('image_uz')){
            $file = $request->file('image_uz');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path().'/images/news' , $file_name);
            $new->image_uz = 'images/news/'.$file_name;
            $has_image = 1;
        }
        if ($request->hasFile('image_ru')){
            $file = $request->file('image_ru');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path().'/images/news' , $file_name);

            $new->image_ru = 'images/news/'.$file_name;
            $has_image = 1;
        }
        if ($request->hasFile('image_en')){
            $file = $request->file('image_en');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path().'/images/news' , $file_name);

            $new->image_en = 'images/news/'.$file_name;
            $has_image = 1;
        }

        $new->update();
        return redirect()->back()->with('success' , 'Malumot ozgartirildi');
        return $request;
    }

    public function destroy(Request $request){
        $news = Announce::find($request->id);
        $news->delete();
        return redirect()->back()->with('success' , 'Malumot ochirildi');
        return $request;
    }




}
