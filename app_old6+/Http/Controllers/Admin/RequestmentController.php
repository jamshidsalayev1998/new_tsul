<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Requestment;
use Illuminate\Http\Request;

class RequestmentController extends Controller
{

    public function index()
    {
        $requestments = Requestment::orderBy('id', 'DESC')->get();
        return view('admin.pages.requestments_crud.requestments.index', [
            'data' => $requestments
        ]);
    }

    public function create()
    {
        return view('admin.pages.requestments_crud.requestments.create');
    }

    public function store(Request $request)
    {
        $request_array = $request->all();
        foreach ($request_array as $key => $value) {
            if ($value == "<p><br data-cke-filler=\"true\"></p>") {
                $request_array[$key] = null;
            }
        }
        $request->merge($request_array);

        $request->validate([
            'name_uz' => ['required'],
            'description_uz' => ['required'],
        ]);
        $new_req = new Requestment();
        $new_req->name_uz = $request->name_uz;
        $new_req->name_ru = $request->name_uz;
        $new_req->name_en = $request->name_uz;
        if ($request->name_ru) $new_req->name_ru = $request->name_ru;
        if ($request->name_en) $new_req->name_en = $request->name_en;
        $new_req->description_uz = $request->description_uz;
        $new_req->description_ru = $request->description_uz;
        $new_req->description_en = $request->description_uz;
        if ($request->description_ru) $new_req->description_ru = $request->description_ru;
        if ($request->description_en) $new_req->description_en = $request->description_en;
        $new_req->save();
        return redirect(route('requestment.index'))->with('success', 'Malumot saqlandi');
    }

    public function destroy($id)
    {
        $req = Requestment::find($id);
        if ($req) {
            $req->delete();
            return redirect()->back()->with('success', 'Malumot ochirildi');
        } else {
            return redirect()->back()->with('error', 'Malumot topilmadi');
        }
    }

    public function edit($id)
    {
        $req = Requestment::find($id);
        return view('admin.pages.requestments_crud.requestments.edit', ['data' => $req]);
    }

    public function update(Request $request, $id)
    {
        $req = Requestment::find($id);
        if ($req) {
            $request_array = $request->all();
            foreach ($request_array as $key => $value) {
                if ($value == "<p><br data-cke-filler=\"true\"></p>") {
                    $request_array[$key] = null;
                }
            }
            $request->merge($request_array);

            $request->validate([
                'name_uz' => ['required'],
                'description_uz' => ['required'],
            ]);
            $req->name_uz = $request->name_uz;
            $req->name_ru = $request->name_ru;
            $req->name_en = $request->name_en;
            $req->description_uz = $request->description_uz;
            $req->description_ru = $request->description_ru;
            $req->description_en = $request->description_en;
            $req->update();
            return redirect(route('requestment.index'))->with('success', 'Malumot o`zgartirildi');

        } else {
            return redirect(route('requestment.index'))->with('error', 'Malumot topilmadi');
        }
    }

    public function show($id)
    {
        $req = Requestment::find($id);
        if ($req) {
            return view('admin.pages.requestments_crud.requestments.show' , [
                'data' => $req
            ]);
        } else {
            return redirect()->back()->with('error', 'Malumot topilmadi');
        }
    }
}
