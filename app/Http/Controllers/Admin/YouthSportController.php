<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\YouthSportEvent;
use Illuminate\Http\Request;

class YouthSportController extends Controller
{
    public function index()
    {
        $query = YouthSportEvent::orderBy('id', 'DESC');
        if (!auth()->user()->hasRole('super-admin')) {
            $query->where('user_id', auth()->id());
        }
        $data = $query->paginate(20);
        return view('admin.pages.youth_sport.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.youth_sport.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['image_file']);

        if ($request->hasFile('image_file')) {
            $imageName = time() . '.' . $request->image_file->extension();
            $request->image_file->move(public_path('uploads/youth_sport'), $imageName);
            $data['image'] = 'uploads/youth_sport/' . $imageName;
        }

        $data['user_id'] = auth()->id();

        YouthSportEvent::create($data);

        return redirect()->route('youth-sport.index')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        $item = YouthSportEvent::findOrFail($id);
        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.pages.youth_sport.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = YouthSportEvent::findOrFail($id);

        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title_uz' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['image_file']);

        if ($request->hasFile('image_file')) {
            $imageName = time() . '.' . $request->image_file->extension();
            $request->image_file->move(public_path('uploads/youth_sport'), $imageName);
            $data['image'] = 'uploads/youth_sport/' . $imageName;
        }

        $item->update($data);

        return redirect()->route('youth-sport.index')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        $item = YouthSportEvent::findOrFail($id);
        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        $item->delete();
        return redirect()->route('youth-sport.index')->with('success', 'Event deleted successfully.');
    }
}
