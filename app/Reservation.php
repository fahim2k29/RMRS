<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  protected $fillable = [
    
    'journeyDate',
    'time',
    'choose_food',
    'choose_item',
    'table_number',
    'reservation_type',
    'address',
  ];
}
