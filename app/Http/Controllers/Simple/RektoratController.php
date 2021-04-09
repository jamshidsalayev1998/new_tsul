<?php

namespace App\Http\Controllers\Simple;
use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\Rektorat;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class RektoratController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $data = Rektorat::orderBy('id' , 'ASC')->get();
        return view('simple.rektorat' , [
            'data' => $data
        ]);
    }

    public function show($id){
        $links = Rektorat::orderBy('id' , 'ASC')->get();
        $rek = Rektorat::find($id);
        return view('simple.rektorat_show' , [
            'data' => $rek,
            'links' => $links
        ]);
    }



}
