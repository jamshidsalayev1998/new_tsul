<?php

namespace App\Http\Controllers\Admin;

use App\AdditionalFunctions;
use App\Http\Controllers\Controller;
use DB;
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
        $additional_function = new AdditionalFunctions();
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
        $slug = $additional_function->create_slug($request->name_uz);
        $new_req->slug = $additional_function->cryllic_to_latin($slug);
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
            return view('admin.pages.requestments_crud.requestments.show', [
                'data' => $req
            ]);
        } else {
            return redirect()->back()->with('error', 'Malumot topilmadi');
        }
    }

    public function status($id)
    {
        $requestment = Requestment::findOrFail($id);
        if($requestment->isActive){
            $requestment->isActive = 0;
            $requestment->save();
        } else {
            DB::table('requestments')->where('isActive', 1)->update(['isActive' => 0]);
            $requestment = Requestment::findOrFail($id);
            $requestment->isActive = !$requestment->isActive;
            $requestment->save();
        }

        return redirect()->back();
    }

    public function result($id)
    {
        $requestment = Requestment::with('questions.answers')->where('id', $id)->first();

        foreach ($requestment->questions as $question){
            foreach($question->answers as $answer){
                $answer->count = $question->result_answer_count($answer->id);
            }
        }
//        foreach ($requestment->questions as $question) {
//            $result_count = array_count_values($question->result->pluck('answer_id')->toArray());
//            foreach ($question->answers as $answer){
//                foreach ($result_count as $key=>$result){
//                    if($answer->id == $key){
//                        $answer->count = $result;
//                    } else {
//                        $answer->count = 0;
//                    }
//                }
//            }
//        }
//        return $requestment->questions[0];

//        return $requestment->questions[0]->result_answer_count(7);
        return view('admin.pages.requestments_crud.requestments.result', compact('requestment'));
    }
}
