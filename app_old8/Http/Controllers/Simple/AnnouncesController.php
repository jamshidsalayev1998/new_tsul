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
    public function index(Request $request){
        $data = Announce::active()->orderBy('date' , 'DESC')->paginate(6);
        $types = NewwType::all();
        $news = Neww::orderBy('date' , 'DESC')->paginate(8);

        if($request->ajax()){

            $news = view('simple.announces_news_scroll', [
                'news'=> $news
            ])->render();

            $announces = view('simple.announces_scroll', [
                'data'=> $data
            ])->render();

            return response()->json([
                'news' => $news,
                'announces' => $announces
            ]);
        }

        return view('simple.announces' , [
            'data' => $data,
            'news' => $news,
            'types' => $types
        ]);
        return $data;
    }

    public function show(Request $request, $id){

        $data = Announce::find($id);
//        return $data;
        $other = Announce::where('id' , '<>' , $data->id)->orderBy('id' , 'DESC')->paginate(6);
        $types = NewwType::all();
        $news = Neww::orderBy('id' , 'DESC')->paginate(8);
        if($request->ajax()){

            $news = view('simple.announce_show_news_scroll', [
                'news'=> $news
            ])->render();

            $announces = view('simple.announce_show_scroll', [
                'others'=> $other
            ])->render();

            return response()->json([
                'news' => $news,
                'announces' => $announces
            ]);
        }

        return view('simple.announce_show' , [
            'new' => $data,
            'others' => $other,
            'types' => $types,
            'news' => $news
        ]);
    }



}
