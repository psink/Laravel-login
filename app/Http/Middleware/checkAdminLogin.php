<?php

namespace App\Http\Middleware;

use Closure;

class checkAdminLogin
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

        if(!empty(auth()->user()) && auth()->user()->admin==1){
            return $next($request);
        }else{
            return redirect('admin-login-page');
        }

    }
}
