<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->utype==='admin'){
    //  if(session('utype')==='admin'){
      //if(Auth::user()->utype==='admin'){
        return $next($request);
      }
      dd("you are not authorized");
  //    return response->json('you are not authorized');
    }

    //session()->flash();
    //return redirect()->route('login')
}
