<?php

namespace App\Http\Middleware;
use Auth;


use Closure;

class Employee
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
      $userRoles = Auth::user()->relationroles->pluck('name');
      if($userRoles->contains('Employee')){
        return $next($request);
      }
      return redirect('login');
    }
}
