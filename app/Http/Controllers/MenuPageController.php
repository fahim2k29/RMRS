<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menupage;
use App\Product;

class MenuPageController extends Controller
{
    function index()
    {
      $products = Product::all();
      return view('frontpage.menupage.index', compact('products'));
    }




}
