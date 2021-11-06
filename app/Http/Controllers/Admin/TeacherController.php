<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\SliderImage;
use App\SliderText;
use App\SystemCard;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('admin.pages.teachers.index' , [
            'data' => $teachers
        ]);
    }

    public function create(){
        return view('admin.pages.teachers.create');
    }

    public function store(Request $request){
//        return $request;
        Validator::make($request->all() , [
            'general_info_uz' => ['required' , 'string'],
            'contact_info_uz' => ['required' , 'string'],
        ]);
        $new_teacher = new Teacher();
        $new_teacher->general_info_uz = $request->general_info_uz;
        $new_teacher->contact_info_uz = $request->contact_info_uz;
        $new_teacher->general_info_ru?$new_teacher->general_info_ru = $request->general_info_ru:$new_teacher->general_info_ru = $request->general_info_uz;
        $new_teacher->contact_info_ru?$new_teacher->contact_info_ru = $request->contact_info_ru:$new_teacher->contact_info_ru = $request->contact_info_uz;
    }
}
