<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    // user index page (dashboard)


    public function index(  ) {

        
        $user = User::all();
      

        return view('users.index')->with('user',$user);
    }

    function createOrder(){
        
     return view('users.createOredr');
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
       'first_name.*'  => 'required',
       'last_name.*'  => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
      }

      $first_name = $request->first_name;
      $last_name = $request->last_name;
      for($count = 0; $count < count($first_name); $count++)
      {
       $data = array(
        'first_name' => $first_name[$count],
        'last_name'  => $last_name[$count]
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
