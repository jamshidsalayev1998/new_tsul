<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\SliderImage;
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
}
