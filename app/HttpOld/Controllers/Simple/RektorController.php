<?php

namespace App\Http\Controllers\Simple;
use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\Rektorat;
use App\Rektor;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class RektorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $rektor = Rektor::where('status' , 1)->first();
        return view('simple.rektor' , [
            'data' => $rektor
        ]);
    }




}
