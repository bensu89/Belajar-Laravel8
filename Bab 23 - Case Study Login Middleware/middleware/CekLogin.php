<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekLogin
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
        if (session()->has('username'))
        {
            return $next($request);
        }
        else {
            return redirect('/login')->with('pesan',"Maaf,
            silahkan login terlebih dahulu");;
        }
    }
}
