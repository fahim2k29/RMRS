<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\OrderProduct;
use App\Product;


class CustomerController extends Controller
{



  function index()
  {
    $orders = Order::where('user_id', Auth::id())->get();
    return view('customer.profile', compact('orders'));
  }


  function order_details()
  {
    $orders = Order::all();
    $order_products = OrderProduct::all();
    $products = Product::all();
    return view('Admin.Order.index', compact('orders', 'order_products', 'products'));
  }







}
