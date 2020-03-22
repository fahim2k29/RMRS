<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FoodType;

class FoodTypeController extends Controller
{


  protected function validator(Request $request)
  {
      return Validator::make($request, [
        'user_id'=> ['required'],
        'name'=> ['required','string','max:30'],
        'description'=> ['required','string','max:100'],

      ]);
  }


  function index()
  {
    $foodtypes = FoodType::all();
    return view('dashboardpages.foodtype.index',compact('foodtypes'));
  }
  function create(Request $request)
  {

    FoodType::create([
      'name'=>$request->name,
      'description'=>$request->description,
    ]);
    return back();
  }

}
