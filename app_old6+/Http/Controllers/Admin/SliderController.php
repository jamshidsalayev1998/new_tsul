<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\SliderImage;
use App\SeperatelyOneNew;
use App\SliderText;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $slider_images = SliderImage::all();
        $slider_text = SliderText::where('status', 1)->first();
        return view('admin.pages.slider.index', [
            'slider_images' => $slider_images,
            'slider_texts' => $slider_text
        ]);
    }

    public function index_old()
    {
        $slider_images = SliderImage::all();
        $slider_text = SliderText::where('status', 1)->first();
        return view('admin.pages.slider.index', [
            'slider_images' => $slider_images,
            'slider_texts' => $slider_text
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
//            'image_uz' => ['required' , 'file']
        ]);
        $new_slide = new SliderImage();
        if ($request->text_uz) $new_slide->text_uz = $request->text_uz;
        if ($request->text_ru) $new_slide->text_ru = $request->text_ru;
        if ($request->text_en) $new_slide->text_en = $request->text_en;

        $new_slide->link_uz = $request->link_uz;
        $new_slide->link_ru = $request->link_uz;
        $new_slide->link_en = $request->link_uz;
        if ($request->text_ru) $new_slide->text_ru = $request->text_ru;
        if ($request->text_en) $new_slide->text_en = $request->text_en;
        $path = '';
        if ($request->hasFile('image_uz')) {
            $file = $request->file('image_uz');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_uz = $path;
        if ($request->hasFile('image_ru')) {
            $file = $request->file('image_ru');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_ru = $path;
        if ($request->hasFile('image_en')) {
            $file = $request->file('image_en');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_en = $path;
        $new_slide->save();
        return redirect(route('admin.slider.index'))->with('success' , 'Malumot saqlandi');
    }

    public function store_old(Request $request)
    {
        $text = SliderText::where('status', 1)->first();
        $text->text_uz = $request->text_uz;
        $text->text_ru = $request->text_ru;
        $text->text_en = $request->text_en;
        $text->email = $request->email;
        $text->phone = $request->phone;
        $text->link = $request->link;
        $text->update();
        return redirect()->back()->with('success', 'Saqlandi');
    }

    public function separately_index()
    {
        $has = 0;
        if (SeperatelyOneNew::where('status', 1)->orderBy('id', 'DESC')->exists()) {
            $sep = SeperatelyOneNew::where('status', 1)->orderBy('id', 'DESC')->first();
            $has = 1;
        } else {
            $sep = new SeperatelyOneNew();
        }
        return view('admin.pages.separately.index', [
            'data' => $sep,
            'has' => $has
        ]);
    }

    public function separately_store(Request $request)
    {
        if ($request->has) {
            $sep = SeperatelyOneNew::find($request->data_id);
        } else {
            $sep = new SeperatelyOneNew();
        }
//        return $sep;
        $sep->status = 1;
        $sep->title_uz = $request->title_uz;
        $sep->title_ru = $request->title_ru;
        $sep->title_en = $request->title_en;
        $sep->content_uz = $request->content_uz;
        $sep->content_ru = $request->content_ru;
        $sep->content_en = $request->content_en;
        $sep->save();
        return redirect()->back()->with('success', 'Malumot qoshildi');
    }

    public function edit($id)
    {
        $slider_image = SliderImage::find($id);

        return view('admin.pages.slider.edit' , [
            'data' => $slider_image
        ]);
        return $slider_image;
    }

    public function create()
    {
        return view('admin.pages.slider.create');
    }

    public function delete($id)
    {
        $slider_image = SliderImage::find($id);
        $slider_image->delete();
        return redirect()->back()->with('success' , 'Malumot ochirildi');
    }
    public function update(Request $request , $id)
    {
        $request->validate([
//            'image_uz' => ['required' , 'file']
        ]);
        $new_slide = SliderImage::find($id);
        $new_slide->text_uz = $request->text_uz;
        $new_slide->text_ru = $request->text_ru;
        $new_slide->text_en = $request->text_en;

        $new_slide->link_uz = $request->link_uz;
        $new_slide->link_ru = $request->link_ru;
        $new_slide->link_en = $request->link_en;
        $path = $new_slide->image_uz;
        if ($request->hasFile('image_uz')) {
            $file = $request->file('image_uz');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_uz = $path;
        $path = $new_slide->image_ru;
        if ($request->hasFile('image_ru')) {
            $file = $request->file('image_ru');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_ru = $path;
        $path = $new_slide->image_en;
        if ($request->hasFile('image_en')) {
            $file = $request->file('image_en');
            $file_name = $file->getClientOriginalName();
            $file->move('front_assets/assets/slider_images', $file_name);
            $path = 'front_assets/assets/slider_images/' . $file_name;
        }
        $new_slide->image_en = $path;
        $new_slide->update();
        return redirect(route('admin.slider.index'))->with('success' , 'Malumot saqlandi');
    }
}
