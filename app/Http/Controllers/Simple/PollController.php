<?php

namespace App\Http\Controllers\Simple;

use App\Http\Controllers\Controller;
use App\Poll;
use App\PollQuestion;
use App\PollResponse;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function show($slug)
    {
        $poll = Poll::where('slug', $slug)->active()->with('questions.options')->firstOrFail();
        return view('simple.polls.show', compact('poll'));
    }

    public function vote(Request $request, $slug)
    {
        $poll = Poll::where('slug', $slug)->active()->firstOrFail();
        
        $responses = $request->input('responses');
        
        foreach ($responses as $questionId => $answer) {
            $question = PollQuestion::findOrFail($questionId);
            
            if ($question->type == 'single') {
                PollResponse::create([
                    'poll_id' => $poll->id,
                    'question_id' => $questionId,
                    'option_id' => $answer,
                    'ip_address' => $request->ip(),
                ]);
            } elseif ($question->type == 'multi') {
                foreach ((array)$answer as $optionId) {
                    PollResponse::create([
                        'poll_id' => $poll->id,
                        'question_id' => $questionId,
                        'option_id' => $optionId,
                        'ip_address' => $request->ip(),
                    ]);
                }
            } elseif ($question->type == 'text') {
                PollResponse::create([
                    'poll_id' => $poll->id,
                    'question_id' => $questionId,
                    'text_answer' => $answer,
                    'ip_address' => $request->ip(),
                ]);
            }
        }

        return response()->json(['success' => true, 'show_results' => $poll->show_results]);
    }

    public function results($slug)
    {
        $poll = Poll::where('slug', $slug)->with(['questions.options', 'questions.responses'])->firstOrFail();
        
        if (!$poll->show_results) {
            return redirect()->route('simple.index')->with('error', 'Natijalar yopilgan');
        }

        return view('simple.polls.results', compact('poll'));
    }
}
