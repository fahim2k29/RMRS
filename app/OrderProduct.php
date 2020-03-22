<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{

    protected $fillable = [

  'product_id',
  'order_id',
  'quantity',

];

  public function orders()
  {
    return $this-> belongsTo('App\Order', 'order_id');
  }

  public function products()
  {
    return $this-> belongsTo('App\Product', 'product_id');
  }



}
