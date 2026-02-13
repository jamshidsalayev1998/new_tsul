<?php

namespace App\Http\Controllers\Simple;

use App\AdditionalFunctions;
use App\Http\Controllers\Controller;
use App\Menu;
use App\MenuTop;
use App\Page;
use App\SliderImage;

use App\SliderText;
use App\SystemCard;
use App\Teacher;
use App\TeachersBanner;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function show($id , $slug){
        $teacher = Teacher::with('articles')->with('teacher_degree:id,name_uz,name_ru,name_en')->with('teacher_academic_title:id,name_uz,name_ru,name_en')->with('kafedra:id,name_uz,name_ru,name_en')->find($id);
         $other_teachers = Teacher::inRandomOrder()->limit(10)->get();
         // biografiyasi
        return view('simple.teacher_article2' , [
            'teacher' => $teacher,
            'other_teachers' => $other_teachers
        ]);
    }
    public function articles_show($id , $slug){
        $teacher = Teacher::with('articles')->with('teacher_degree:id,name_uz,name_ru,name_en')->with('teacher_academic_title:id,name_uz,name_ru,name_en')->with('kafedra:id,name_uz,name_ru,name_en')->find($id);
         $other_teachers = Teacher::inRandomOrder()->limit(10)->get();
         // maqolalari
        return view('simple.teacher_article_show' , [
            'teacher' => $teacher,
            'other_teachers' => $other_teachers
        ]);
    }

    public function index(Request $request)
    {
        $additional = new AdditionalFunctions();
        $teachers = Teacher::where(function($filter) use ($request , $additional){
            if ($additional->department_id_is_not_null($request)){
                $filter->where('kafedra_id' , $request->department_id);
            }
            if ($additional->degree_id_is_not_null($request)){
                $filter->where('degree' , $request->degree_id);
            }
        });
        $count = 20;
        if ($additional->show_count_is_not_null($request)){
            $count = $request->show_count;
        }
        $data = $teachers->orderBy('fio_uz' , 'ASC')->get();
//        return $data;
        $banner = TeachersBanner::where('status' , 1)->first();
        if (!$banner){
            $banner = TeachersBanner::first();
        }
        if (!$banner){
            $banner = new TeachersBanner();
        }
        return view('simple.all_teachers' , [
            'data' => $data,
            'banner' => $banner
        ]);
    }


}
