<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MenuCart;


class Product extends Model
{

  protected $fillable = [

    'product_code',
    'product_image',
    'name',
    'cat_id',
    'type_id',
    'description',
    'price',
    'stock_quantity',
    'status',
  ];



      public function category_info()
    {
      return $this->hasOne('App\Category', 'id', 'cat_id' );
    }

    public function type()
  {
    return $this->hasOne('App\FoodType', 'id', 'type_id' );
  }
      public function stock_quantity_info()
    {
      return $this->belongsTo('App\Stock', 'quantity' );
    }



}
