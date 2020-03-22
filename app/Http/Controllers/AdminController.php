<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployeeInfo;


class AdminController extends Controller
{
  function index()
  {
      $employee_infos = EmployeeInfo::all();
    return view('Admin.employee.index', compact('employee_infos'));

  }


}
