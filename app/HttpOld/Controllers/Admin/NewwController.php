<?php

namespace App\Http\Controllers\Admin;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class NewwController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $news  = Neww::orderBy('date' , 'DESC')->get();
        return view('admin.pages.news.index' , [
            'news' => $news
        ]);
    }

    public function create(){
        $types = NewwType::isset()->get();
        $hashtags = Hashtag::all();
        return view('admin.pages.news.create' , [
            'types' => $types,
            'hashtags' => $hashtags
        ]);
    }

    public function file_name($name){
        $name2 = $name.date('s').'_'.date('i').'_'.date('h').'_'.date('d').'_'.date('m');
        return $name2;
    }
    public function edit($id){
        $types = NewwType::isset()->get();
        $hashtags = Hashtag::all();
        $new =  Neww::find($id);
        return view('admin.pages.news.edit' , [
            'types' => $types,
            'hashtags' => $hashtags,
            'data' => $new
        ]);
    }
    public function store(Request $request){
//        return $request;
        $request_array = $request->all();
        foreach ($request_array as $key => $value) {
            if ($value == "<p><br data-cke-filler=\"true\"></p>"){
                $request_array[$key] = null;
            }
        }
        $request->merge($request_array);
        $request->validate([
            'content_uz' => ['required'],
            'content_ru' => ['required'],
            'content_en' => ['required'],
            'title_uz' => ['required'],
            'title_ru' => ['required'],
            'title_en' => ['required'],
            'short_info_uz' => ['required'],
            'short_info_ru' => ['required'],
            'short_info_en' => ['required'],
            'date' => ['required' , 'date'],
            'type_id' => ['required'],
        ]);
        $new = new Neww();
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->date = $request->date;
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
            $new->image_uz = 'images/default-news-image.png';
            $new->image_ru = 'images/default-news-image.png';
            $new->image_en = 'images/default-news-image.png';
        }
        $new->save();
        return redirect(route('admin.neww.index'))->with('success' , 'Malumot saqlandi');
        return $request;
    }
    public function update(Request $request , $id){
//        return $request;
        $request_array = $request->all();
        foreach ($request_array as $key => $value) {
            if ($value == "<p><br data-cke-filler=\"true\"></p>"){
                $request_array[$key] = null;
            }
        }
        $request->merge($request_array);
        $request->validate([
            'content_uz' => ['required'],
            'content_ru' => ['required'],
            'content_en' => ['required'],
            'title_uz' => ['required'],
            'title_ru' => ['required'],
            'title_en' => ['required'],
            'short_info_uz' => ['required'],
            'short_info_ru' => ['required'],
            'short_info_en' => ['required'],
            'date' => ['required' , 'date'],
            'type_id' => ['required'],
        ]);
        $new =  Neww::find($id);
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
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
        return redirect(route('admin.neww.index'))->with('success' , 'Malumot ozgartirildi');
        return $request;
    }

    public function destroy(Request $request){
        $news = Neww::find($request->id);
        $news->delete();
        return redirect()->back()->with('success' , 'Malumot ochirildi');
        return $request;
    }

    public function change_status($id){
        $new = Neww::find($id);
        if ($new){
            if ($new->status){
                $new->status = 0;
                $new->update();
                return 0;
            }
            else{
                $new->status = 1;
                $new->update();
                return 1;
            }
        }
    }


}
