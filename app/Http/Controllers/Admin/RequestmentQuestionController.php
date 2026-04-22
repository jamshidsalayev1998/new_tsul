<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Requestment;
use App\RequestmentQuestion;
use App\RequestmentQuestionAnswer;
use Illuminate\Http\Request;

/**
 * Admin controller for managing individual questions within a survey.
 *
 * Handles creation, editing, updating, and deletion of survey questions
 * and their associated answer options. When a question is deleted, all
 * its answer options are also deleted to maintain referential integrity
 * (no DB-level cascade is configured).
 *
 * On update, answer options use a type flag ('old' vs new) to determine
 * whether to update an existing answer or create a new one. Answers not
 * present in the updated set are deleted.
 */
class RequestmentQuestionController extends Controller
{
    /**
     * List questions (not implemented).
     *
     * @return void
     */
    public function index()
    {
    }

    /**
     * Show the form for adding a new question to a survey.
     *
     * @param int $id The parent survey's primary key
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $req = Requestment::find($id);
        return view('admin.pages.requestments_crud.requestment_questions.create', ['data' => $req]);
    }

    /**
     * Store a new survey question with its answer options.
     *
     * The question body defaults to the Uzbek value for RU/EN when not provided.
     * Each answer option is created inline in the same request. Question type
     * is always set to 1 (single-choice) — multi-choice is not yet supported.
     *
     * Side effects:
     * - Creates a RequestmentQuestion record
     * - Creates one RequestmentQuestionAnswer record per submitted answer
     *
     * @param \Illuminate\Http\Request $request Must contain: requestment_id, body_uz, answers[]
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        return $request;
        $new_question = new RequestmentQuestion();
        $new_question->requestment_id = $request->requestment_id;
        $new_question->body_uz = $request->body_uz;
        // Default RU/EN body to UZ; override if explicitly provided
        $new_question->body_ru = $request->body_uz;
        $new_question->body_en = $request->body_uz;
        if ($request->body_ru) $new_question->body_ru = $request->body_ru;
        if ($request->body_en) $new_question->body_en = $request->body_en;
        $new_question->type_id = 1;
        $new_question->save();
        if (isset($request->answers)) {
            foreach ($request->answers as $answer) {
                $new_answer = new RequestmentQuestionAnswer();
                $new_answer->question_id = $new_question->id;
                $new_answer->body_uz = $answer['body_uz'];
                $new_answer->body_ru = $answer['body_uz'];
                $new_answer->body_en = $answer['body_uz'];
                if ($answer['body_ru']) $new_answer->body_ru = $answer['body_ru'];
                if ($answer['body_en']) $new_answer->body_en = $answer['body_en'];
                $new_answer->save();
//                return $answer;
            }
        }
        return redirect(route('requestment.show', ['requestment' => $request->requestment_id]))->with('success', 'Ma`lumot qo`shildi');
    }

    /**
     * Delete a survey question and all its answer options.
     *
     * Deletes answers first to avoid orphaned records since there is no
     * DB-level cascade delete on the question_id foreign key.
     *
     * @param int $id The question's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $req = RequestmentQuestion::find($id);
        $req_id = $req->requestment_id;
        if ($req) {
            $req_id = $req->requestment_id;
            RequestmentQuestionAnswer::where('question_id', $req->id)->delete();
            $req->delete();
            return redirect(route('requestment.show', ['requestment' => $req_id]))->with('success', 'Malumot o`chirildi');
        } else {
            return redirect()->back()->with('error', 'Malumot topilmadi');
        }
    }

    /**
     * Show the edit form for an existing survey question.
     *
     * @param int $id The question's primary key
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        $req = RequestmentQuestion::find($id);
        $req_id = $req->requestment_id;
        if ($req) {
            return view('admin.pages.requestments_crud.requestment_questions.edit', ['data' => $req]);
        } else {
            return redirect()->back()->with('error', 'Malumot topilmadi');
        }
    }

    /**
     * Update an existing survey question and synchronise its answer options.
     *
     * Answer synchronization strategy:
     * - Existing answers submitted with type='old' and a valid old_id are retained
     * - Existing answers not present in the submission are deleted
     * - New answers (no type or type!='old') are created fresh
     *
     * This diff-based sync avoids deleting all answers and recreating them,
     * which would break any existing result records referencing old answer IDs.
     *
     * Side effects:
     * - Updates the RequestmentQuestion record
     * - Deletes removed answer options
     * - Creates new answer options
     * - Updates existing answer options
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id The question's primary key
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $new_question = RequestmentQuestion::find($id);
        $new_question->body_uz = $request->body_uz;
        $new_question->body_ru = $request->body_uz;
        $new_question->body_en = $request->body_uz;
        if ($request->body_ru) $new_question->body_ru = $request->body_ru;
        if ($request->body_en) $new_question->body_en = $request->body_en;
        $new_question->update();
        if (isset($request->answers)) {
            // Build list of retained old answer IDs to determine which to delete
            $new_answer_array = [];
            $old_answer_array = RequestmentQuestionAnswer::where('question_id', $new_question->id)->pluck('id')->toArray();
            foreach ($request->answers as $answer) {
                if (isset($answer['type'])) {
                    if ($answer['type'] == 'old') {
                        $new_answer_array[] = $answer['old_id'];
                    }
                }
            }
            // Delete answers that were removed in the form submission
            $diff_array = array_diff($old_answer_array, $new_answer_array);
            $not_in_new_answers = RequestmentQuestionAnswer::whereIn('id', $diff_array)->delete();
            foreach ($request->answers as $answer) {
                if (isset($answer['type'])) {
                    if ($answer['type'] == 'old') {
                        $new_answer = RequestmentQuestionAnswer::find($answer['old_id']);
                        if (!$new_answer) {
                            $new_answer = new RequestmentQuestionAnswer();
                        }
                    } else {
                        $new_answer = new RequestmentQuestionAnswer();
                    }
                } else {
                    $new_answer = new RequestmentQuestionAnswer();
                }
                $new_answer->question_id = $new_question->id;
                $new_answer->body_uz = $answer['body_uz'];
                $new_answer->body_ru = $answer['body_uz'];
                $new_answer->body_en = $answer['body_uz'];
                if ($answer['body_ru']) $new_answer->body_ru = $answer['body_ru'];
                if ($answer['body_en']) $new_answer->body_en = $answer['body_en'];
                $new_answer->save();
            }
        }
        return redirect(route('requestment.show', ['requestment' => $new_question->requestment_id]))->with('success', 'Ma`lumot o`zgartirildi');
    }

    /**
     * Display question details (not implemented).
     *
     * @param int $id
     * @return void
     */
    public function show($id)
    {
    }
}
