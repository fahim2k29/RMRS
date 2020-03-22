<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Reservation;
use App\Order;
use App\OrderProduct;
use App\Menucart;
use App\Product;

class OrderController extends Controller
{


                      function reservation_delete($id)
                       {
                           Reservation::where('id',$id)->delete();
                           return redirect()->route('order')
                           ->with('success','Order deleted successfully.');
                       }





                        function order_create(Request $request)
                        {
                          //$address = $request->area.' '. $request->location
                           $order_id = Order::insertGetId([
                              'user_id'=>$request->user_id,
                              'address'=>$request->area.' '. $request->location,
                              'total_price'=>$request->total_price,
                              'pm'=>$request->pm,
                              'payment_status'=>1,
                      ]);

                      $count = Menucart::where('customer_ip', $_SERVER["REMOTE_ADDR"])->count();
                      while($count>0){
                        $cart_items = Menucart::where('customer_ip', $_SERVER["REMOTE_ADDR"])->first();

                        $p_quantity = Product::where('id',$cart_items->product_id)->first();
                        $n_quantity = ($p_quantity->stock_quantity) - ($cart_items -> product_quantity);
                      //  dd($n_quantity);
                        if($n_quantity >= 0)
                        {
                          OrderProduct::insert([
                            'order_id'=> $order_id,
                            'product_id'=> $cart_items -> product_id,
                            'quantity'=> $cart_items -> product_quantity,
                          ]);

                          Menucart::findOrFail($cart_items->id)->delete();
                          Product::where('id',$cart_items->product_id)->update([
                            'stock_quantity'=> $n_quantity,
                          ]);
                        }
                        else
                        {
                          return back()->with('error','This product is not available');
                        }


                        $count =$count-1;
                      }

                       if ($request->pm == 1) {
                         return redirect()->route('customer_home')->with('success','Your Order Placed successfully');
                        // echo "Your Order Placed successfully";


                       }
                       else {

                         $total_price = $request->total_price;
                         return view('payment.stripe', compact('total_price', 'order_id'));
                       }

                        }






}
