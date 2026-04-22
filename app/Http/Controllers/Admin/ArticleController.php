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

/**
 * Admin controller for managing teacher-authored articles.
 *
 * Articles are attached to a specific teacher and represent their
 * academic publications. The controller is accessed from within the
 * teacher's profile management section, not as a standalone resource.
 */
class ArticleController extends Controller
{
    /**
     * Display all articles (not implemented).
     *
     * @return void
     */
    public function index()
    {
    }

    /**
     * Show the article creation form (not implemented).
     *
     * @return void
     */
    public function create()
    {
    }

    /**
     * Store a new article linked to a specific teacher.
     *
     * Name fields fall back to the Uzbek value for RU/EN when not provided.
     * No image upload is handled — articles reference external links only.
     *
     * Side effects:
     * - Creates an Article record linked to the specified teacher_id
     *
     * @param \Illuminate\Http\Request $request Must contain: teacher_id, name_uz, link
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
//        return $request;
        $request->validate([
            'name_uz' => ['required', 'string'],
            'link' => ['required', 'string']
        ]);
//        Validator::make($request->all(), [
//            'name_uz' => ['required', 'string'],
//            'link' => ['required', 'string'],
//        ]);
        $new_article = new Article();
        $new_article->teacher_id = $request->teacher_id;
        $new_article->name_uz = $request->name_uz;
        // Fall back to UZ value if RU/EN are not provided
        $request->name_ru != '' ? $new_article->name_ru = $request->name_ru : $new_article->name_ru = $request->name_uz;
        $request->name_en != '' ? $new_article->name_en = $request->name_en : $new_article->name_en = $request->name_uz;
        $new_article->link = $request->link;
        $new_article->short_info = $request->short_info;
        $new_article->description = $request->description;
        $new_article->save();
        return redirect()->back()->with('success', 'Malumot saqlandi');
        return $new_article;
    }

    /**
     * Delete an article by its primary key.
     *
     * @param int $id The article's primary key
     * @return \Illuminate\Http\RedirectResponse|null Returns null (implicit) if not found
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        if ($article) {
            $article->delete();
            return redirect()->back()->with('success', 'Malumot ochirildi');
        }
    }

    /**
     * Display a single article's detail view in the admin panel.
     *
     * @param int $id The article's primary key
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('admin.pages.teachers.articles.show', [
            'data' => $article
        ]);
    }
}
