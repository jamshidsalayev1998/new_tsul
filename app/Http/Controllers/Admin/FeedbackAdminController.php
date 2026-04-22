<?php

namespace App\Http\Controllers\Admin;

use App\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Admin controller for managing public feedback submissions.
 *
 * Provides admin-side views for listing, viewing, and updating the
 * status of feedback entries submitted through the public contact form.
 * Also exposes a statistics view with rating distribution charts.
 *
 * Status lifecycle:
 * 0 = New → automatically set to 1 (Viewed) when first opened
 * 1 = Viewed → can be moved to 2 (Processing), 3 (Resolved), or 4 (Archived)
 */
class FeedbackAdminController extends Controller
{
    /**
     * Display a filterable, paginated list of all feedback entries.
     *
     * Applies optional filters from the request (name, email, type, message,
     * rating, status) and loads aggregate statistics for the dashboard summary panel.
     *
     * @param \Illuminate\Http\Request $request Supports filter parameters: name, email, type, message, rating, status
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // return "Das";
        $feedbacks = Feedback::query()->filter($request->only(['name', 'email', 'type', 'message', 'rating', 'status']))->orderBy('id', 'DESC')->paginate(10);
        $ratings = [1, 2, 3, 4, 5];
        $types = ['feedback', 'complaint', 'suggestion'];
        $stats = Feedback::getStatistics();
        // return $stats;
        return view('admin.pages.feedbacks.index', compact('feedbacks', 'stats'));
    }

    // FeedbackAdminController.php

    /**
     * Display a single feedback entry and automatically mark it as viewed.
     *
     * If the feedback status is 0 (New), it is automatically updated to 1 (Viewed)
     * on first open. This allows admins to track which submissions have been seen
     * without requiring a manual action.
     *
     * @param int $id The feedback record's primary key
     * @return \Illuminate\View\View
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function show($id)
    {
        $feedback = Feedback::findOrFail($id);

        if ($feedback->status == 0) {
            $feedback->update([
                'status' => 1, // Korilgan
            ]);
        }

        $statuses = [
            0 => 'Yangi',
            1 => "Ko'rilgan",
            2 => 'Jarayonda',
            3 => 'Hal qilingan',
            4 => 'Arxivga olingan',
        ];

        return view('admin.pages.feedbacks.show', compact('feedback', 'statuses'));
    }

    /**
     * Update the processing status of a feedback entry.
     *
     * Only statuses 2 (Processing), 3 (Resolved), and 4 (Archived) are
     * accepted — status 0 and 1 are set automatically by the system and
     * cannot be manually assigned via this endpoint.
     *
     * @param \Illuminate\Http\Request $request Must contain 'status' field with value 2, 3, or 4
     * @param int $id The feedback record's primary key
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateStatus(Request $request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $request->validate([
            'status' => 'required|in:2,3,4', // faqat 2,3,4 ga o'tishga ruxsat
        ]);
        $feedback->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.feedbacks.show', $feedback->id)->with('success', 'Status muvaffaqiyatli yangilandi!');
    }

    /**
     * Display a rating statistics report with chart data.
     *
     * Aggregates feedback grouped by rating value to compute vote counts
     * and the overall average rating. Prepares data arrays (labels + values)
     * for use with a front-end charting library.
     *
     * @return \Illuminate\View\View
     */
    public function ratingStats()
    {
        $ratings = Feedback::selectRaw('rating, COUNT(*) as count')
            ->groupBy('rating')
            ->orderBy('rating', 'desc')
            ->get();

        $averageRating = Feedback::avg('rating');

        // Grafik uchun data tayyorlaymiz
        $chartData = [
            'labels' => $ratings->pluck('rating'),
            'data' => $ratings->pluck('count'),
        ];

        return view('admin.pages.feedbacks.ratingStats', compact('ratings', 'averageRating', 'chartData'));
    }
}
