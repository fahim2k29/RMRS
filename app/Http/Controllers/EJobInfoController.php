<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EJobInfo;
use App\EmployeeInfo;

class EJobInfoController extends Controller
{


  protected function validator(Request $request)
      {
          return Validator::make($request, [

            'e_id'=> ['required'],
            'designation'=> ['required','email','max:30'],
            'salary'=> ['required','integer','max:6'],
            'bonus'=> ['required','integer','max:5'],
            'joindate'=> ['required','date_format:"d-m-Y"'],
            'resigndate'=> ['required','date_format:"d-m-Y"'],
            'status'=> ['required','string','max:20'],
          ]);
      }



    function index()
    {
      $e_job_infos = EJobInfo::all();
      return view('employee.job.index', compact('e_job_infos'));
    }



    function index_for_employee()
    {
      $e_job_infos = EJobInfo::all();
      return view('employee.job.index_for_employee', compact('e_job_infos'));
    }



    function create(Request $request)
    {
      EJobInfo::insert([
        'e_id'=>$request->e_id,
        'designation'=>ucwords($request->designation),
        'salary'=>$request->salary,
        'bonus'=>$request->bonus,
        'joindate'=>$request->joindate,
        'resigndate'=>$request->resigndate,
        'status'=>$request->status,
      ]);
      return back();
    }



    function create_form()
    {
      $einfo = EmployeeInfo::all();
      return view('employee.job.create' , compact('einfo'));
    }



      function e_job_updatepage($id)
      {
        $jobinfo = EJobInfo::findOrfail($id);
        return view('employee.job.updatepage', compact('jobinfo') );
      }




      function e_job_update(Request $request, $id)
      {
        EJobInfo::find($id)->update([
          'e_id'=>$request->e_id,
          'designation'=>ucwords($request->designation),
          'salary'=>$request->salary,
          'bonus'=>$request->bonus,
          'joindate'=>$request->joindate,
          'resigndate'=>$request->resigndate,
          'status'=>$request->status,
      ]);

        return redirect()->route('e_jobInfo');
      }



}
