<?php

namespace App\Http\Controllers\Simple;
use App\Announce;
use App\Course;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\Rektorat;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $courses = Course::all();
        return view('simple.timetable' , [
            'courses' => $courses
        ]);
    }

    public function show($id){

    }



}
