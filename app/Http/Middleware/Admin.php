<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{

    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role == 'admin'){
            return $next($request);

        }
        return redirect()->route('home')->with('success','لا يمكنك الاطلاع علي معلومات الادمن');
    }
}
