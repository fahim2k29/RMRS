<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;



class HomepageController extends Controller
{
    function index()
    {
        $products = Product::all();

      return view('frontpage.homepage.index', compact('products'));
    }




}
