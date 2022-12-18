<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Client
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()->type_users=="Client"){
            return $next($request);
        }else{
            request()->session()->flash('error','Vous n\'avez pas d\' autorisation à acceder à cette page');
            return redirect()->route($request->user()->type_users);
        }
    }
}
