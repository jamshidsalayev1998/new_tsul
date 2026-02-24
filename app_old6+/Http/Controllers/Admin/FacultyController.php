<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\Faculty;
use App\AdministrationFaculty;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $faculties = Faculty::all();
        return view('admin.pages.faculties.index' , [
            'data' => $faculties
        ]);
    }
    public function create(){
        return view('admin.pages.faculties.create');
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
        $new = new Faculty();
        $new->type_id = $request->type_id;
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->students_uz = $request->students_uz;
        $new->students_ru = $request->students_ru;
        $new->students_en = $request->students_en;
        $new->teachers_uz = $request->teachers_uz;
        $new->teachers_ru = $request->teachers_ru;
        $new->teachers_en = $request->teachers_en;
        $new->directions_uz = $request->directions_uz;
        $new->directions_ru = $request->directions_ru;
        $new->directions_en = $request->directions_en;
        $new->save();
        return redirect(route('admin_faculty.index'))->with('success' , 'Malumot saqlandi');
        return $request;
    }
    public function update(Request $request , $id){
        $new = Faculty::find($id);
        $new->type_id = $request->type_id;
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        $new->content_uz = $request->content_uz;
        $new->content_ru = $request->content_ru;
        $new->content_en = $request->content_en;
        $new->students_uz = $request->students_uz;
        $new->students_ru = $request->students_ru;
        $new->students_en = $request->students_en;
        $new->teachers_uz = $request->teachers_uz;
        $new->teachers_ru = $request->teachers_ru;
        $new->teachers_en = $request->teachers_en;
        $new->directions_uz = $request->directions_uz;
        $new->directions_ru = $request->directions_ru;
        $new->directions_en = $request->directions_en;
        $new->update();
        return redirect(route('admin_faculty.index'))->with('success' , 'Malumot ozgartirildi');
        return $request;
    }

    public function administration_index($id){
        $faculty = Faculty::find($id);
        if ($faculty){
            $admin = AdministrationFaculty::where('faculty_id' , $faculty->id)->get();
            return view('admin.pages.faculties.administration.index' , [
                'data' => $admin,
                'faculty' => $faculty
            ]);
        }
    }

    public function administration_create($id){
        $faculty = Faculty::find($id);
        if ($faculty){
            return view('admin.pages.faculties.administration.create' , [
                'faculty' => $faculty
            ]);
        }
    }

    public function administration_edit($id){
        $adm = AdministrationFaculty::find($id);
        if ($adm){
            return view('admin.pages.faculties.administration.edit' , [
                'data' => $adm
            ]);
        }
    }

    public function administration_store(Request $request){
        $new = new AdministrationFaculty();
        $new->phone = $request->phone;
        $new->email = $request->email;
        $new->faks = $request->faks;
        $new->address_uz = $request->address_uz;
        $new->address_ru = $request->address_ru;
        $new->address_en = $request->address_en;
        $new->full_name_uz = $request->full_name_uz;
        $new->full_name_ru = $request->full_name_ru;
        $new->full_name_en = $request->full_name_en;
        $new->type_name_uz = $request->type_name_uz;
        $new->reception_days_uz = $request->reception_days_uz;
        $new->reception_days_ru = $request->reception_days_ru;
        $new->reception_days_en = $request->reception_days_en;
        $new->labor_activity_uz = $request->labor_activity_uz;
        $new->labor_activity_ru = $request->labor_activity_ru;
        $new->labor_activity_en = $request->labor_activity_en;
        $new->professional_development_uz = $request->professional_development_uz;
        $new->professional_development_ru = $request->professional_development_ru;
        $new->professional_development_en = $request->professional_development_en;
        $new->lessons_uz = $request->lessons_uz;
        $new->lessons_ru = $request->lessons_ru;
        $new->lessons_en = $request->lessons_en;
        $new->scientific_activity_uz = $request->scientific_activity_uz;
        $new->scientific_activity_ru = $request->scientific_activity_ru;
        $new->scientific_activity_en = $request->scientific_activity_en;
        $new->faculty_id = $request->faculty_id;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
            $file->move(public_path().'/images/administration_faculty' , $new_name);
            $new->image = 'images/administration_faculty/'.$new_name;
        }
        $new->save();
        return redirect()->back()->with('success' , 'Malumot saqlandi');
        return $request;
    }

    public function administration_update(Request $request , $id){
        $new = AdministrationFaculty::find($id);
        $new->phone = $request->phone;
        $new->email = $request->email;
        $new->faks = $request->faks;
        $new->address_uz = $request->address_uz;
        $new->address_ru = $request->address_ru;
        $new->address_en = $request->address_en;
        $new->full_name_uz = $request->full_name_uz;
        $new->full_name_ru = $request->full_name_ru;
        $new->full_name_en = $request->full_name_en;
        $new->type_name_uz = $request->type_name_uz;
        $new->reception_days_uz = $request->reception_days_uz;
        $new->reception_days_ru = $request->reception_days_ru;
        $new->reception_days_en = $request->reception_days_en;
        $new->labor_activity_uz = $request->labor_activity_uz;
        $new->labor_activity_ru = $request->labor_activity_ru;
        $new->labor_activity_en = $request->labor_activity_en;
        $new->professional_development_uz = $request->professional_development_uz;
        $new->professional_development_ru = $request->professional_development_ru;
        $new->professional_development_en = $request->professional_development_en;
        $new->lessons_uz = $request->lessons_uz;
        $new->lessons_ru = $request->lessons_ru;
        $new->lessons_en = $request->lessons_en;
        $new->scientific_activity_uz = $request->scientific_activity_uz;
        $new->scientific_activity_ru = $request->scientific_activity_ru;
        $new->scientific_activity_en = $request->scientific_activity_en;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
            $file->move(public_path().'/images/administration_faculty' , $new_name);
            $new->image = 'images/administration_faculty/'.$new_name;
        }
        $new->update();
        return redirect()->back()->with('success' , 'Malumot saqlandi');
        return $request;
    }

    public function administration_delete($id){
        $adm = AdministrationFaculty::find($id);;
        if ($adm){
            $adm->delete();
            return redirect()->back()->with('success' , 'Malumot ochirildi');
        }
    }

    public function edit($id){
        $faculty = Faculty::find($id);
        return view('admin.pages.faculties.edit' , [
            'data' => $faculty
        ]);
        return $faculty;
    }

}
