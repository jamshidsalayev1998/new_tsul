<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\KafedraAdmin;
use App\Media;
use App\Menu;
use App\Section;
use App\AdministrationSection;
use App\SliderImage;
use App\SliderText;
use App\Kafedra;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class KafedraAdminController extends Controller
{
    public function generateRandomString($length)
    {
        $characters = '123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function index()
    {
        $admins = KafedraAdmin::all();
        $kafedra = Kafedra::all();
//        return $admins;
        return view('admin.pages.kafedra_admin.index', [
            'data' => $admins,
            'kafedra' => $kafedra
        ]);
    }

    public function store(Request $request)
    {
//        return $request;

        Validator::make($request->all(), [
            'fio' => ['required', 'string'],
            'kafedra_id' => ['required', 'exists:kafedra,id']
        ]);
        $new_admin = new KafedraAdmin();
        $new_admin->fio = $request->fio;
        $new_admin->kafedra_id = $request->kafedra_id;
        $new_admin->save();
        $new_user = new User();
        $new_user->name = $request->fio;
        $new_user->email = 'sd';
        $new_user->role = 1;
        $new_user->username = 'kaf' . $request->kafedra_id.'_'.$this->generateRandomString(3);
        $password = $this->generateRandomString(6);
        $new_user->password = Hash::make($password);
        $new_user->save();
        $new_admin->pass = $password;
        $new_admin->user_id = $new_user->id;
        $new_admin->update();
        return redirect()->back()->with('success' , 'Malumot qoshildi');

    }
}
