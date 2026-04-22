<?php

namespace App\Http\Controllers\Admin;

use App\AdditionalFunctions;
use App\Http\Controllers\Controller;
use DB;
use App\Requestment;
use Illuminate\Http\Request;

/**
 * Admin controller for managing surveys/questionnaires (so'rovnomalar).
 *
 * Handles CRUD operations for Requestment records and manages the
 * activation state — only one requestment can be active (isActive=1)
 * at a time on the homepage. The status() method enforces this constraint
 * by deactivating all others before activating the selected one.
 *
 * Slugs are auto-generated from the Uzbek title by transliterating Cyrillic
 * characters to Latin and replacing spaces with hyphens.
 */
class RequestmentController extends Controller
{
    /**
     * Display all surveys ordered by newest first.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $requestments = Requestment::orderBy('id', 'DESC')->get();
        return view('admin.pages.requestments_crud.requestments.index', [
            'data' => $requestments
        ]);
    }

    /**
     * Show the form for creating a new survey.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.requestments_crud.requestments.create');
    }

    /**
     * Store a newly created survey in the database.
     *
     * Sanitizes CKEditor empty paragraph artifacts before validation.
     * Multilingual name/description fields fall back to the Uzbek value
     * when RU/EN are not provided. The slug is auto-generated from the
     * Uzbek name via Cyrillic-to-Latin transliteration.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $additional_function = new AdditionalFunctions();
        $request_array = $request->all();
        // Replace CKEditor empty paragraph artifacts with null before validation
        foreach ($request_array as $key => $value) {
            if ($value == "<p><br data-cke-filler=\"true\"></p>") {
                $request_array[$key] = null;
            }
        }
        $request->merge($request_array);

        $request->validate([
            'name_uz' => ['required'],
            'description_uz' => ['required'],
        ]);
        $new_req = new Requestment();
        $new_req->name_uz = $request->name_uz;
        // Default RU/EN to UZ value; override only if explicitly provided
        $new_req->name_ru = $request->name_uz;
        $new_req->name_en = $request->name_uz;
        if ($request->name_ru) $new_req->name_ru = $request->name_ru;
        if ($request->name_en) $new_req->name_en = $request->name_en;
        $new_req->description_uz = $request->description_uz;
        $new_req->description_ru = $request->description_uz;
        $new_req->description_en = $request->description_uz;
        if ($request->description_ru) $new_req->description_ru = $request->description_ru;
        if ($request->description_en) $new_req->description_en = $request->description_en;
        // Transliterate the Uzbek name to Latin before slugifying
        $slug = $additional_function->create_slug($request->name_uz);
        $new_req->slug = $additional_function->cryllic_to_latin($slug);
        $new_req->save();
        return redirect(route('requestment.index'))->with('success', 'Malumot saqlandi');
    }

    /**
     * Delete a survey record.
     *
     * @param int $id The survey's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $req = Requestment::find($id);
        if ($req) {
            $req->delete();
            return redirect()->back()->with('success', 'Malumot ochirildi');
        } else {
            return redirect()->back()->with('error', 'Malumot topilmadi');
        }
    }

    /**
     * Show the edit form for an existing survey.
     *
     * @param int $id The survey's primary key
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $req = Requestment::find($id);
        return view('admin.pages.requestments_crud.requestments.edit', ['data' => $req]);
    }

    /**
     * Update an existing survey's multilingual content.
     *
     * Sanitizes CKEditor artifacts before validation. Unlike store(),
     * does not regenerate the slug on update.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The survey's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $req = Requestment::find($id);
        if ($req) {
            $request_array = $request->all();
            foreach ($request_array as $key => $value) {
                if ($value == "<p><br data-cke-filler=\"true\"></p>") {
                    $request_array[$key] = null;
                }
            }
            $request->merge($request_array);

            $request->validate([
                'name_uz' => ['required'],
                'description_uz' => ['required'],
            ]);
            $req->name_uz = $request->name_uz;
            $req->name_ru = $request->name_ru;
            $req->name_en = $request->name_en;
            $req->description_uz = $request->description_uz;
            $req->description_ru = $request->description_ru;
            $req->description_en = $request->description_en;
            $req->update();
            return redirect(route('requestment.index'))->with('success', 'Malumot o`zgartirildi');

        } else {
            return redirect(route('requestment.index'))->with('error', 'Malumot topilmadi');
        }
    }

    /**
     * Display a survey along with its questions and answer options.
     *
     * @param int $id The survey's primary key
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        $req = Requestment::find($id);
        if ($req) {
            return view('admin.pages.requestments_crud.requestments.show', [
                'data' => $req
            ]);
        } else {
            return redirect()->back()->with('error', 'Malumot topilmadi');
        }
    }

    /**
     * Toggle the active status of a survey (only one can be active at a time).
     *
     * If the target survey is currently active, it is deactivated.
     * If it is inactive, all other surveys are first deactivated via a bulk
     * DB update, then this survey is activated — ensuring only one is
     * shown on the homepage at any time.
     *
     * @param int $id The survey's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function status($id)
    {
        $requestment = Requestment::findOrFail($id);
        if ($requestment->isActive) {
            $requestment->isActive = 0;
            $requestment->save();
        } else {
            // Deactivate all other surveys before activating this one
            DB::table('requestments')->where('isActive', 1)->update(['isActive' => 0]);
            $requestment = Requestment::findOrFail($id);
            $requestment->isActive = !$requestment->isActive;
            $requestment->save();
        }

        return redirect()->back();
    }

    /**
     * Display the results/statistics for a survey.
     *
     * Loads questions with their answers and appends a vote count to each
     * answer option by calling result_answer_count() per answer. This
     * approach results in N+1 queries per question — each answer requires
     * a separate count query.
     *
     * @param int $id The survey's primary key
     * @return \Illuminate\View\View
     */
    public function result($id)
    {
        $requestment = Requestment::with('questions.answers')->where('id', $id)->first();

        foreach ($requestment->questions as $question) {
            foreach ($question->answers as $answer) {
                $answer->count = $question->result_answer_count($answer->id);
            }
        }
        return view('admin.pages.requestments_crud.requestments.result', compact('requestment'));
    }
}
