<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Session;



class UserController extends Controller
{
    // user index page (dashboard)


    public function index(  ) {

        
        $order_all = UserOreder::where('user_id',auth()->user()->id);

        $order_waiting = UserOreder::where('user_id',auth()->user()->id)
                               ->where('status_id',1);
                   
        $order_Accepte = UserOreder::where('user_id',auth()->user()->id)
                                  ->where('status_id',2);
        
        $order_Reject = UserOreder::where('user_id',auth()->user()->id)
                                  ->where('status_id',3);
         




        $cr_number = CommercialRecord::where('user_id',auth()->user()->id)->get();

        $userInfo =Array('order'=>$order_all ,'order_waiting'=>$order_waiting,'order_Reject'=>$order_Reject,'order_Accepte'=>$order_Accepte, 'cr_number'=>$cr_number );


        return view('users.index' ,$userInfo);
    }

    public function showCreatePage(){

        $userCR = CommercialRecord::where('user_id',auth()->user()->id)->first();

        
     return view('users.createOredr')->with('userCR',$userCR);
    }

    public function createOrder(Request $request ){

        $messages = [
    
            'Other_file.*'=>'ولد لازم '
            
        ];
        
        $this->validate($request, [
            'comment_order'=>'required',
           
            
        ],$messages);

        if(substr($request->invoice_file , -4 ) != '.pdf' || substr($request->saso_file  , -4 ) != '.pdf' ||substr($request->rl_file  , -4 ) != '.pdf'||
        substr($request->policy_file  , -4 ) != '.pdf' ||substr($request->pl_file  , -4 ) != '.pdf'|| substr($request->coo_file  , -4 ) != '.pdf' ||
        substr($request->el_file  , -4 ) != '.pdf' || substr($request->ms_file  , -4 ) != '.pdf'|| substr($request->tos_file  , -4 ) != '.pdf'||
        substr($request->Other_file  , -4 ) != '.pdf' ){

            Alert::info('يجب ادخال ملف بصيغة ','PDF file' );
            return redirect::back();

        }else{

        
               
        




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

        

        $number  = UserOreder::all()->last();
     $num = 1000 + $number->id;  
       
         //////////////////////////////////
        ////////// Get Waiting status from status table //////////////
         $Statu =   Statu::find(1);
         ////////// Get admin role  from Role table //////////////
         $Role =   Role::find(1);
         ///////////////////////////////
         
         $Comment =  new Comment();
         $Comment->comment_description = $request->comment_order ;
         $Comment->comment_by_user = auth()->user()->id;
         $Comment->comment_to_user = $Role->id;
         $Comment->save();

         $userCR = CommercialRecord::where('user_id', auth()->user()->id)->first();

         $new_date = $Comment->created_at->format('dmY');

//////////////////// Invoice Table ////////////////////////////////////////
         $file_Invoice = $request->file('invoice_file');
         $extension = $file_Invoice->getClientOriginalExtension();
         $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
         $file_name = $num.$new_date . 'فاتورة البضاعة '. $request->invoice_number. '.'. $extension;
         $file_Invoice->move($destination_path, $file_name);

         $invoiceItem =  new invoiceItem();
         $invoiceItem->invoiceItems_description =$file_name ;
         $invoiceItem->save();

         $Invoice =  new Invoice();
         $Invoice->invoiceItems_id = $invoiceItem->id;
         $Invoice->save();
         
 //////////////////////////////////////////////////////////////////////////////

         $countTrunl = count($request->driver_name);


         $UserOreder =  new UserOreder();
         $UserOreder->user_id =  auth()->user()->id;
         $UserOreder->admin_id = null ;
         $UserOreder->cr_id = $userCR->id  ;
         $UserOreder->invoice_id =  $Invoice->id;
         $UserOreder->importeport_id = false ;
         $UserOreder->number_of_trucks =$countTrunl;
         $UserOreder->status_id = $Statu->id;
         $UserOreder->comment_id = $Comment->id;
         $UserOreder->save();



         if( $request->coo_file != null ){
         $file_coo = $request->file('coo_file');
         $extension = $file_coo->getClientOriginalExtension();
         $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
         $file_name = $num.$new_date . 'شهادة بلد المنشأ '. $request->coo_number. '.'. $extension;
         $file_coo->move($destination_path, $file_name);

         $File_coo = new File();
         $File_coo->file_name = "شهادة بلد المنشأ ";
         $File_coo->file_location = $file_name;
 
         $File_coo->save();

         $Coo =  new Coo();
         $Coo->order_id = $UserOreder->id;
         $Coo->coo_number = $request->coo_number;
         $Coo->expirydate = $request->expirydate_coo ;
         $Coo->file_id = $File_coo->id ;
 
         $Coo->save();
         }else{

            $File_coo = new File();
            $File_coo->file_name = "شهادة بلد المنشأ ";
            $File_coo->file_location =  $request->coo_file;
    
            $File_coo->save();
   
            $Coo =  new Coo();
            $Coo->order_id = $UserOreder->id;
            $Coo->coo_number = $request->coo_number;
            $Coo->expirydate = $request->expirydate_coo ;
            $Coo->file_id = $File_coo->id ;
    
            $Coo->save();

         }

         if( $request->el_file != null ){

            $file_coo = $request->file('el_file');
            $extension = $file_coo->getClientOriginalExtension();
            $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
            $file_name = $num.$new_date . 'خطاب إعفاء '. $request->el_number. '.'. $extension;
            $file_coo->move($destination_path, $file_name);
   
            $File_el = new File();
            $File_el->file_name = "خطاب إعفاء  ";
            $File_el->file_location = $file_name;
    
            $File_el->save();
   
           
            $exemptionLetter =  new exemptionLetter();
               $exemptionLetter->order_id = $UserOreder->id ;
               $exemptionLetter->el_number = $request->el_number ;
               $exemptionLetter->expirydate = $request->el_expirydate ;
               $exemptionLetter->file_id = $File_el->id ;
       
               $exemptionLetter->save();
    
            }else{
   
                $File_el = new File();
                $File_el->file_name = "خطاب إعفاء  ";
                $File_el->file_location = $request->el_file;
        
                $File_el->save();
       
               $exemptionLetter =  new exemptionLetter();
               $exemptionLetter->order_id = $UserOreder->id ;
               $exemptionLetter->el_number = $request->el_number ;
               $exemptionLetter->expirydate = $request->el_expirydate ;
               $exemptionLetter->file_id = $File_el->id ;
       
               $exemptionLetter->save();
   
            }


            if( $request->ms_file != null ){

                $file_coo = $request->file('ms_file'); 
                $extension = $file_coo->getClientOriginalExtension();
                $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
                $file_name =$num. $new_date . 'بيان المقاصة '. $request->ms_number. '.'. $extension;
                $file_coo->move($destination_path, $file_name);
                
                
                $File_ms = new File();
                $File_ms->file_name = "بيان المقاصة  ";
                $File_ms->file_location = $file_name;
        
                $File_ms->save();
       
               
                $muqassahStatement =  new muqassahStatement();
                $muqassahStatement->order_id = $UserOreder->id;
                $muqassahStatement->ms_number = $request->ms_number;
                $muqassahStatement->expirydate = $request->ms_expirydate;
                $muqassahStatement->file_id = $File_ms->id;
                
                $muqassahStatement->save();
                }else{
       
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
       
                }
    
 

                if( $request->pl_file != null ){

                    $file_coo = $request->file('pl_file ');
                    $extension = $file_coo->getClientOriginalExtension();
                    $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
                    $file_name = $num.$new_date . 'قائمة التعبئة  '. $request->el_number. '.'. $extension;
                    $file_coo->move($destination_path, $file_name);
                    
                    $File_pl = new File();
                    $File_pl->file_name = "قائمة التعبئة ";
                    $File_pl->file_location = $file_name;
             
                    $File_pl->save();
           
                   
                    $PackingList =  new PackingList();
                    $PackingList->order_id = $UserOreder->id;
                    $PackingList->pl_number = $request->packing_list_number;
                    $PackingList->expirydate = $request->pl_expirydate;
                    $PackingList->file_id = $File_pl->id;
              
                    $PackingList->save();
                    }else{

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
                 
           
                    }
    

        
                    if( $request->policy_file != null ){

                        $file_coo = $request->file('policy_file ');
                        $extension = $file_coo->getClientOriginalExtension();
                        $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
                        $file_name = $num.$new_date . 'البوليصة   '. $request->policy_number. '.'. $extension;
                        $file_coo->move($destination_path, $file_name);
                        
                        $File_pn = new File();
                        $File_pn->file_name = "البوليصة ";
                        $File_pn->file_location = $file_name;
                  
                        $File_pn->save();
               
                       
                        $PolicyNumber =  new PolicyNumber();
                        $PolicyNumber->order_id = $UserOreder->id;
                        $PolicyNumber->policy_number = $request->policy_number ;
                        $PolicyNumber->expirydate = $request->policy_expirydate;
                        $PolicyNumber->file_id = $File_pn->id;
                   
                        $PolicyNumber->save();
                        }else{
     
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
                      
                     
               
                        }
        
      

                        if( $request->rl_file != null ){

                            $file_coo = $request->file('rl_file ');
                            $extension = $file_coo->getClientOriginalExtension();
                            $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
                            $file_name = $num.$new_date . 'خطاب الفسح   '. $request->release_letter_number. '.'. $extension;
                            $file_coo->move($destination_path, $file_name);
                            
                            $File_rl = new File();
                            $File_rl->file_name = "خطاب الفسح ";
                            $File_rl->file_location = $file_name;
                       
                            $File_rl->save();
                   
                           
                            $ReleaseLetter =  new ReleaseLetter();
                            $ReleaseLetter->order_id = $UserOreder->id;
                            $ReleaseLetter->rl_number = $request->release_letter_number;
                            $ReleaseLetter->expirydate = $request->rl_expirydate;
                            $ReleaseLetter->file_id = $File_rl->id;
                        
                            $ReleaseLetter->save();
                       
                            }else{

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
                          
                         
                   
                            }

                            if( $request->saso_file != null ){

                                $file_coo = $request->file('saso_file ');
                                $extension = $file_coo->getClientOriginalExtension();
                                $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
                                $file_name =$num. $new_date . 'شهادة المطابقة    '. $request->release_letter_number. '.'. $extension;
                                $file_coo->move($destination_path, $file_name);
                                
                                $File_saso = new File();
                                $File_saso->file_name = "شهادة المطابقة  ";
                                $File_saso->file_location = $file_name;
                            
                                $File_saso->save();
                       
                               
                                $Saso =  new Saso();
                                $Saso->order_id = $UserOreder->id;
                                $Saso->saso_number = $request->saso_number;
                                $Saso->expirydate = $request->saso_expirydate;
                                $Saso->file_id = $File_saso->id;
                             
                                $Saso->save();
                           
                                }else{
    
                                    $File_saso = new File();
                                    $File_saso->file_name = "شهادة المطابقة  ";
                                    $File_saso->file_location = $request->saso_file;
                                
                                    $File_saso->save();
                                
                                   $Saso =  new Saso();
                                   $Saso->order_id = $UserOreder->id;
                                   $Saso->saso_number = $request->saso_number;
                                   $Saso->expirydate = $request->saso_expirydate;
                                   $Saso->file_id = $File_saso->id;
                                
                                   $Saso->save();
                                 
                             
                       
                                }
    
    


    

    

   




    //////////////////Other data from Request///////////////////
        $Truck_ownership = $request->Truck_ownership;

        $truck_ownership_number1 = $request->truck_ownership_number1;
        $truck_ownership_number2 = $request->truck_ownership_number2;
        $driver_name = $request->driver_name;
        $tos_file = $request->tos_file;

        /////////////////Save the data to other order table ////////////////////
       
    

        for($count = 0; $count < count($driver_name); $count++)
        {


            $file_Truck = $tos_file[$count];
            $extension =  $file_Truck->getClientOriginalExtension();
            $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
            $file_name = $num.$new_date . 'إستمارة ملكية الشاحنات '. $driver_name[$count]. '.'. $extension;
           $file_Truck->move($destination_path, $file_name);
                        $File_truck = new File();
                        $File_truck->file_name = "إستمارة ملكية الشاحنات ";
                        $File_truck->file_location = $file_name;
                        $File_truck->save();

            $Truck =  new Truck();
            $Truck->driver_name = $driver_name[$count];
            $Truck->driver_mobile_1 = $truck_ownership_number1[$count];
            $Truck->driver_mobile_2 = $truck_ownership_number2[$count];
            $Truck->file_id = $File_truck->id;
            $Truck->order_id = $UserOreder->id;
            $Truck->Truck_ownership_number = $request->Truck_ownership[$count];
          
            $Truck->save();
          

        }
   /*     $file_TR = $request->file('tos_file');
        $extension = $file_TR->getClientOriginalExtension();
        $file_namesTr = 'معلومات المركبات '. $countTrunl.  '.'. $extension;
        $file_TR->move($destination_path, $file_namesTr);
*/
           
        
        
            //////////////////Other data from Request///////////////////
            $Other_name = $request->Other_name;
            $Other_number = $request->Other_number;
            $Other_exp = $request->Other_exp;
            $Other_file = $request->Other_file;
     
            /////////////////Save the data to other order table ////////////////////
 
            if( $Other_name != null && $Other_file != null  && $Other_number != null  && $Other_exp != null ) {
    
    
                  
    
            for($count = 0; $count < count($Other_name); $count++)
            {
                $file_Other = $Other_file[$count];
                $extension = $file_Other->getClientOriginalExtension();
                $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $userCR->cr_number;
                $file_name = $num.$new_date . 'أخر '. $Other_name[$count]. '.'. $extension;
                $file_Other->move($destination_path, $file_name);
    
                $file_ood = new File();
                $file_ood->file_name = 'ملفات أخرى';
                $file_ood->file_location = $file_name;
    
    
                $file_ood->save();
    
    
                $ood = new OrderOtherdocs();
                $ood->order_id = $UserOreder->id ;
                $ood->ood_name = $Other_name[$count];
                $ood->ood_number = $Other_number[$count];
                $ood->expirydate = $Other_exp[$count];
                $ood->file_id = $file_ood->id;
    
                $ood->save();
    
            }
        } 
    

    
  
        

      

  
    


        Session::flash('success','تم تسجيل طلبك');
        return Redirect('/user'); 
    }

        
    }
    protected function showCRcreate(){
        return view('users.createCR');


    }
    protected function CreateCR(Request $request){
        $messages = [
    
            'Other_file.*'=>'ولد لازم '
            
        ];
        
        $this->validate($request, [
            'cr_number'=>'required|unique:commercial_records'
        
            
        ],$messages);


        $extension = $request->file('cr_image')->getClientOriginalExtension();

        if($extension == 'pdf'){

            $file_TT = $request->file('cr_image');
            $destination_path= public_path().'/files'.'/'.auth()->user()->full_name . '/' . $request->cr_number;
            $extension = $file_TT->getClientOriginalExtension();
            $files = $file_TT->getClientOriginalName();
            $fileName = 'السجل التجاري رقم '.$request->cr_number.'.'.$extension;
            $file_TT->move($destination_path,$fileName);

         $file_CR = new File();
         $file_CR->file_name = "سجل تجاري";
         $file_CR->file_location = $fileName;
      
         $file_CR->save();

            //request()->ip() 
            // $request->getClientIp();
         $CommercialRecord =  new CommercialRecord();
         $CommercialRecord->user_id = auth()->user()->id;
         $CommercialRecord->file_id = $file_CR->id;
         $CommercialRecord->cr_number = $request->cr_number;
         $CommercialRecord->cr_expiry = $request->cr_exp;
         $CommercialRecord->active = 0 ;
         $CommercialRecord->save();
 
         Session::flash('success','تم إرسال المعلومات ');
         return Redirect('/user'); 

        }else {

            Alert::info('يجب ادخال ملف بصيغة ','PDF file' );
            return Redirect::back();

        }



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
        $crUser = CommercialRecord::where('user_id',auth()->user()->id)->get();

        return view('users.viewCRs')->with('crUser',$crUser);
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

    public function updatePassword(Request $request){
        if (!(Hash::check($request->get('old_password'), auth()->user()->password))) {
            // The passwords not matches
            //return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            Alert::error('كلمة المرور  القديمة غير صحيحة  ','Current password does not match ' , 'okay ');
            return Redirect::Back();

        }
        //uncomment this if you need to validate that the new password is same as old one

         if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            //Current password and new password are same
            //return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            Alert::error('لا يمكنك استخدام نفس كلمة المرور السابقة  ','New Password cannot be same as your current password ' , 'okay ');
            return Redirect::Back();

        }

       
        //Change Password
       
        User::where('id',auth()->user()->id)
        ->update(['password' => Hash::make($request->get('new_password'))]);
     //   Alert::info('تمت الزيادة بنسبة %',$request->input('salary') );

        Alert::info('تم تغير كلمة المرور ','password has been changed ' , 'okay ');
        return redirect('/user');
     
    }

    
public function PostRequest() {
   
$data = array(
 'user' => "abdulaziz",
 'password' => "gary yaoi",
 'phone' => "966598875516",
 'sid' => "GW Active",
 'msg' => "Test Message يا ولد",
 'fl' =>"0",
);
$phone = "966598875516";
  //  "https://apps.gateway.sa/vendorsms/pushsms.aspx?user=abdulaziz&password=gary%20yaoi&msisdn=$data[phone]&sid=GW%20Active&msg=$data[msg]&fl=0"; // the url to post to
   $path = "https://apps.gateway.sa/vendorsms/pushsms.aspx?user=abdulaziz&password=gary%20yaoi&msisdn=$phone&sid=GW%20Active&msg=$data[msg]&fl=0";
   $fin =  ($path);
/*
      return Response($fin)
    
    ->withHeaders([
        'Refresh' => '3;url=https://apps.gateway.sa/vendorsms/pushsms.aspx?user=abdulaziz&password=gary%20yaoi&msisdn=$phone&sid=GW%20Active&msg=$data[msg]&fl=0',
        'Refresh' => '3;url=/',
    ]);
    */
    $get = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($get, CURLOPT_URL, $path);
curl_setopt($get, CURLOPT_RETURNTRANSFER, true);
curl_setopt($get, CURLOPT_FOLLOWLOCATION, true);
$exec  = curl_exec($get);
  
    
    $result = curl_exec($path);
    
    //close connection
    curl_close($path);
    
    var_dump($result);

    return '/';
}
}
