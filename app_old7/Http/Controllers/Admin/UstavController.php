<?php

namespace App\Http\Controllers\Admin;
use App\Course;
use App\Group;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Ustav;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UstavController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $data = Ustav::all();
        return view('admin.pages.ustav.index' , [
            'data' => $data
        ]);
        return $data;
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
//        return $request;
        $new = new Ustav();
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        if ($request->hasFile('file_uz')){
            $file = $request->file('file_uz');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
            $file->move(public_path().'/ustav_files' , $new_name);
            $full = 'ustav_files/'.$new_name;
            $new->file_uz = $full;
            $new->file_ru = $full;
            $new->file_en = $full;
        }
        if ($request->hasFile('file_ru')){
            $file = $request->file('file_ru');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
            $file->move(public_path().'/ustav_files' , $new_name);
            $full = 'ustav_files/'.$new_name;
            if (!$new->file_uz){
                $new->file_uz = $full;
            }
            $new->file_ru = $full;
            $new->file_en = $full;
        }
        if ($request->hasFile('file_en')){
            $file = $request->file('file_en');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
            $file->move(public_path().'/ustav_files' , $new_name);
            $full = 'ustav_files/'.$new_name;
            if (!$new->file_uz){
                $new->file_uz = $full;
            }
             if (!$new->file_ru){
                $new->file_ru = $full;
            }
             $new->file_en = $full;
        }
        $new->status = 1;
        $new->save();
        return redirect()->back()->with('success' , 'Malumot saqlandi');
    }

    public function destroy($id){
        $us = Ustav::find($id);
        if (File::exists(public_path().'/'.$us->file_uz)){
            File::delete(public_path().'/'.$us->file_uz);
        }
        if (File::exists(public_path().'/'.$us->file_ru)){
            File::delete(public_path().'/'.$us->file_ru);
        }
        if (File::exists(public_path().'/'.$us->file_en)){
            File::delete(public_path().'/'.$us->file_en);
        }
        $us->delete();
        return redirect()->back()->with('success' , 'Malumot ochirildi');
    }

}
