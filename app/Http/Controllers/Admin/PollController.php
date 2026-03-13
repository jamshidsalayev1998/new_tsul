<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Poll;
use App\PollQuestion;
use App\PollOption;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PollController extends Controller
{
    public function index()
    {
        $polls = Poll::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pages.polls.index', compact('polls'));
    }

    public function create()
    {
        return view('admin.pages.polls.create_edit');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
        ]);

        $poll = Poll::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'slug' => Str::slug($request->title_uz) . '-' . time(),
            'status' => 0, // New
            'show_results' => $request->has('show_results') ? 1 : 0,
        ]);

        if ($request->has('questions')) {
            foreach ($request->questions as $qIndex => $qData) {
                $question = $poll->questions()->create([
                    'text_uz' => $qData['text_uz'],
                    'text_ru' => $qData['text_ru'],
                    'text_en' => $qData['text_en'],
                    'type' => $qData['type'],
                    'order' => $qIndex,
                ]);

                if (isset($qData['options']) && $qData['type'] != 'text') {
                    foreach ($qData['options'] as $oIndex => $oData) {
                        $question->options()->create([
                            'text_uz' => $oData['text_uz'],
                            'text_ru' => $oData['text_ru'],
                            'text_en' => $oData['text_en'],
                            'order' => $oIndex,
                        ]);
                    }
                }
            }
        }

        return redirect()->route('polls.index')->with('success', 'So\'rovnoma muvaffaqiyatli yaratildi');
    }

    public function show(string $id)
    {
        $poll = Poll::with(['questions.options', 'questions.responses'])->findOrFail($id);
        return view('admin.pages.polls.show', compact('poll'));
    }

    public function edit(string $id)
    {
        $poll = Poll::with('questions.options')->findOrFail($id);
        
        if ($poll->status != 0) {
            return redirect()->route('polls.index')->with('error', 'Faqat "Yangi" holatidagi so\'rovnomalarni tahrirlash mumkin');
        }

        return view('admin.pages.polls.create_edit', compact('poll'));
    }

    public function update(Request $request, string $id)
    {
        $poll = Poll::findOrFail($id);
        
        if ($poll->status != 0 && !$request->has('status_only')) {
            return redirect()->route('polls.index')->with('error', 'Faqat "Yangi" holatidagi so\'rovnomalarni tahrirlash mumkin');
        }

        if ($request->has('status_only')) {
            $poll->update(['status' => $request->status]);
            return redirect()->back()->with('success', 'Holat yangilandi');
        }

        $request->validate([
            'title_uz' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
        ]);

        $poll->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'show_results' => $request->has('show_results') ? 1 : 0,
        ]);

        // Simple sync: delete old questions and create new ones (since it's only editable in "New" status)
        $poll->questions()->delete();

        if ($request->has('questions')) {
            foreach ($request->questions as $qIndex => $qData) {
                $question = $poll->questions()->create([
                    'text_uz' => $qData['text_uz'],
                    'text_ru' => $qData['text_ru'],
                    'text_en' => $qData['text_en'],
                    'type' => $qData['type'],
                    'order' => $qIndex,
                ]);

                if (isset($qData['options']) && $qData['type'] != 'text') {
                    foreach ($qData['options'] as $oIndex => $oData) {
                        $question->options()->create([
                            'text_uz' => $oData['text_uz'],
                            'text_ru' => $oData['text_ru'],
                            'text_en' => $oData['text_en'],
                            'order' => $oIndex,
                        ]);
                    }
                }
            }
        }

        return redirect()->route('polls.index')->with('success', 'So\'rovnoma yangilandi');
    }

    public function destroy(string $id)
    {
        $poll = Poll::findOrFail($id);
        $poll->delete();
        return redirect()->route('polls.index')->with('success', 'So\'rovnoma o\'chirildi');
    }

    public function export($id)
    {
        $poll = Poll::with(['questions.options', 'questions.responses'])->findOrFail($id);
        
        $filename = "poll_results_" . $poll->id . ".csv";
        $handle = fopen('php://output', 'w');
        
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        
        // Header
        fputcsv($handle, ['Savol', 'Variant / Javob', 'Soni / Matn', 'Foiz']);
        
        foreach ($poll->questions as $question) {
            if ($question->type == 'text') {
                fputcsv($handle, [$question->text_uz, 'Yozma javoblar', '', '']);
                foreach ($question->responses as $response) {
                    fputcsv($handle, ['', '', $response->text_answer, '']);
                }
            } else {
                $total = $question->responses->count();
                fputcsv($handle, [$question->text_uz, 'Jami ovozlar: ' . $total, '', '']);
                foreach ($question->options as $option) {
                    $count = $question->responses->where('option_id', $option->id)->count();
                    $percent = $total > 0 ? round(($count / $total) * 100, 1) : 0;
                    fputcsv($handle, ['', $option->text_uz, $count, $percent . '%']);
                }
            }
        }
        
        fclose($handle);
        exit;
    }
}
