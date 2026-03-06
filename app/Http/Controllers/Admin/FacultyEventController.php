<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\FacultyEvent;
use Illuminate\Http\Request;

class FacultyEventController extends Controller
{
    public function index()
    {
        $query = FacultyEvent::orderBy('id', 'DESC');
        if (!auth()->user()->hasRole('super-admin')) {
            $query->where('user_id', auth()->id());
        }
        $data = $query->paginate(20);
        return view('admin.pages.faculty.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.faculty.create');
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
            $request->image_file->move(public_path('uploads/faculty'), $imageName);
            $data['image'] = 'uploads/faculty/' . $imageName;
        }

        $data['user_id'] = auth()->id();

        FacultyEvent::create($data);

        return redirect()->route('faculty-event.index')->with('success', 'Faculty event created successfully.');
    }

    public function edit($id)
    {
        $item = FacultyEvent::findOrFail($id);
        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.pages.faculty.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = FacultyEvent::findOrFail($id);

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
            $request->image_file->move(public_path('uploads/faculty'), $imageName);
            $data['image'] = 'uploads/faculty/' . $imageName;
        }

        $item->update($data);

        return redirect()->route('faculty-event.index')->with('success', 'Faculty event updated successfully.');
    }

    public function destroy($id)
    {
        $item = FacultyEvent::findOrFail($id);
        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        $item->delete();
        return redirect()->route('faculty-event.index')->with('success', 'Faculty event deleted successfully.');
    }
}
