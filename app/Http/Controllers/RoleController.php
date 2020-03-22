<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{

  function index()
  {
    $roles = Role::all();
    return view('dashboardpages.role.index',compact('roles'));
  }


  function create(Request $request)
  {
    Role::insert([
      'name'=>ucwords($request->name),
      'description'=>ucwords($request->description),
    ]);
    return back();
  }


            function role_destroy($id)
             {
                 Role::where('id',$id)->delete();
                 return redirect()->route('role')
                 ->with('success','Role deleted successfully.');
             }

}
