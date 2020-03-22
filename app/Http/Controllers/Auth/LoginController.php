<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

      protected function redirectTo()
      {
        $userRoles = Auth::user()->relationroles->pluck('name');
        if($userRoles->contains('Admin')){
          return '/admin/user';
        }
        elseif($userRoles->contains('Delivery Boy')){
          return '/delivery/details';
        }
        elseif($userRoles->contains('Chef')){
          return '/product';
        }
        elseif($userRoles->contains('Customer')){
          return '/';
        }
        elseif($userRoles->contains('Employee')){
          return '/employeeinfo';
        }
        else{
          return '/';
        }
      }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
