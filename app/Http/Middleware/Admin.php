<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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

    // if (Auth::guard('admin')->user()) {
    //     return $next($request);
    // }

    // if (Auth::guard('admin')->check()) {
    //   return $next($request);
    // }

    // if(Auth::check()) {
    //     return $next($request);
    // }else {
    //     return redirect('/admin/login')->with('message','Access refusé ');
    // }

    if($request->user()->type_users == 'Admin'){
        return $next($request);
    }
    else{
        request()->session()->flash('error','You do not have any permission to access this page');
        // return redirect()->route($request->user()->type_users);
    }

    return abort(403);
  }
}
