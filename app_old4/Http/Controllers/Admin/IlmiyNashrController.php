<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\IlmiyNashr;

class IlmiyNashrController extends Controller
{
   public function index(){
        $faculties = IlmiyNashr::all();
        return view('admin.pages.ilmiy_nashr.index' , [
            'data' => $faculties
        ]);
    }
    public function create(){
        return view('admin.pages.ilmiy_nashr.create');
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
    public function store(Request $request){
        $new = new IlmiyNashr();
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->save();
        return redirect(route('admin_ilmiy_nashr.index'))->with('success' , 'Malumot saqlandi');
        return $request;
    }
    public function update(Request $request , $id){
        $new = IlmiyNashr::find($id);
        $new->type_id = $request->type_id;
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->short_info_uz = $request->short_info_uz;
        $new->short_info_ru = $request->short_info_ru;
        $new->short_info_en = $request->short_info_en;
        $new->update();
        return redirect(route('admin_ilmiy_nashr.index'))->with('success' , 'Malumot ozgartirildi');
        return $request;
    }


    public function edit($id){
        $faculty = IlmiyNashr::find($id);
        return view('admin.pages.ilmiy_nashr.edit' , [
            'data' => $faculty
        ]);
        return $faculty;
    }

    public function destroy($id){
        $section = IlmiyNashr::find($id);
        $section->delete();
        return redirect()->back()->with('success' , 'O`chirildi');
    }
}
