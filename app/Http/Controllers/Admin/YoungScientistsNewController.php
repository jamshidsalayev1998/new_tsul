<?php

namespace App\Http\Controllers\Admin;
use App\Course;
use App\Group;
use App\Http\Controllers\Controller;

use App\Menu;
use App\YoungScientistsNew;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class YoungScientistsNewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $news = YoungScientistsNew::all();
        return view('admin.pages.scientists_news.index' , [
            'data' => $news
        ]);
        return $news;
    }

    public function create(){
        return view('admin.pages.scientists_news.create' );
    }

    public function store(Request $request){
//        return $request;
        $new = new YoungScientistsNew();
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        if ($request->date == null){
            $new->date = date('Y-m-d');
        }
        else{
            $new->date = $request->date;
        }
        $new->save();
        return redirect(route('admin_young_scientist_new.index'))->with('success' , 'Malumot saqlandi');
    }
    public function update(Request $request , $id){
//        return $request;
        $new =  YoungScientistsNew::find($id);
        $new->title_uz = $request->title_uz;
        $new->title_ru = $request->title_ru;
        $new->title_en = $request->title_en;
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        if ($request->date == null){
            $new->date = date('Y-m-d');
        }
        else{
            $new->date = $request->date;
        }
        $new->update();
        return redirect()->back()->with('success' , 'Malumot saqlandi');
    }

    public function destroy($id){
        $new = YoungScientistsNew::find($id);
        if ($new){
            $new->delete();
        }
        return redirect()->back()->with('success' , 'Malumot ochirildi');
    }

    public function edit($id){
        $new = YoungScientistsNew::find($id);
        if ($new){
            return view('admin.pages.scientists_news.edit' , [
                'data' => $new
            ]);
        }
    }

    public function file_name($name){
            $name2 =$name.date('s').'_'.date('i').'_'.date('h').'_'.date('d').'_'.date('m');
            return $name2;
     }
     public function randomPassword_alpha($count) {
        $alphabet = 'abcdefghjkmnpqrstuvwxyz';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $count; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function change_status($id){
        $new = YoungScientistsNew::find($id);
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
