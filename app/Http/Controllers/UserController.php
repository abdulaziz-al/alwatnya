<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;
use App\UserOreder;
use App\Comment;
use App\CommercialRecord;
use App\Coo;
use App\exemptionLetter;
use App\File;
use App\Invoice;
use App\invoiceItem;
use App\muqassahStatement;
use App\OrderOtherdocs;
use App\PackingList;
use App\PolicyNumber;
use App\ReleaseLetter;
use App\Saso;
use App\Statu;
use App\Truck;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    // user index page (dashboard)


    public function index(  ) {

        
        $order = UserOreder::where('user_id',auth()->user()->id);
        $cr_number = CommercialRecord::where('user_id',auth()->user()->id)->get();

        $userInfo =Array('order'=>$order , 'cr_number'=>$cr_number );


        return view('users.index' ,$userInfo);
    }

    public function showCreatePage(){
        
     return view('users.createOredr');
    }

    public function createOrder(Request $request ){

       
      




/*
        'comment_description','comment_by_user','comment_to_user'
        'user_id','order_id','file_id','cr_number','cr_expiry'
        'order_id','coo_number','expirydate','file_id'
        'order_id','el_number','expirydate','file_id'
        'file_name','file_location'
        'invoiceItems_id'
        'invoiceItems_description','subtotal'
        'order_id','ms_number','expirydate','description','file_id'
        'order_id','ood_number','expirydate','ood_name','file_id'
        'order_id','pl_number','expirydate','file_id'
        'order_id','policy_number','expirydate','file_id'
        'order_id','rl_number','expirydate','file_id'
        'order_id','saso_number','expirydate','file_id'
        'status_name','status_active'
        'driver_name','driver_mobile_1','driver_mobile_2','order_id','order_id'
        'user_id','admin_id','cr_id','invoice_id','importeport_id','number_of_trucks','status_id','comment_id'

*/

        


     
       
         //////////////////////////////////
        ////////// Get Waiting status from status table //////////////
         $Statu =   Statu::find(1);
         ///////////////////////////////
         ////////// Get admin role  from Role table //////////////
         $Role =   Role::find(1);
         ///////////////////////////////
         
         $Comment =  new Comment();
         $Comment->comment_description = $request->comment_order ;
         $Comment->comment_by_user = auth()->user()->id;
         $Comment->comment_to_user = $Role->id;
         $Comment->save();

         $File = new File();
         $File->file_name = "السجل التجاري ";
         $File->file_location = $request->cr_file;
 
         $File->save();

         $invoiceItem =  new invoiceItem();
         $invoiceItem->invoiceItems_description = "فاتورة رقم 4545";
         $invoiceItem->subtotal = 100;
         $invoiceItem->save();

         $Invoice =  new Invoice();
         $Invoice->invoiceItems_id = $invoiceItem->id;
         $Invoice->save();
         
 
 
         $CommercialRecord =  new CommercialRecord();
         $CommercialRecord->user_id = auth()->user()->id;
         $CommercialRecord->file_id = $File->id;
         $CommercialRecord->cr_number = auth()->user()->cr_number;
         $CommercialRecord->cr_expiry = auth()->user()->cr_exp;
         $CommercialRecord->save();

         $UserOreder =  new UserOreder();
         $UserOreder->user_id =  auth()->user()->id;
         $UserOreder->admin_id = null ;
         $UserOreder->cr_id =  $CommercialRecord->id;
         $UserOreder->invoice_id =  $Invoice->id;
         $UserOreder->importeport_id = true ;
         $UserOreder->number_of_trucks =$request->truck_of_number;
         $UserOreder->status_id = $Statu->id;
         $UserOreder->comment_id = $Comment->id;
         $UserOreder->save();



         
         //////////////////Other data from Request///////////////////
        $Other_name = $request->Other_name;
        $Other_number = $request->Other_number;
        $Other_exp = $request->Other_exp;
        $Other_file = $request->Other_file;
        /////////////////Save the data to other order table ////////////////////

        
        for($count = 0; $count < count($Other_name); $count++)
        {


            $file_ood = new File();
            $file_ood->file_name = 'ملفات أخرى';
            $file_ood->file_location = $Other_file[$count];


            $file_ood->save();


            $ood = new OrderOtherdocs();
            $ood->order_id = $UserOreder->id ;
            $ood->ood_name = $Other_name[$count];
            $ood->ood_number = $Other_number[$count];
            $ood->expirydate = $Other_exp[$count];
            $ood->file_id = $file_ood->id;

            $ood->save();

        }

        





         $File_coo = new File();
         $File_coo->file_name = "شهادة بلد المنشأ ";
         $File_coo->file_location = $request->coo_file;
 
         $File_coo->save();

         $Coo =  new Coo();
         $Coo->order_id = $UserOreder->id;
         $Coo->coo_number = $request->coo_number;
         $Coo->expirydate = $request->expirydate_coo ;
         $Coo->file_id = $File_coo->id ;
 
         $Coo->save();


         $File_el = new File();
         $File_el->file_name = "خطاب إعفاء من التفتيش ";
         $File_el->file_location = $request->el_file;
 
         $File_el->save();

        $exemptionLetter =  new exemptionLetter();
        $exemptionLetter->order_id = $UserOreder->id ;
        $exemptionLetter->el_number = $request->el_number ;
        $exemptionLetter->expirydate = $request->el_expirydate ;
        $exemptionLetter->file_id = $File_el->id ;

        $exemptionLetter->save();
 

        $File_ms = new File();
        $File_ms->file_name = "بيان المقاصة  ";
        $File_ms->file_location = $request->ms_file;

        $File_ms->save();
       

       $muqassahStatement =  new muqassahStatement();
       $muqassahStatement->order_id = $UserOreder->id;
       $muqassahStatement->ms_number = $request->ms_number;
       $muqassahStatement->expirydate = $request->ms_expirydate;
       $muqassahStatement->file_id = $File_ms->id;
       
       $muqassahStatement->save();

        
       $File_pl = new File();
       $File_pl->file_name = "قائمة التعبئة ";
       $File_pl->file_location = $request->pl_file;

       $File_pl->save();

      $PackingList =  new PackingList();
      $PackingList->order_id = $UserOreder->id;
      $PackingList->pl_number = $request->packing_list_number;
      $PackingList->expirydate = $request->pl_expirydate;
      $PackingList->file_id = $File_pl->id;

      $PackingList->save();

       
      $File_pn = new File();
      $File_pn->file_name = "البوليصة ";
      $File_pn->file_location = $request->policy_file;

      $File_pn->save();

     $PolicyNumber =  new PolicyNumber();
     $PolicyNumber->order_id = $UserOreder->id;
     $PolicyNumber->policy_number = $request->policy_number ;
     $PolicyNumber->expirydate = $request->policy_expirydate;
     $PolicyNumber->file_id = $File_pn->id;

     $PolicyNumber->save();



          
     $File_rl = new File();
     $File_rl->file_name = "خطاب الفسح ";
     $File_rl->file_location = $request->rl_file;

     $File_rl->save();

    $ReleaseLetter =  new ReleaseLetter();
    $ReleaseLetter->order_id = $UserOreder->id;
    $ReleaseLetter->rl_number = $request->release_letter_number;
    $ReleaseLetter->expirydate = $request->rl_expirydate;
    $ReleaseLetter->file_id = $File_rl->id;

    $ReleaseLetter->save();


    

    $File_saso = new File();
    $File_saso->file_name = "شهادة المطابقة للمنتجات المصدرة للمملكة ";
    $File_saso->file_location = $request->saso_file;

    $File_saso->save();

   $Saso =  new Saso();
   $Saso->order_id = $UserOreder->id;
   $Saso->saso_number = $request->saso_number;
   $Saso->expirydate = $request->saso_expirydate;
   $Saso->file_id = $File_saso->id;

   $Saso->save();
 

   $File_truck = new File();
   $File_truck->file_name = "إستمارة ملكية الشاحنات ";
   $File_truck->file_location = $request->tos_file;

   $File_truck->save();

  $Truck =  new Truck();
  $Truck->driver_name = $request->driver_name;
  $Truck->driver_mobile_1 = $request->truck_ownership_number1;
  $Truck->driver_mobile_2 = $request->truck_ownership_number2;
  $Truck->order_id = $UserOreder->id;
  $Truck->Truck_ownership_number = $request->Truck_ownership;

  $Truck->save();



  
        

      

  



        Session::flash('success','تم تسجيل طلبك');
        return Redirect('/user'); 


        
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

}
