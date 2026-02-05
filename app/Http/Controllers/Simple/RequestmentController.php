<?php

namespace App\Http\Controllers\Simple;

use App\Http\Controllers\Controller;
use App\Requestment;
use App\RequestmentQuestion;
use Illuminate\Http\Request;
use App\RequestmentResult;
use DB;

class RequestmentController extends Controller
{
    public function index($id){
        return view('simple.requestment', [
            'requestment' => $requestment = Requestment::where('id', $id)->with('questions.answers')->first()
        ]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'accept' => 'required'
        ],
        [
            'accept.required' => 'Click yes to continue'
        ]);
        $questions = RequestmentQuestion::where('requestment_id', $request->requestment_id)->with('answers')->get();

        foreach($questions as $question){
            $question_answer = explode(".", $request->input('question_'.$question->id));

            RequestmentResult::create([
                'requestment_id' => $request->requestment_id,
                'question_id' => $question_answer[0],
                'answer_id' => $question_answer[1],
                'ip_address' => \Request::ip(),
            ]);
        }
        return redirect('/');
    }
}
