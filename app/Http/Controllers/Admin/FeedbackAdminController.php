<?php

namespace App\Http\Controllers\Admin;

use App\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackAdminController extends Controller
{
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
            1 => 'Ko‘rilgan',
            2 => 'Jarayonda',
            3 => 'Hal qilingan',
            4 => 'Arxivga olingan',
        ];

        return view('admin.pages.feedbacks.show', compact('feedback', 'statuses'));
    }

    public function updateStatus(Request $request, $id)
    {
        $feedback = Feedback::findOrFail($id);
        $request->validate([
            'status' => 'required|in:2,3,4', // faqat 2,3,4 ga o‘tishga ruxsat
        ]);
        $feedback->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.feedbacks.show', $feedback->id)->with('success', 'Status muvaffaqiyatli yangilandi!');
    }

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
