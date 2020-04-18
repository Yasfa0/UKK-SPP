<?php

namespace App\Http\Middleware;

use Closure;

class adminMiddleware
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

        //$user = \App\User::where('email', $request->email)->first();
        if ($request->user()->role == 2) {

        return $next($request);

        }else if ($request->user()->role == 3) {
            return redirect('/home-petugas');
        }

        return redirect('/home-user');

    }
}
