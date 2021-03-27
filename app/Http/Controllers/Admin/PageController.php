<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Page;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $data = Page::all();
        return view('admin.pages.pages.index' , [
            'data' => $data
        ]);
    }

    public function store(Request $request){

    }
}
