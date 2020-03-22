<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewpageController extends Controller
{
    function index()
    {
      return view('frontpage.reviewpage.index');
    }



    function create(Request $request)
    {
      Review::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'rating'=>$request->rating,
        'feedback'=>$request->feedback,
      ]);
      return back();

    }



}
