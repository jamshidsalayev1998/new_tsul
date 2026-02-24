<?php

namespace App\Http\Controllers\Simple;
use App\Announce;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\MenuTop;
use App\Neww;
use App\NewwType;
use App\Question;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id){
        $menu = MenuTop::find($id);
        $links = MenuTop::where('parent_id' , $menu->parent_id)->where('leap' , $menu->leap)->get();
        return view('simple.ask_questions' , [
            'menu' => $menu,
            'links' => $links
        ]);
    }

    public function store(Request $request){
        $new = new Question();
        $new->name = $request->name;
        $new->surname = $request->surname;
        $new->email = $request->email;
        $new->body = $request->body;
        $new->phone = $request->phone;
        $new->save();
        return redirect()->back()->with('success' , 'Savolingiz jo\'natildi javob elektron pochtangizga boradi');
        return $request;
    }

    public function show($id){

    }


}
