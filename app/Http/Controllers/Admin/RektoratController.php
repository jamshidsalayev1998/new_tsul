<?php

namespace App\Http\Controllers\Admin;
use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\Rektorat;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class RektoratController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $persons = Rektorat::orderBy('id' , 'ASC')->get();
        return view('admin.pages.rektorat.index' , [
            'data' => $persons
        ]);
    }

    public function create(){
        return view('admin.pages.rektorat.create');
    }
    public function edit($id){
        $rektorat = Rektorat::find($id);
        return view('admin.pages.rektorat.edit' , [
            'data' => $rektorat
        ]);
    }
    public function file_name($name){
        $name2 = $name.date('s').'_'.date('i').'_'.date('h').'_'.date('d').'_'.date('m');
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
        return $request;
        $rektorat = new Rektorat();
        $rektorat->full_name_uz = $request->full_name_uz;
        $rektorat->full_name_ru = $request->full_name_ru;
        $rektorat->full_name_en = $request->full_name_en;
        $rektorat->content_uz = $request->content_uz;
        $rektorat->content_ru = $request->content_ru;
        $rektorat->content_en = $request->content_en;
        $rektorat->type_name_uz = $request->type_name_uz;
        $rektorat->type_name_ru = $request->type_name_ru;
        $rektorat->type_name_en = $request->type_name_en;
        $rektorat->address_uz = $request->address_uz;
        $rektorat->address_ru = $request->address_ru;
        $rektorat->address_en = $request->address_en;
        $rektorat->academic_title_uz = $request->academic_title_uz;
        $rektorat->academic_title_ru = $request->academic_title_ru;
        $rektorat->academic_title_en = $request->academic_title_en;
        $rektorat->academic_degree_uz = $request->academic_degree_uz;
        $rektorat->academic_degree_ru = $request->academic_degree_ru;
        $rektorat->academic_degree_en = $request->academic_degree_en;
        $rektorat->email = $request->email;
        $rektorat->phone1 = $request->phone1;
        $rektorat->phone2 = $request->phone2;
        $rektorat->phone3 = $request->phone3;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$ext;
            $file->move(public_path().'/about_university' , $new_name);
            $rektorat->image = 'about_university/'.$new_name;
        }
        $rektorat->save();
        return redirect()->back()->with('success' , 'Malumot saqlandi');

    }
    public function update(Request $request){
//        return $request;
        $rektorat =  Rektorat::find($request->data_id);
        $rektorat->full_name_uz = $request->full_name_uz;
        $rektorat->full_name_ru = $request->full_name_ru;
        $rektorat->full_name_en = $request->full_name_en;
        $rektorat->content_uz = $request->content_uz;
        $rektorat->content_ru = $request->content_ru;
        $rektorat->content_en = $request->content_en;
        $rektorat->type_name_uz = $request->type_name_uz;
        $rektorat->type_name_ru = $request->type_name_ru;
        $rektorat->type_name_en = $request->type_name_en;
        $rektorat->address_uz = $request->address_uz;
        $rektorat->address_ru = $request->address_ru;
        $rektorat->address_en = $request->address_en;
        $rektorat->academic_title_uz = $request->academic_title_uz;
        $rektorat->academic_title_ru = $request->academic_title_ru;
        $rektorat->academic_title_en = $request->academic_title_en;
        $rektorat->academic_degree_uz = $request->academic_degree_uz;
        $rektorat->academic_degree_ru = $request->academic_degree_ru;
        $rektorat->academic_degree_en = $request->academic_degree_en;
        $rektorat->email = $request->email;
        $rektorat->phone1 = $request->phone1;
        $rektorat->phone2 = $request->phone2;
        $rektorat->phone3 = $request->phone3;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$ext;
            $file->move(public_path().'/about_university' , $new_name);
            $rektorat->image = 'about_university/'.$new_name;
        }
        $rektorat->update();
        return redirect()->back()->with('success' , 'Malumot saqlandi');

    }

    public function move_up($id){
        $rek = Rektorat::find($id);
        $tepadagi = Rektorat::where('id' , '<' , $rek->id)->orderBy('id' , 'DESC')->first();
        if ($tepadagi){
            $oo = $rek->id;
            $rek->id = $tepadagi->id;
            $tepadagi->id = 0;
            $tepadagi->update();
            $rek->update();
            $tepadagi->id = $oo;
            $tepadagi->update();
        }
        return redirect()->back()->with('success' , 'Malumot ozgartirildi');
        return $tepadagi;
    }
    public function move_down($id){
        $rek = Rektorat::find($id);
        $tepadagi = Rektorat::where('id' , '>' , $rek->id)->orderBy('id' , 'ASC')->first();
        if ($tepadagi){
            $oo = $rek->id;
            $rek->id = $tepadagi->id;
            $tepadagi->id = 0;
            $tepadagi->update();
            $rek->update();
            $tepadagi->id = $oo;
            $tepadagi->update();
        }
        return redirect()->back()->with('success' , 'Malumot ozgartirildi');
    }



}
