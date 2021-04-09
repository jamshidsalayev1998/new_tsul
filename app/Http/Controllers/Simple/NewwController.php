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

class NewwController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $news = Neww::orderBy('id' , 'DESC')->get();
        $types = NewwType::all();
        $announces = Announce::all();
        return view('simple.news' , [
            'data' => $news,
            'announces' => $announces,
            'types' => $types
        ]);
    }

    public function show($id){
        $new = Neww::find($id);
        $others = Neww::where('id' , '<>' , $id)->orderBy('id' , 'DESC')->get();
        $types = NewwType::all();
        $announces = Announce::orderBy('id' , 'DESC')->get();
        return view('simple.news_show' , [
            'types' => $types,
            'new' => $new,
            'others' => $others,
            'announces' => $announces
        ]);
    }


}
