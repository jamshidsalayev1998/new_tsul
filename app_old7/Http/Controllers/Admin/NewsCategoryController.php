<?php

namespace App\Http\Controllers\Admin;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $categories = NewwType::orderBy('name_uz' , 'ASC')->isset()->get();
        return view('admin.pages.new_categories.index' , [
            'data' => $categories
        ]);
        return $categories;
    }

    public function destroy($id)
    {
        $category = NewwType::find($id);
        $category->is_deleted = 1;
        $category->update();
        return  redirect()->back()->with('success' , 'Ma`lumot o`chirildi');
    }

    public function store(Request $request){
        $new_category = new NewwType();
        $new_category->name_uz = $request->name_uz;
        $new_category->name_ru = $request->name_ru;
        $new_category->name_en = $request->name_en;
        $new_category->save();
        return redirect()->back()->with('success' , 'Ma`lumot saqlandi');
    }

    public function update(Request $request , $id){
        $category = NewwType::find($id);
         $category->name_uz = $request->name_uz;
        $category->name_ru = $request->name_ru;
        $category->name_en = $request->name_en;
        $category->save();
        return redirect()->back()->with('success' , 'Ma`lumot saqlandi');
    }
}
