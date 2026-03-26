<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // return $request->all();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'type' => 'nullable|in:feedback,complaint,suggestion', // required emas!
            'message' => 'nullable|string', // required emas!
        ]);

        Feedback::create([
            'user_id' => auth()->id(), // yoki null qoldirsa ham bo'ladi
            'name' => $validated['name'],
            'email' => $validated['email'] ?? null,
            'rating' => $validated['rating'],
            'type' => $validated['type'] ?? null,
            'message' => $validated['message'] ?? null,
        ]);

        return redirect()->back()->with('success', 'Fikringiz uchun rahmat!');
    }
}
