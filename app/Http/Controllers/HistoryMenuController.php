<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryMenuController extends Controller
{
  function index()
  {
    return view('frontpage.historypage.index');
  }
}
