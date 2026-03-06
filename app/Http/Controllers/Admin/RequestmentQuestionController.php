<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Requestment;
use App\RequestmentQuestion;
use App\RequestmentQuestionAnswer;
use Illuminate\Http\Request;

class RequestmentQuestionController extends Controller
{

    public function index()
    {

    }

    public function create($id)
    {
        $req = Requestment::find($id);
        return view('admin.pages.requestments_crud.requestment_questions.create', ['data' => $req]);
    }

    public function store(Request $request)
    {
//        return $request;
        $new_question = new RequestmentQuestion();
        $new_question->requestment_id = $request->requestment_id;
        $new_question->body_uz = $request->body_uz;
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
            $new_answer_array = [];
            $old_answer_array = RequestmentQuestionAnswer::where('question_id', $new_question->id)->pluck('id')->toArray();
            foreach ($request->answers as $answer) {
                if (isset($answer['type'])) {
                    if ($answer['type'] == 'old') {
                        $new_answer_array[] = $answer['old_id'];
                    }
                }
            }
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

    public function show($id)
    {

    }
}
