<?php

namespace App\Http\Controllers\Simple;
use App\Http\Controllers\Controller;
use App\SliderImage;

use App\SliderText;
use App\SystemCard;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $slider_images = SliderImage::where('status' , 1)->get();
        $slider_texts = SliderText::where('status' , 1)->first();
        $system_cards = SystemCard::all();
        return view('simple.index' , [
            'slider_images' => $slider_images,
            'slider_texts' => $slider_texts,
            'system_cards' => $system_cards
        ]);
    }
}
