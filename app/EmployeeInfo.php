<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\EJobInfo;


class EmployeeInfo extends Model
{
  protected $fillable = [
      'user_id',
      'emp_image',
      'emp_fname',
      'emp_lname',
      'emp_phone1',
      'emp_phone2',
      'emp_email',
      'employee_nid',
      'emp_birth_date',
      'emp_age',
      'emp_preaddress',
      'emp_peraddress',
      'emp_marital_status',
      'emrgncy_name',
      'emrgncy_phone',
      'emrgncy_relation',
      'emrgncy_address',
  ];

}
