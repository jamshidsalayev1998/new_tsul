<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ScientificEvent;
use Illuminate\Http\Request;

class ScientificEventController extends Controller
{
    public function index()
    {
        $query = ScientificEvent::orderBy('id', 'DESC');
        if (!auth()->user()->hasRole('super-admin')) {
            $query->where('user_id', auth()->id());
        }
        $data = $query->paginate(20);
        return view('admin.pages.scientific.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.scientific.create');
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
            $request->image_file->move(public_path('uploads/scientific'), $imageName);
            $data['image'] = 'uploads/scientific/' . $imageName;
        }

        $data['user_id'] = auth()->id();

        ScientificEvent::create($data);

        return redirect()->route('scientific.index')->with('success', 'Scientific event created successfully.');
    }

    public function edit($id)
    {
        $item = ScientificEvent::findOrFail($id);
        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.pages.scientific.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = ScientificEvent::findOrFail($id);

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
            $request->image_file->move(public_path('uploads/scientific'), $imageName);
            $data['image'] = 'uploads/scientific/' . $imageName;
        }

        $item->update($data);

        return redirect()->route('scientific.index')->with('success', 'Scientific event updated successfully.');
    }

    public function destroy($id)
    {
        $item = ScientificEvent::findOrFail($id);
        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        $item->delete();
        return redirect()->route('scientific.index')->with('success', 'Scientific event deleted successfully.');
    }
}
