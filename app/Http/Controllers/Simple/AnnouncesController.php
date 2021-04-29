<?php

namespace App\Http\Controllers\Simple;
use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class AnnouncesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $data = Announce::active()->orderBy('date' , 'DESC')->get();
        $types = NewwType::all();
        $news = Neww::orderBy('date' , 'DESC')->get();
        return view('simple.announces' , [
            'data' => $data,
            'announces' => $news,
            'types' => $types
        ]);
        return $data;

    }

    public function show($id){
        $data = Announce::find($id);
        $other = Announce::where('id' , '<>' , $data->id)->orderBy('id' , 'DESC')->get();
        $types = NewwType::all();
        $news = Neww::orderBy('id' , 'DESC')->get();
        return view('simple.announce_show' , [
            'new' => $data,
            'others' => $other,
            'types' => $types,
            'announces' => $news
        ]);
    }



}
