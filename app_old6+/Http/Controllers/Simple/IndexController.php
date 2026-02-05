<?php

namespace App\Http\Controllers\Simple;
use App\AboutUniversity;
use App\Http\Controllers\Controller;
use App\Menu;
use App\SliderImage;

use App\Teacher;
use Mail;

use App\SliderText;
use App\SystemCard;
use Illuminate\Http\Request;
use App\Mail\OrderCall;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        $menus = Menu::where('leap' , 0)->get();
        $slider_images = SliderImage::where('status' , 1)->get();
        $slider_texts = SliderText::where('status' , 1)->first();
        $system_cards = SystemCard::all();
        $teachers = Teacher::inRandomOrder()->limit(10)->get();
        return view('simple.index' , [
            'slider_images' => $slider_images,
            'slider_texts' => $slider_texts,
            'system_cards' => $system_cards,
            'menus' => $menus,
            'other_teachers' => $teachers
        ]);
    }

    public function about_university(){
        $about = AboutUniversity::first();
        return view('simple.about_university.index' , [
            'about' => $about
        ]);
    }

    public function xarid(){

        return view('simple.xarid' , [

        ]);
    }

    public function using_services(Request $request){

        $fio = $request->fio;
        $phone = $request->phone;
        $email = $request->email;
        $to = "b.shamsutdinov@tsul.uz";
        $subject = "Mail From website";
        $txt ="Fio = ". $fio . "\r\n  Phone = " . $phone;
        Mail::to($to)->send(new OrderCall($phone , $fio));

        return redirect()->back();

    }

}


// <?php
// //get data from form

// $fio = $_POST['fio'];
// $phone= $_POST['phone'];
// $to = "nazirovrafiqjon98@gmail.com";
// $subject = "Mail From website";
// $txt ="Fio = ". $fio . "\r\n  Phone = " . $phone;
// $headers = "From: noreply@tsul.uz";
// if($email!=NULL){
//     mail($to,$subject,$txt,$headers);
// }
// //redirect
// header("Location:tsul.uz");
// ?>
