<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Media;
use App\Menu;
use App\SliderImage;
use App\SliderText;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(Request $request){
        $query = Media::orderBy('id' , 'DESC');

        if($request->has('search') && $request->search != ''){
            $query->where('name', 'like', '%'.$request->search.'%');
        }

        if($request->has('type') && $request->type != ''){
            $query->where('type', $request->type);
        }

        $medias = $query->paginate(20);

        return view('admin.pages.media.index',[
            'data' => $medias
        ]);
    }
    public function file_name($name){
            $name2 =$name.date('s').'_'.date('i').'_'.date('h').'_'.date('d').'_'.date('m');
            return $name2;
     }
     public function randomPassword_alpha($count) {
        $alphabet = 'abcdefghjkmnpqrstuvwxyz';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < $count; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    public function store(Request $request){
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $file_ext = strtolower($file->getClientOriginalExtension());
            $new_name = $this->file_name($this->randomPassword_alpha(10)).'.'.$file_ext;
            $file->move(public_path().'/media' , $new_name);
            $new_media = new Media();
            $new_media->name = $request->name ?? $file->getClientOriginalName();
            $new_media->path = 'media/'.$new_name;
            
            // 1 - Image, 2 - PDF, 3 - Word, 4 - Excel, 5 - Video, 6 - Audio, 0 - Other
            if (in_array($file_ext, ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'])){
                $new_media->type = 1;
            }
            elseif ($file_ext == 'pdf'){
                $new_media->type = 2;
            }
            elseif (in_array($file_ext, ['doc', 'docx', 'odt'])){
                $new_media->type = 3;
            }
            elseif (in_array($file_ext, ['xls', 'xlsx', 'ods', 'csv'])){
                $new_media->type = 4;
            }
            elseif (in_array($file_ext, ['mp4', 'avi', 'mov', 'wmv'])){
                $new_media->type = 5;
            }
            elseif (in_array($file_ext, ['mp3', 'wav', 'ogg'])){
                $new_media->type = 6;
            }
            elseif (in_array($file_ext, ['zip', 'rar', '7z'])){
                $new_media->type = 7;
            }
            else {
                $new_media->type = 0;
            }
            
            $new_media->save();
            return redirect()->back()->with('success' , 'Malumot saqlandi');
        }
    }

    public function destroy($id){
        $media = Media::findOrFail($id);
        $file_path = public_path($media->path);
        if(file_exists($file_path)){
            unlink($file_path);
        }
        $media->delete();
        return redirect()->back()->with('success', 'Fayl muvaffaqiyatli o\'chirildi');
    }

}
