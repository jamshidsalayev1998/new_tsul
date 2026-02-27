<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\InternationalOpportunity;
use Illuminate\Http\Request;

class InternationalOpportunityController extends Controller
{
    public function index()
    {
        $query = InternationalOpportunity::orderBy('id', 'DESC');
        if (!auth()->user()->hasRole('super-admin')) {
            $query->where('user_id', auth()->id());
        }
        $data = $query->paginate(20);
        return view('admin.pages.international.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pages.international.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'required|string|max:255',
            'deadline' => 'nullable|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['image_file']);

        if ($request->hasFile('image_file')) {
            $imageName = time() . '.' . $request->image_file->extension();
            $request->image_file->move(public_path('uploads/international'), $imageName);
            $data['image'] = 'uploads/international/' . $imageName;
        }

        $data['user_id'] = auth()->id();

        InternationalOpportunity::create($data);

        return redirect()->route('international.index')->with('success', 'Opportunity created successfully.');
    }

    public function edit($id)
    {
        $item = InternationalOpportunity::findOrFail($id);
        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        return view('admin.pages.international.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = InternationalOpportunity::findOrFail($id);

        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'title_uz' => 'required|string|max:255',
            'deadline' => 'nullable|date',
            'image_file' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['image_file']);

        if ($request->hasFile('image_file')) {
            $imageName = time() . '.' . $request->image_file->extension();
            $request->image_file->move(public_path('uploads/international'), $imageName);
            $data['image'] = 'uploads/international/' . $imageName;
        }

        $item->update($data);

        return redirect()->route('international.index')->with('success', 'Opportunity updated successfully.');
    }

    public function destroy($id)
    {
        $item = InternationalOpportunity::findOrFail($id);
        if (!auth()->user()->hasRole('super-admin') && $item->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        $item->delete();
        return redirect()->route('international.index')->with('success', 'Opportunity deleted successfully.');
    }
}
