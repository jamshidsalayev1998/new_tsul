<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        if (Auth::user()->role == 1){
            return redirect(route('teachers.index'));
        }
        return view('admin.pages.dashboard.index');
    }
}
