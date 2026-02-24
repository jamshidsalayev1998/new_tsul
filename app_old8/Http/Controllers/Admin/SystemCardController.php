<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\SliderImage;
use App\SliderText;
use App\SystemCard;
use Illuminate\Http\Request;

class SystemCardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $system_cards = SystemCard::all();
        return view('admin.pages.system_card.index',[
            'system_cards' => $system_cards
        ]);
    }
    public function destroy(Request $request){
//        return $request;
        $card = SystemCard::find($request->id);
        $card->delete();
        return redirect()->back()->with('success' , 'Ma`lumot o`chirildi');
    }
    public function store(Request $request){

        $new = new SystemCard();
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        $new->link = $request->link;
        $new->icon = $request->icon;
        $new->save();
        return redirect()->back()->with('success' , 'Saqlandi');
    }
}
