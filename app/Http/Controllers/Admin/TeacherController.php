<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\SliderImage;
use App\SliderText;
use App\SystemCard;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.pages.teachers.index', [
            'data' => $teachers
        ]);
    }

    public function create()
    {
        return view('admin.pages.teachers.create');
    }

    public function store(Request $request)
    {
//        return $request;
        $text = '';
//        !$request->general_info_ru ? $text = 'bor':$text='yoq';
//        return $text;
        $prof = Auth::user()->profession();
        Validator::make($request->all(), [
            'general_info_uz' => ['required', 'string'],
            'contact_info_uz' => ['required', 'string'],
            'fio' => ['required' , 'string'],
            'degree' => ['required' , 'string'],
            'image' => ['required' , 'max:4']
        ]);
        $new_teacher = new Teacher();
        $new_teacher->general_info_uz = $request->general_info_uz;
        $new_teacher->contact_info_uz = $request->contact_info_uz;

        $request->general_info_ru ? $new_teacher->general_info_ru = $request->general_info_ru : $new_teacher->general_info_ru = $request->general_info_uz;
        $request->contact_info_ru ? $new_teacher->contact_info_ru = $request->contact_info_ru : $new_teacher->contact_info_ru = $request->contact_info_uz;

        $request->general_info_en ? $new_teacher->general_info_en = $request->general_info_en : $new_teacher->general_info_en = $request->general_info_uz;
        $request->contact_info_en ? $new_teacher->contact_info_en = $request->contact_info_en : $new_teacher->contact_info_en = $request->contact_info_uz;
        $new_teacher->kafedra_id = $prof->kafedra_id;

        $new_teacher->fio = $request->fio;
        $new_teacher->degree = $request->degree;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_name = pathinfo($file_name, PATHINFO_FILENAME);
            $file_ext = $file->getClientOriginalExtension();
            $file_name = str_replace(' ','_' , $file_name);
            $file_name = str_replace('\'','' , $file_name);
            $file_name = str_replace('`','' , $file_name);
            $file_name = $file_name.date('d').date('h').date('i');
            $file->move('teachers' , $file_name.'.'.$file_ext);
            $new_teacher->image = '/teachers/'.$file_name.'.'.$file_ext;
        }
        $new_teacher->save();
//        return $new_teacher;
        return redirect()->back()->with('success', 'Malumot saqlandi');
    }

    public function show($id){
        $teacher = Teacher::find($id);
        if ($teacher){
            return view('admin.pages.teachers.show' , [
                'data' => $teacher
            ]);
        }
    }
    public function edit($id){
        $teacher = Teacher::find($id);
        return view('admin.pages.teachers.edit' , [
            'data' => $teacher
        ]);
    }
    public function update(Request  $request , $id){
//        return $request;
        $new_teacher = Teacher::find($id);
        Validator::make($request->all(), [
            'general_info_uz' => ['required', 'string'],
            'contact_info_uz' => ['required', 'string'],
            'fio' => ['required' , 'string'],
            'degree' => ['required' , 'string'],
        ]);
        $new_teacher->general_info_uz = $request->general_info_uz;
        $new_teacher->contact_info_uz = $request->contact_info_uz;

        $request->general_info_ru ? $new_teacher->general_info_ru = $request->general_info_ru : $new_teacher->general_info_ru = $request->general_info_uz;
        $request->contact_info_ru ? $new_teacher->contact_info_ru = $request->contact_info_ru : $new_teacher->contact_info_ru = $request->contact_info_uz;

        $request->general_info_en ? $new_teacher->general_info_en = $request->general_info_en : $new_teacher->general_info_en = $request->general_info_uz;
        $request->contact_info_en ? $new_teacher->contact_info_en = $request->contact_info_en : $new_teacher->contact_info_en = $request->contact_info_uz;

        $new_teacher->fio = $request->fio;
        $new_teacher->degree = $request->degree;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file_name = pathinfo($file_name, PATHINFO_FILENAME);
            $file_ext = $file->getClientOriginalExtension();
            $file_name = str_replace(' ','_' , $file_name);
            $file_name = str_replace('\'','' , $file_name);
            $file_name = str_replace('`','' , $file_name);
            $file_name = $file_name.date('d').date('h').date('i');
            $file->move('teachers' , $file_name.'.'.$file_ext);
            $new_teacher->image = '/teachers/'.$file_name.'.'.$file_ext;
        }
        $new_teacher->save();
//        return $new_teacher;
        return redirect(route('teachers.show' , ['teacher' => $new_teacher->id]))->with('success', 'Malumot saqlandi');
    }
}
