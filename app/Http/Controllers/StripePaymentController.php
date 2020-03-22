<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Session;
use OrderProduct;
use App\Order;



class StripePaymentController extends Controller
{

  public function stripe()
   {
       return view('payment.stripe');
   }



   public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * $request->total_price,
                "currency" => "bdt",
                "source" => $request->stripeToken,
                "description" => "Test payment from awesomecafe"
        ]);
        $id = $request->order_id;
        Order::find($id)->update([
          'payment_status'=> 2
        ]);

          return redirect()->route('invoice',$id);
        // Session::flash('success', 'Payment successful!');
        //
        // return back();
    }



}
