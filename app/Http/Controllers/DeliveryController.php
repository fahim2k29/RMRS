<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class DeliveryController extends Controller
{
  function index()
  {
    $orders = Order::all();
    return view('delivery.index', compact('orders'));
  }
  function status($id)
  {
    Order::where('id',$id)->update([
      'd_status' => 1,
      'payment_status' => 2,
    ]);

    $orders = Order::all();
    return view('delivery.index', compact('orders'));
  }

}
