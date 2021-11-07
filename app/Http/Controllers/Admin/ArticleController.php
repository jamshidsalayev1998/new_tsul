<?php

namespace App\Http\Controllers\Admin;

use App\Announce;
use App\Article;
use App\Hashtag;
use App\Http\Controllers\Controller;

use App\Menu;
use App\Neww;
use App\NewwType;
use App\SeperatelyOneNew;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {

    }

    public function create()
    {

    }

    public function store(Request $request)
    {
//        return $request;
        Validator::make($request->all(), [
            'name_uz' => ['required', 'string'],
            'link' => ['required', 'string'],
        ]);
        $new_article = new Article();
        $new_article->teacher_id = $request->teacher_id;
        $new_article->name_uz = $request->name_uz;
        $request->name_ru ? $new_article->name_ru = $request->name_ru : $new_article->name_ru = $request->name_uz;
        $request->name_en ? $new_article->name_en = $request->name_en : $new_article->name_en = $request->name_uz;
        $new_article->link = $request->link;
        $new_article->short_info = $request->short_info;
        $new_article->description = $request->description;
        $new_article->save();
        return redirect()->back()->with('success', 'Malumot saqlandi');
        return $new_article;
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
            return redirect()->back()->with('success', 'Malumot ochirildi');
        }
    }


}
