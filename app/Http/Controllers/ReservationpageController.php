<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Reservation;
use App\Product;
use App\Mail\Order;
use Mail;

class ReservationpageController extends Controller
{

  function reserve_table()
  {
    $reservations = Reservation::all();
  return view('dashboardpages.reservationTable.index', compact('reservations'));
  }


  function index()
  {
    $products = Product::all();
    return view('frontpage.reservationpage.index', compact('products'));
  }


  function create(Request $request)
{

  $res = Reservation::where('journeyDate', $request->journeyDate)->where('time', $request->time)->where('table_number',$request->table_number)->count();

  if($res != 1){
    Reservation::insert([
      'journeyDate'=>$request->journeyDate,
      'time'=>$request->time,
      'table_number'=>$request->table_number,
      'reservation_type'=>$request->reservation_type,
      'address'=>$request->address,
      'created_at'=>Carbon::now(),
    ]);
    return back()->with('success','Reservation Successfull !!');
    // $name = $request->name;
    // Mail::to($request->email)->send(new Order($name));
  }
  else{
    return back()->with('error','Sorry! The Table is already Booked.');

  }
 }



}
