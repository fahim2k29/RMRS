<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
  protected $fillable = [
    'quantity',
  ];



          public function product_quantity_info()
        {
          return $this->hasOne('App\Product','id');
        }


}
