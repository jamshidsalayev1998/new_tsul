<?php

namespace App\Http\Controllers\Admin;
use App\Course;
use App\Group;
use App\Http\Controllers\Controller;

use App\Menu;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TimeTableController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $courses = Course::all();
        return view('admin.pages.timetable.lesson.index' , [
            'data'=> $courses
        ]);
//        return $courses;
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

    public function group_store(Request $request){
        $request->validate([
            'name' => ['required'],
            'faculty_id' => ['required' , 'exists:faculties,id'],
        ]);
        $new_g = new Group();
        $new_g->name = $request->name;
        $new_g->faculty_id = $request->faculty_id;
        $new_g->course_id = $request->course_id;
        if ($request->hasFile('timetable_file')){
            $file = $request->file('timetable_file');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
            $file->move(public_path().'/timetable' , $new_name);
            $new_g->timetable_file = 'timetable/'.$new_name;
        }
        if ($request->hasFile('timetable_session_file')){
            $file = $request->file('timetable_session_file');
            $file_ext = $file->getClientOriginalExtension();
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
            $file->move(public_path().'/timetable' , $new_name);
            $new_g->timetable_session_file = 'timetable/'.$new_name;
        }
//        return $new_g;
        $new_g->save();
        return redirect()->back()->with('success' , 'Malumot saqlandi');

    }
    public function group_update(Request $request){
        $request->validate([
            'name' => ['required'],
            'faculty_id' => ['required' , 'exists:faculties,id'],
        ]);
        $gr = Group::find($request->group_id);
        if($gr){
            $gr->name = $request->name;
            $gr->faculty_id = $request->faculty_id;
            if ($request->hasFile('timetable_file')){
                if (File::exists(public_path().'/'.$gr->timetable_file)){
                    File::delete(public_path().'/'.$gr->timetable_file);
                }
                $file = $request->file('timetable_file');
                $file_ext = $file->getClientOriginalExtension();
                $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
                $file->move(public_path().'/timetable' , $new_name);
                $gr->timetable_file = 'timetable/'.$new_name;
            }
            if ($request->hasFile('timetable_session_file')){
                if (File::exists(public_path().'/'.$gr->timetable_session_file)){
                    File::delete(public_path().'/'.$gr->timetable_session_file);
                }
                $file = $request->file('timetable_session_file');
                $file_ext = $file->getClientOriginalExtension();
                $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
                $file->move(public_path().'/timetable' , $new_name);
                $gr->timetable_session_file = 'timetable/'.$new_name;
            }
            $gr->update();
            return redirect()->back()->with('success' , 'Malumot ozgartirildi');
        }
    }

    public function group_delete_file($id , $type){
        $group = Group::find($id);
        if ($group){
            if ($type == 1){
                $tt = 'timetable_file';
            }
            else{
                $tt = 'timetable_session_file';

            }
            if (File::exists(public_path().'/'.$group->$tt)){
                File::delete(public_path().'/'.$group->$tt);
                $group->$tt = null;
                $group->update();
            }
            return redirect()->back()->with('success' , 'Amal bajarildi');

        }
        else{
        }
    }

    public function group_delete(Request $request){
        $group = Group::find($request->id);
        if($group){
            $group->delete();
        }
        return redirect()->back()->with('success' , 'Malumot ochirildi');
    }


}
