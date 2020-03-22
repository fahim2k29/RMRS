<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;
use App\EmployeeInfo;


class EmployeeInfoController extends Controller
{


      protected function validator(Request $request)
      {
          return Validator::make($request, [
            'user_id'=> ['required'],
            'emp_image'=> ['required'],
            'emp_fname'=> ['required','string','max:30'],
            'emp_lname'=> ['required','string','max:20'],
            'emp_phone1'=> ['required','integer','min:11','max:11'],
            'emp_phone2'=> ['integer','min:11','max:11'],
            'emp_email'=> ['required','email','max:30'],
            'employee_nid'=> ['required','integer','min:13','max:20'],
            'emp_birth_date'=> ['required','date_format:"d-m-Y"'],
            'emp_age'=> ['integer','max:3'],
            'emp_preaddress'=> ['required','string','max:100'],
            'emp_peraddress'=> ['required','string','max:100'],
            'emp_marital_status'=>['required','string'],
            'emrgncy_name'=>['required','string','max:30'],
            'emrgncy_phone'=> ['required','integer','min:11','max:11'],
            'emrgncy_relation'=> ['required','string'],
            'emrgncy_address'=> ['required','string','max:100'],
          ]);
      }





      function index()
      {

        return view('employee.test');
      }



      function e_contact()
      {
          $employee_infos = EmployeeInfo::all();
        return view('employee.contact_info', compact('employee_infos'));
      }



      function e_emergency()
      {
          $employee_infos = EmployeeInfo::all();
        return view('employee.emergency_info', compact('employee_infos'));
      }



      function create(Request $request)
      {

          $last_inserted_id = EmployeeInfo::insertGetId([
          'user_id'=>$request->user_id,
          'emp_image'=>$request->emp_image,
          'emp_fname'=>ucwords($request->emp_fname),
          'emp_lname'=>ucwords($request->emp_lname),
          'emp_phone1'=>$request->emp_phone1,
          'emp_phone2'=>$request->emp_phone2,
          'emp_email'=>$request->emp_email,
          'employee_nid'=>$request->employee_nid,
          'emp_birth_date'=>$request->emp_birth_date,

          'emp_age'=>Carbon::parse($request->emp_birth_date)->age,

          'emp_preaddress'=>ucwords($request->emp_preaddress),
          'emp_peraddress'=>ucwords($request->emp_peraddress),
          'emp_marital_status'=>$request->emp_marital_status,
          'emrgncy_name'=>ucwords($request->emrgncy_name),
          'emrgncy_phone'=>$request->emrgncy_phone,
          'emrgncy_relation'=>ucwords($request->emrgncy_relation),
          'emrgncy_address'=>$request->emrgncy_address,

        ]);


        if ($request->hasFile('emp_image')) {
              $photo_upload     =  $request ->emp_image;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  $last_inserted_id . "." . $photo_extension;
              Image::make($photo_upload)->resize(320,240)->save(base_path('public/Image/Employee_Image/'.$photo_name),100);
              EmployeeInfo::find($last_inserted_id)->update([
                  'emp_image' => $photo_name,
                      ]);
                    }
        return back();
      }


      function updatepage($id)
      {
        $info = EmployeeInfo::findOrfail($id);
        return view('employee.create', compact('info') );
      }


      function update(Request $request, $id)
      {
        EmployeeInfo::find($id)->update([
        'user_id'=>$request->user_id,
        'emp_image'=>$request->emp_image,
        'emp_fname'=>ucwords($request->emp_fname),
        'emp_lname'=>ucwords($request->emp_lname),
        'emp_phone1'=>$request->emp_phone1,
        'emp_phone2'=>$request->emp_phone2,
        'emp_email'=>$request->emp_email,
        'employee_nid'=>$request->employee_nid,
        'emp_birth_date'=>$request->emp_birth_date,

        'emp_age'=>$request->emp_age,

        'emp_preaddress'=>ucwords($request->emp_preaddress),
        'emp_peraddress'=>ucwords($request->emp_peraddress),
        'emp_marital_status'=>$request->emp_marital_status,
        'emrgncy_name'=>ucwords($request->emrgncy_name),
        'emrgncy_phone'=>$request->emrgncy_phone,
        'emrgncy_relation'=>ucwords($request->emrgncy_relation),
        'emrgncy_address'=>$request->emrgncy_address,
      ]);


      if ($request->hasFile('emp_image')) {
            $photo_upload     =  $request ->emp_image;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  $id . "." . $photo_extension;
            Image::make($photo_upload)->resize(320,240)->save(base_path('public/Image/Employee_Image/'.$photo_name),100);
            EmployeeInfo::find($id)->update([
                'emp_image' => $photo_name,
                    ]);
                  }
        return redirect()->route('employee_table');
      }


      function employee_table()
      {
        $employee_infos = EmployeeInfo::all();
        return view('employee.index', compact('employee_infos') );
      }


}
