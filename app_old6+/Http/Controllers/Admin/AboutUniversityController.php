<?php

namespace App\Http\Controllers\Admin;
use App\AboutUniversity;
use App\Http\Controllers\Controller;

use App\Menu;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class AboutUniversityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $about = AboutUniversity::first();
        return view('admin.pages.about_university.index' , [
            'about' => $about
        ]);
    }
    public function randomPassword($c) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $c; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function update(Request $request){
        $about = AboutUniversity::where('status' , 1)->first();
        $about->name_uz = $request->name_uz;
        $about->name_ru = $request->name_ru;
        $about->name_en = $request->name_en;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->address_uz = $request->address_uz;
        $about->address_ru = $request->address_ru;
        $about->address_en = $request->address_en;
        $about->faks = $request->faks;
        $about->twitter = $request->twitter;
        $about->telegram = $request->telegram;
        $about->youtube = $request->youtube;
        $about->instagram = $request->instagram;
        $about->facebook = $request->facebook;
        $about->short_description_uz = $request->short_description_uz;
        $about->short_description_ru = $request->short_description_ru;
        $about->short_description_en = $request->short_description_en;
        $about->full_information_uz = $request->full_information_uz;
        $about->full_information_ru = $request->full_information_ru;
        $about->full_information_en = $request->full_information_en;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $full_name = $this->randomPassword(15).'.'.$ext;
            $file->move('/images/about_university' , $full_name);
            $with_path = 'images/about_university/'.$full_name;
            $about->image = $with_path;
        }
        $about->update();
        return redirect()->back()->with('success', 'Malumot yangilandi');
        return $request;
    }

    public function store(Request $request){

    }
}
