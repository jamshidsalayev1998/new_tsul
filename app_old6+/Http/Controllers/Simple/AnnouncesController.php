<?php

namespace App\Http\Controllers\Simple;
use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\ScientificArticle;
use App\SliderImage;
use App\SliderText;
use App\YoungScientistsNew;
use Illuminate\Http\Request;

class AnnouncesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function all_young_scientists_show($id){
        $y = YoungScientistsNew::where('id' , '!=' , $id)->orderBy('date' , 'DESC')->get();
        $y_b = ScientificArticle::orderBy('date' , 'DESC')->get();
        $alone = YoungScientistsNew::find($id);
        return view('simple.young_scientist_show' , [
            'new' => $alone,
            'others' => $y,
            'announces' => $y_b,
        ]);
    }
    public function all_young_articles_show($id){
        $y = ScientificArticle::where('id' , '!=' , $id)->orderBy('date' , 'DESC')->get();
        $y_b = YoungScientistsNew::orderBy('date' , 'DESC')->get();
        $alone = ScientificArticle::find($id);
        return view('simple.young_scientist_show' , [
            'new' => $alone,
            'others' => $y,
            'announces' => $y_b,
        ]);
    }
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
