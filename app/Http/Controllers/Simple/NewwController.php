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
//    public function index(){
//
//        $news = Neww::orderBy('id' , 'DESC')->paginate(7);
//        $types = NewwType::all();
//        $announces = Announce::orderBy('date' , 'DESC')->paginate(25);
//
//
//        return view('simple.news' , [
//            'data' => $news,
//            'announces' => $announces,
//            'types' => $types
//        ]);
//    }

    public function index(Request $request){

        $news = Neww::orderBy('id' , 'DESC')->paginate(15);
        $types = NewwType::all();
        $announces = Announce::orderBy('date' , 'DESC')->paginate(20);
        if($request->ajax()){

            $news = view('simple.news_scroll', [
                'news'=> $news
            ])->render();

            $announces = view('simple.news_announces_scroll', [
                'announces'=> $announces
            ])->render();

            return response()->json([
                'news' => $news,
                'announces' => $announces
            ]);
        }

        return view('simple.news' , [
            'news' => $news,
            'announces' => $announces,
            'types' => $types
        ]);
    }

    public function show(Request $request, $id){
        $new = Neww::find($id);
        $others = Neww::where('id' , '<>' , $id)->orderBy('id' , 'DESC')->paginate(6);
        $types = NewwType::all();
        $announces = Announce::orderBy('date' , 'DESC')->paginate(20);

        if($request->ajax()){

            $news = view('simple.news_show_scroll', [
                'others'=> $others
            ])->render();

            $announces = view('simple.news_show_announces_scroll', [
                'announces'=> $announces
            ])->render();

            return response()->json([
                'news' => $news,
                'announces' => $announces
            ]);
        }

        return view('simple.news_show' , [
            'types' => $types,
            'new' => $new,
            'others' => $others,
            'announces' => $announces
        ]);
    }


}
