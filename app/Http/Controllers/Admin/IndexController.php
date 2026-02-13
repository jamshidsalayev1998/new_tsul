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
    public function index()
    {
        $user = Auth::user();

        if ($user->hasRole('kafedra-admin')) {
            return redirect(route('teachers.index'));
        }

        if ($user->hasRole('youth-sport-admin')) {
            return redirect(route('youth-sport.index'));
        }

        if ($user->hasRole('legal-research-admin')) {
            return redirect(route('scientific.index'));
        }

        if ($user->hasRole('international-admin')) {
            return redirect(route('international.index'));
        }

        return redirect(route('admin.slider.index'));
    }
}
