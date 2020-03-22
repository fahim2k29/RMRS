<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menucart;
use App\Product;
use Carbon\Carbon;
use Auth;

class MenucartController extends Controller
{
     function addtocart($product_id)
     {
       $ip_address = $_SERVER['REMOTE_ADDR'];
       if (Menucart::where('customer_ip',$ip_address)->where('product_id', $product_id)->exists()  )
        {
          Menucart::where('customer_ip',$ip_address)->where('product_id', $product_id)->increment('product_quantity', 1);
       }
       else {
         Menucart::insert([
           'user_id' => Auth::user()->id,
           'customer_ip' => $ip_address,
           'product_id' => $product_id,
           'created_at' => Carbon::now(),

         ]);
       }
       return back();
     }



     function cart()
     {
       $cart_items = Menucart::where('customer_ip', $_SERVER["REMOTE_ADDR"])->get();
       return view('cart.menucart.index', compact('cart_items'));
     }


      function cart_destroy($cart_id)
      {
        $cart_items = Menucart::find($cart_id)->delete();
        return back();
      }


      function cart_clear()
      {
      $cart_items =  Menucart::where('customer_ip', $_SERVER["REMOTE_ADDR"])->delete();
        return back();
      }


      function  checkout()
     {
        $cart_items = Menucart::where('customer_ip', $_SERVER["REMOTE_ADDR"])->get();
       return view('cart.menucart.placeOrder', compact('cart_items'));
       return back();
     }


     //
     // function order_create(Request $request)
     // {
     //   Menucart::insert([
     //     'area'=>$request->area,
     //     'location' =>$request->location,
     //   ]);
     //   return back();
     //
     // }

}
