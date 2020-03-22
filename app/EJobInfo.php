<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EmployeeInfo;

class EJobInfo extends Model
{

  protected $fillable = [
  'e_id',
  'designation',
  'salary',
  'bonus',
  'joindate',
  'resigndate',
  'status',
  ];

        public function employee_info()
      {
        return $this->hasOne('App\EmployeeInfo','id','e_id');
      }





}
