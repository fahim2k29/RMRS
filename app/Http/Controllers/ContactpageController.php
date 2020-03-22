<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactpageController extends Controller
{


  protected function validator(Request $request)
      {
          return Validator::make($request, [

            'name'=> ['required','string','max:30'],
            'email'=> ['required','email','max:30'],
            'phone'=> ['required','integer','min:11','max:11'],
            'feedback'=> ['required','string','max:200'],
          ]);
      }


    function contact_index()
    {
      return view('frontpage.contactpage.index');
    }


    function create(Request $request)
    {
      Contact::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'feedback'=>$request->feedback,
      ]);
      return back();
    }


    function query_index()
    {
    $contacts = Contact::all();
    return view('dashboardpages.querypage.index', compact('contacts'));
    }


    function query_destroy($id)
     {
         Contact::where('id',$id)->delete();
         return redirect()->route('query')
         ->with('success','Query deleted successfully.');
     }
}
