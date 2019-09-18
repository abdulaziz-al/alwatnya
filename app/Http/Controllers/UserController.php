<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Session;

use App\User;

class UserController extends Controller
{
    // user index page (dashboard)


    public function index(  ) {

        
        $user = User::all();
      

        return view('users.index')->with('user',$user);
    }

    public function showCreatePage(){
        
     return view('users.createOredr');
    }

    public function createOrder(Request $request ){


        Session::flash('success', $request->Other_name[0]);

        return Redirect::back(); 
        
    }


    // user/settings page:
    public function settings() {
        return view('users.settings');
    }
    // 1 user/settings/info page
    public function viewInfoPage() {
        return view('users.info');
    }
    // 2 user/settings/info/edit page
    public function viewEditPage() {
        return view('users.editinfo');
    }
    // 3 user/settings/password
    public function password() {
        return view('users.changepassword');
    }
    // 4 user/settings/crs page
    public function viewCRs() {
        return view('users.viewCRs');
    }
    // 5 user/settings/crs/edit page
    public function crEditView() {
        return view('users.editcr');
    }

    // user quick links:
    // 1 user/neworder page
    public function newOrder() {
        return view('users.neworder');
    }



    function insert(Request $request)
    {
     if($request->ajax())
     {
      $rules = array(
       'Other_name.*'  => 'required',
       'Other_number.*'  => 'required',
        'Other_exp.*'=> 'required',
        'Other_file.*'=> 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $Other_name = $request->Other_name;
      $Other_number = $request->Other_number;
      $Other_exp = $request->Other_exp;
      $Other_file = $request->Other_file;
      for($count = 0; $count < count($Other_name); $count++)
      {
       $data = array(
        'Other_name' => $Other_name[$count],
        'Other_number'  => $Other_number[$count],
        'Other_exp'  => $Other_exp[$count],
        'Other_file'  => $Other_file[$count]


       );
       $insert_data[] = $data; 
      }

      DynamicField::insert($insert_data);
      return response()->json([
       'success'  => 'Data Added successfully.'
      ]);
     }
    }
}
