<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Poll;
use App\PollQuestion;
use App\PollOption;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Admin controller for managing polls (so'rovnomalar).
 *
 * Handles full CRUD for polls and their nested questions/options.
 * Editing is restricted to polls in "New" (status=0) state only —
 * active and archived polls cannot be modified to preserve data integrity.
 *
 * Status flow: New (0) → Active (1) → Archived (2).
 * Status can be changed independently via the 'status_only' flag in update().
 *
 * Supports CSV export of poll results for reporting purposes.
 */
class PollController extends Controller
{
    /**
     * Display a paginated list of all polls ordered by newest first.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $polls = Poll::orderBy('id', 'DESC')->paginate(15);
        return view('admin.pages.polls.index', compact('polls'));
    }

    /**
     * Show the form for creating a new poll.
     *
     * Uses a shared create/edit view (create_edit) with no pre-loaded data.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.pages.polls.create_edit');
    }

    /**
     * Store a newly created poll with its questions and options.
     *
     * Creates the poll in "New" (status=0) state. Questions and their
     * options are created in a single request. Options are only created
     * for 'single' and 'multi' type questions — 'text' questions have no options.
     *
     * The slug is generated from the Uzbek title plus a Unix timestamp
     * to ensure uniqueness even for polls with identical titles.
     *
     * Side effects:
     * - Creates Poll, PollQuestion, and PollOption records
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
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

                // Text-type questions accept free input, so no options are needed
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

    /**
     * Display detailed results for a poll including all question responses.
     *
     * Eager-loads questions with their options and responses to avoid N+1
     * queries on the results view.
     *
     * @param string $id The poll's primary key
     * @return \Illuminate\View\View
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function show(string $id)
    {
        $poll = Poll::with(['questions.options', 'questions.responses'])->findOrFail($id);
        return view('admin.pages.polls.show', compact('poll'));
    }

    /**
     * Show the edit form for an existing poll.
     *
     * Only polls in "New" (status=0) state can be edited. Attempting to
     * edit an active or archived poll redirects back with an error message
     * to prevent modification of polls that have already received responses.
     *
     * @param string $id The poll's primary key
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function edit(string $id)
    {
        $poll = Poll::with('questions.options')->findOrFail($id);

        if ($poll->status != 0) {
            return redirect()->route('polls.index')->with('error', 'Faqat "Yangi" holatidagi so\'rovnomalarni tahrirlash mumkin');
        }

        return view('admin.pages.polls.create_edit', compact('poll'));
    }

    /**
     * Update an existing poll's content or status.
     *
     * Supports two modes via the 'status_only' flag in the request:
     * - Status-only update: changes only the poll's status field (any status)
     * - Full update: replaces all questions and options (only for "New" polls)
     *
     * Full updates delete all existing questions and recreate them from the
     * request, since editing is only allowed in "New" status where no
     * responses exist yet — making a delete+recreate safe.
     *
     * Side effects:
     * - May delete and recreate all PollQuestion and PollOption records
     *
     * @param \Illuminate\Http\Request $request
     * @param string $id The poll's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @throws \Illuminate\Validation\ValidationException
     */
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

    /**
     * Delete a poll and all its related data via cascade.
     *
     * @param string $id The poll's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function destroy(string $id)
    {
        $poll = Poll::findOrFail($id);
        $poll->delete();
        return redirect()->route('polls.index')->with('success', 'So\'rovnoma o\'chirildi');
    }

    /**
     * Export poll results as a CSV file download.
     *
     * Streams a CSV directly to the browser using php://output with appropriate
     * Content-Disposition headers. Text-type questions list individual responses,
     * while option-based questions show aggregate counts and percentages.
     *
     * Note: this method calls exit() after streaming, bypassing Laravel's
     * response lifecycle. Side effects: outputs headers and CSV content directly.
     *
     * @param int|string $id The poll's primary key
     * @return void Streams CSV and exits
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
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
