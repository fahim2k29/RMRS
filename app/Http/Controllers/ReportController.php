<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Menucart;
use App\Product;
use Carbon\Carbon;
use App\Order;
use App\OrderProduct;
use PDF;
use App\Stock;
use App\Return_product;


class ReportController extends Controller
{

  function index($id)
  {
    $orders = Order::where('id',$id)->first();
    $order_products = OrderProduct::where('order_id',$id)->get();

    return view ('report.invoice', compact('orders', 'order_products'));
  }



  public function daily(){

      return view('Admin.DailyReports.index');
  }

  public function dateinput(Request $request){

    $dailyreport = OrderProduct::where('created_at',$request-> date)->get();
    $sum = OrderProduct::where('created_at',$request-> date)->sum('amount');

    return view('Admin.DailyReports.index',compact('dailyreport','sum'));

  }



  // public function monthly(){
  //
  //     return view('Admin.Reports.Monthly_Sales');
  //
  // }
  // public function monthinput(Request $request){
  //   $from = $request -> from;
  //   $to = $request -> to;
  //   $monthlyreport = Orderdetails::whereBetween('created_at',[$from, $to])->get();
  //   $sum = Orderdetails::whereBetween('created_at',[$from, $to])->sum('amount');
  //
  //   return view('Admin.Reports.Monthly_Sales',compact('monthlyreport','sum'));
  //
  // }


//
// public function r_stock(){
//   $stockdetails = Stock::where("quantity",0)->get();
//   return view('Admin.Reports.stockdetails',compact('stockdetails'));
// }
//
// public function r_refund(){
//   //$rps = Return_product::all();
//   return view('Admin.Reports.refunddetails');
// }
//
// public function refundbydate(Request $request){
//   $rps = Return_product::where('created_at',$request-> date)->get();
//   return view('Admin.Reports.refunddetails',compact('rps'));
// }
}
