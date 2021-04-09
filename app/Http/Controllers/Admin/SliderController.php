<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\SliderImage;
use App\SeperatelyOneNew;
use App\SliderText;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $slider_images = SliderImage::all();
        $slider_text = SliderText::where('status' , 1)->first();
        return view('admin.pages.slider.index',[
            'slider_images' => $slider_images,
            'slider_texts' => $slider_text
        ]);
    }

    public function store(Request $request){
        $text = SliderText::where('status' , 1)->first();
        $text->text_uz = $request->text_uz;
        $text->text_ru = $request->text_ru;
        $text->text_en = $request->text_en;
        $text->email = $request->email;
        $text->phone = $request->phone;
        $text->link = $request->link;
        $text->update();
        return redirect()->back()->with('success' , 'Saqlandi');
    }

     public function separately_index(){
        $has = 0;
        if (SeperatelyOneNew::where('status' , 1)->orderBy('id' , 'DESC')->exists()){
            $sep = SeperatelyOneNew::where('status' , 1)->orderBy('id' , 'DESC')->first();
            $has = 1;
        }
        else{
            $sep = new SeperatelyOneNew();
        }
        return view('admin.pages.separately.index' , [
            'data' => $sep,
            'has' => $has
        ]);
    }
    public function separately_store(Request $request){
        if($request->has){
            $sep = SeperatelyOneNew::find($request->data_id);
        }
        else{
            $sep = new SeperatelyOneNew();
        }
//        return $sep;
        $sep->status = 1;
        $sep->title_uz = $request->title_uz;
        $sep->title_ru = $request->title_ru;
        $sep->title_en = $request->title_en;
        $sep->content_uz = $request->content_uz;
        $sep->content_ru = $request->content_ru;
        $sep->content_en = $request->content_en;
        $sep->save();
        return redirect()->back()->with('success' , 'Malumot qoshildi');
    }
}
