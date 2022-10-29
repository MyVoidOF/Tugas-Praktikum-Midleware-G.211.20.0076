<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Namamiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('token') !== '12345'){
            return redirect('Mahasiswa');
        }
        else {
        return $next($request);
        }
    }
}