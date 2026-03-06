<?php

namespace App\Http\Controllers\Admin;

use App\AcademikTitle;
use App\Http\Controllers\Controller;

use App\SliderImage;
use App\SliderText;
use App\SystemCard;
use App\Teacher;
use App\TeacherDegree;
use App\TeachersBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminTeacherController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $teachers = Teacher::all();
        return view('admin.pages.superadmin_teachers.index', [
            'data' => $teachers
        ]);
    }

    public function create()
    {
        $degrees = TeacherDegree::all();
        $academic_titles = AcademikTitle::all();
        return view('admin.pages.superadmin_teachers.create', ['degrees' => $degrees, 'academic_titles' => $academic_titles]);
    }


    public function show($id)
    {
        $teacher = Teacher::find($id);
//        return $teacher;
        if ($teacher) {
            return view('admin.pages.superadmin_teachers.show', [
                'data' => $teacher
            ]);
        }
    }


    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        if ($teacher) {
            $articles = $teacher->articles;
            foreach ($articles as $article) {
                $article->delete();
            }
            $teacher->delete();
            return redirect()->back()->with('success', 'Malumot ochirildi');
        }
        return redirect()->back()->with('error', 'Malumot topilmadi');
    }

    public function banner_index()
    {
//        return "dsd";
        $banners = TeachersBanner::orderBy('id' , 'DESC')->get();
        return view('admin.pages.superadmin_teachers.banner.index', [
            'data' => $banners
        ]);
    }

    public function banner_create()
    {
//        return "Dsd";
        return view('admin.pages.superadmin_teachers.banner.create');
    }

    public function banner_store(Request $request)
    {
//        return $request;
        $request->validate([
            'title_uz' => ['required', 'string'],
            'content_uz' => ['required', 'string'],
        ], [
            'title_uz.required' => 'Title maydonini to`ldiring',
            'content_uz.required' => 'Content maydonini to`ldiring'
        ]);
        $new_banner = new TeachersBanner();
        $new_banner->title_uz = $request->title_uz;
        $new_banner->title_ru = $request->title_uz;
        $new_banner->title_en = $request->title_uz;
        $new_banner->content_uz = $request->content_uz;
        $new_banner->content_ru = $request->content_uz;
        $new_banner->content_en = $request->content_uz;
        if ($request->title_ru != '') $new_banner->title_ru = $request->title_ru;
        if ($request->title_en != '') $new_banner->title_en = $request->title_en;
        if ($request->content_ru != '') $new_banner->content_ru = $request->content_ru;
        if ($request->content_en != '') $new_banner->content_en = $request->content_en;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path() . '/teachers/banners', $file_name);
            $new_banner->image = 'teachers/banners/' . $file_name;
        }
        $new_banner->save();
        return redirect()->back()->with('success' , 'Ma`lumot saqlandi');
        return $request;
    }

    public function banner_edit ($id)
    {
        $banner = TeachersBanner::find($id);
        if ($banner){
            return view('admin.pages.superadmin_teachers.banner.edit' , [
                'data' => $banner
            ]);
        }
        else{
            return response('' , 404);
        }
    }
    public function banner_update(Request $request,$id)
    {
        $request->validate([
            'title_uz' => ['required', 'string'],
            'content_uz' => ['required', 'string'],
        ], [
            'title_uz.required' => 'Title maydonini to`ldiring',
            'content_uz.required' => 'Content maydonini to`ldiring'
        ]);
        $new_banner = TeachersBanner::find($id);
        $new_banner->title_uz = $request->title_uz;
        $new_banner->title_ru = $request->title_uz;
        $new_banner->title_en = $request->title_uz;
        $new_banner->content_uz = $request->content_uz;
        $new_banner->content_ru = $request->content_uz;
        $new_banner->content_en = $request->content_uz;
        if ($request->title_ru != '') $new_banner->title_ru = $request->title_ru;
        if ($request->title_en != '') $new_banner->title_en = $request->title_en;
        if ($request->content_ru != null) $new_banner->content_ru = $request->content_ru;
        if ($request->content_en != null) $new_banner->content_en = $request->content_en;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $file->move(public_path() . '/teachers/banners', $file_name);
            $new_banner->image = 'teachers/banners/' . $file_name;
        }
        $new_banner->save();
        return redirect(route('superadmin.teachers.banner'))->with('success' , 'Ma`lumot saqlandi');
    }

    public function banner_change_stats($id)
    {
        $banner = TeachersBanner::find($id);
        if ($banner){
            $others = TeachersBanner::where('id' , '!=' , $banner->id)->update(['status' => 0]);
            $banner->status = 1;
            $banner->update();
            return redirect(route('superadmin.teachers.banner'))->with('success' , 'Malumot saqlandi');
        }
        else{
            return response('' , 404);
        }

    }
    public function banner_destroy ($id)
    {
        $banner = TeachersBanner::find($id);
        if ($banner){
            $banner->delete();
            return redirect(route('superadmin.teachers.banner'))->with('success' , 'Malumot o`chirildi');
        }
        else{
            return response('' , 404);

        }
    }

}
