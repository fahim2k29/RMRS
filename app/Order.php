<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
  protected $fillable = [


    'user_id',
    'address',
    'total_price',
    'payment_status',

  ];

  public function o_products()
  {
    return $this-> hasOne('App\OrderProduct', 'order_id' ,'id');
  }
  public function customer()
  {
    return $this-> hasOne('App\User', 'id' ,'user_id');
  }



}
