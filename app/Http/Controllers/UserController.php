<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    $roles = Role::all();
    return view('dashboardpages.dashboardhome.index',compact('users','roles'));
  }



          public function UserUpdate(User $user)
          {
                $roles = Role::all();
                 return view('dashboardpages.Role.update')->with([
                   'user' => $user,
                   'roles'=> $roles
                 ]);
          }


          public function update(Request $request,User $user)
          {
            $user->relationroles()->sync($request->roles);
              return redirect()->route('dashboard')
                        ->with('success','User updated successfully.');
          }





  // public function role_update()
  // {
  //   return view('dashboardpages.dashboardhome.role_update');
  // }
  //
  //
  // public function update()
  // {
  //   return view('dashboardpages.dashboardhome.role_update');
  // }



}
