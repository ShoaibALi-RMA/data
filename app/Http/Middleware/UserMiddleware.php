<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class UserMiddleware
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
      $data=Auth::user();
      dd($data);
        // if($data['first_name=='shoaib')
        // {
        //    return route('logout');          
        // }
        return $next($request);
    }
}
