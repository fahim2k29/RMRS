<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewThemeController extends Controller
{


  function index()
  {
    return view('newtheme.index');
  }


}
