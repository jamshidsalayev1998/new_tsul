<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DepartmentAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role == 1 || Auth::user()->role == 7) {
            return $next($request);
        }
        else{
            return response('Bu amal uchun sizning huquqingiz yetarli emas!' , 403);
//            return response()->json(array('status' => 2 , 'message' => 'Bu amal uchun sizning huquqingiz yetarli emas!'));
        }


    }
}
