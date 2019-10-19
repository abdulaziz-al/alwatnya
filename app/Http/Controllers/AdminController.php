<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;

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
use App\Previlige;
use App\UserLogs;



class AdminController extends Controller
{


    
    public function __construct(){
        $this->middleware('auth');

        $this->middleware('admin');

    }
    // admin index page (dashboard)
    protected function index(Request $request) {

         
        $order_all = UserOreder::all();

        $order_waiting = UserOreder::where('status_id',1);
                   
        $order_Accepte = UserOreder::where('status_id',2);
        
        $order_Reject = UserOreder::where('status_id',3);
        
        UserOreder::where('seen',0)
        ->update(['seen' =>1]);
        
        $seen = UserOreder::where('seen',0)->get();

   

        $userInfo =Array('order'=>$order_all ,'order_waiting'=>$order_waiting,'order_Reject'=>$order_Reject,
        'order_Accepte'=>$order_Accepte, 'seen'=>$seen);
        
        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "تمت رؤية الطلبات الجديدة من قبل" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();

        return view('admin.index', $userInfo);
    }
    
    // 1 admin settings page / subadmins page
    protected function subadmins(Request $request) {
        $sub = User::where('role_id', 2)->get();
        
        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "دخل إلى صفحة إدارة المشرفين" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        return view('admin.subadmins'  )->with('sub',$sub);
    }
    // 2 admin/settings/subadmins/ create a new sub-admin page
    protected function newSubAdmin(Request $request) {
        
        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "دخل إلى صفحة إضافة عضو جديد" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        return view('admin.newsubadmin');
    }
    // 3 admin/settings/subadmins/ view a sub-admin info page
    protected function viewsubadmin($id,Request $request) {
        $sub = User::where('id', $id)->first();
        
        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "دخل إلى صفحة أحد المشرفين " . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        return view('admin.viewsubadmin')->with('sub',$sub);;
    }
    // 4 admin/settings/password change password page
    protected function password(Request $request) {
        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "دخل إلى صفحة تعديل الرقم السري" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        return view('admin.changepassword');
    }
    

    // admin quick links:
    // 1 admin/ create new user
    public function newuser() {
        $seen = UserOreder::where('seen',0)->get();

        return view('admin.newuser')->with('seen',$seen);
    }

    public function createUser(Request $request){

        if($request->type == 2 ){

            if($request->all != null ){

            $Previlige = new Previlige();
            $Previlige->Create_user = 1;
            $Previlige->active_cr = 1;
            $Previlige->edit_order = 1; 
            $Previlige->view_year = 1;
            $Previlige->save();
            
            $subadmin =  new User();
            $subadmin->full_name = $request->full_name;
            $subadmin->email = $request->email;
            $subadmin->phone = $request->phone;
            $subadmin->active = true ;
            $subadmin->role_id = 2;
            $subadmin->previlige_id = $Previlige->id;
            $subadmin->password =  Hash::make($request->password);
    
            $subadmin->save();
            }else{
                
                $Previlige = new Previlige();
                if($request->Create_user != null ){
                $Previlige->Create_user = 1;
                }else{
                    $Previlige->Create_user = 0;
                }
                if($request->active_cr != null ){
                    $Previlige->active_cr = 1;
                    }else{
                        $Previlige->active_cr = 0;
                    }
                    if($request->edit_order != null ){
                        $Previlige->edit_order = 1;
                        }else{
                            $Previlige->edit_order = 0;
                        }
                        if($request->view_year != null ){
                            $Previlige->view_year = 1;
                            }else{
                                $Previlige->view_year = 0;
                            }

                $Previlige->save();
            
            $subadmin =  new User();
            $subadmin->full_name = $request->full_name;
            $subadmin->email = $request->email;
            $subadmin->phone = $request->phone;
            $subadmin->active = true ;
            $subadmin->role_id = 2;
            $subadmin->previlige_id = $Previlige->id;
            $subadmin->password =  Hash::make($request->password);
    
            $subadmin->save();
            
            Alert::success('تمت اضافة عضو جديد ',$request->full_name );

            }
        
        }else{



        $subadmin =  new User();
        $subadmin->full_name = $request->full_name;
        $subadmin->email = $request->email;
        $subadmin->phone = $request->phone;
        $subadmin->active = true ;
        $subadmin->role_id = 3;
        $subadmin->password =  Hash::make($request->password);

        $subadmin->save();

        Alert::success('تمت اضافة عميل   ',$request->full_name );

        }

        
        return redirect('/');


    }
    // 2 admin/neworders page
    protected function newOrders(Request $request) {


        if(auth()->user()->role_id == 2 ){
        $subadmin = Previlige::where('id',auth()->user()->previlige_id)->first();
        
        if($subadmin->edit_order == 0 ){
            Alert::error(' لا تملك صلاحية لهذا الاجراء  ','you do not have that preiliges ' );

            return redirect('/');


        }
    }

        $order = UserOreder::where('status_id' , 1 )->orderBy('created_at','DESC')->paginate(10);
    
        $invoice = Invoice::all();
        $invoice_items = InvoiceItem::all();
        $user = User::all();
        $seen = UserOreder::where('seen',0)->get();


        $Waitorder =Array( 'order'=>$order ,'invoice_items'=>$invoice_items,
         'invoice'=>$invoice , 'user'=>$user , 'seen'=>$seen);

        
/*
        $Waiting_order = UserOreder::where('status_id', 1)
        ->leftJoin('invoices', 'user_oreders.invoice_id', '=', 'invoices.id')
        ->leftJoin('invoice_items' , 'invoices.invoiceItems_id' , '=' , 'invoice_items.id' )
        ->leftJoin('users' , 'user_oreders.user_id' , '=' , 'users.id')->get();

        $Waitorder =Array( 'Waiting_order'=>$Waiting_order);
*/

        
$log = new  UserLogs();
$log->user_id = auth()->user()->id;
$log->source_ip = $request->getClientIp();
$log->description = "شاهد الطلبات الغير منفذة" . auth()->user()->full_name . auth()->user()->id ;
$log->created_on = date('Y-m-d');
$log->save();

        return view('admin.neworders', $Waitorder);
    }
    // 3 admin/completedorders page
    protected function completedOrders(Request $request) {

    
        $order = UserOreder::where('status_id' , 2 )->get();
    
        $invoice = Invoice::all();
        $invoice_items = InvoiceItem::all();
        $user = User::all();
        $seen = UserOreder::where('seen',0)->get();


        $Accorder =Array( 'order'=>$order ,'invoice_items'=>$invoice_items,
         'invoice'=>$invoice , 'user'=>$user , 'seen'=>$seen);


        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "شاهد الطلبات المنفذة" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        
        return view('admin.completed' , $Accorder);
    }
    // 4 admin/returnedorders page
    protected function returnedOrders(Request $request) {

        $order = UserOreder::where('status_id' , 3 )->get();
    
        $invoice = Invoice::all();
        $invoice_items = InvoiceItem::all();
        $user = User::all();
        $seen = UserOreder::where('seen',0)->get();


        $retrunorder =Array( 'order'=>$order ,'invoice_items'=>$invoice_items,
         'invoice'=>$invoice , 'user'=>$user , 'seen'=>$seen);

        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "شاهد الطلبات المعادة" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
    
        return view('admin.returnedorders', $retrunorder);
    }
    // 5 admin/vieworder page
    protected function viewOrder($id) {
        
        $order = UserOreder::where('id',$id )->get();
    
        $invoice = Invoice::all();
        $invoice_items = InvoiceItem::all();
        $user = User::all();
        $truck = Truck::where('order_id' , $id)->get();
        $file = File::all();
        $cr = CommercialRecord::all();
        $other = OrderOtherdocs::where('order_id', $id)->get();
        $coo = Coo::where('order_id', $id)->get();
        $comment = Comment::where('order_id', $id)->get();
        $el = exemptionLetter::where('order_id' , $id)->get();
        $ms = muqassahStatement::where('order_id',$id)->get();
        $pl = PackingList::where('order_id',$id)->get();
        $pn = PolicyNumber::where('order_id',$id)->get();
        $rl = ReleaseLetter::where('order_id',$id)->get();
        $saso = Saso::where('order_id' , $id)->get();

        $seen = UserOreder::where('seen',0)->get();


        $Accorder =Array( 'order'=>$order ,'invoice_items'=>$invoice_items,
        'truck'=>$truck , 'invoice'=>$invoice , 'user'=>$user,
        'file'=>$file , 'cr'=>$cr , 'other'=>$other , 'coo'=>$coo,
        'comment'=>$comment , 'el'=>$el , 'ms'=>$ms , 'pl'=>$pl,
        'pn'=>$pn , 'rl'=>$rl , 'saso'=>$saso , 'seen'=>$seen);


        return view('admin.vieworder' , $Accorder );
    }

    protected function OrderCompleted($id ,Request $request){
        UserOreder::where('id', $id)
        ->update(['admin_id' => auth()->user()->id , 'status_id'=> 2]);
        $order = UserOreder::where('id', $id )->first();
        Alert::success('تم قبول الطلب رقم ',$order->id );
        
        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "تم قبول الطلب من قبل" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        return redirect('/admin');
    }
    protected function OrderReject(Request $request , $id){

        UserOreder::where('id', $id)
        ->update(['admin_id' => auth()->user()->id , 'status_id'=> 3]);
        $userInfo = UserOreder::where('id' , $id )->first();
        $Comment =  new Comment();
        $Comment->comment_description = $request->comment ;
        $Comment->comment_by_user = auth()->user()->id;
        $Comment->order_id = $userInfo->id;
        $Comment->save(); 
            //   Alert::info('تمت الزيادة بنسبة %',$request->input('salary') );
            
        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "تم رفض الطلب من قبل" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        return redirect('/admin');

    }
    // 6 admin/search page
   

    public function Reseltsearch(Request $request){

        

        $user = User::where('full_name' , $request->text)->get();
        $userphone = User::where('phone' , $request->text)->get();

        $userAll = User::all();
        if($request->text == 'تصدير'){
            $type = 1 ;
        }else if ($request->text == 'استيراد'){
            $type = 0;
        }else{
            $type = null ;
        }

        $order = UserOreder::all();
        $ordertype = UserOreder::where('importeport_id' , $type)->get();
        $invoice = Invoice::all();

        $invoice_itemsAll = InvoiceItem::all();
        $invoice_items = InvoiceItem::where('invoice_number',$request->text)->get();

        $cr = CommercialRecord::where('cr_number',$request->text)->get();
        $crAll = CommercialRecord::all();

        $truckAll = Truck::all();
        $truck_name = Truck::where('driver_name',$request->text)->get();
        $truck_phone1 = Truck::where('driver_mobile_1',$request->text)->get();
        $truck_phone2 = Truck::where('driver_mobile_2',$request->text)->get();

        $file = File::all();
        $seen = UserOreder::where('seen',0)->get();


        $text = $request->text;




        $data =Array('user'=>$user ,'order'=> $order , 'invoice'=>$invoice ,
                    'invoice_items'=>$invoice_items , 'cr'=>$cr , 'truck_name'=>$truck_name,
                     'truck_phone1'=>$truck_phone1 , 'truck_phone2'=>$truck_phone2,
                    'userAll'=>$userAll , 'invoice_itemsAll'=>$invoice_itemsAll,
                    'truckAll'=>$truckAll , 'file'=>$file , 'text'=>$text,
                    'crAll'=>$crAll, 'userphone'=>$userphone , 'ordertype'=>$ordertype , 'seen'=>$seen);
                    
        return view('admin.reselt', $data);


    }
    protected function viewCr(){
        $cr = CommercialRecord::where('active',0)->get();
        $file = File::all();
        $user = User::all();

        $seen = UserOreder::where('seen',0)->get();

        $arr = Array('cr'=>$cr , 'seen'=>$seen , 'user'=>$user , 'file'=>$file);


        return view ('admin.viewCr',$arr);
    }

    protected function activeCr($id){
        $cr = CommercialRecord::where('cr_number' ,$id)->get();

        CommercialRecord::where('cr_number' ,$id)
        ->update(['active' => 1]);

        Alert::success('تم قبول  السجل التجاري  رقم ',$id );

        return redirect('/admin');


    }
    protected function diableCr(Request $request){
  $cr = CommercialRecord::where('cr_number' ,$request->cr_number)->get();

        CommercialRecord::where('cr_number' ,$request->cr_number)
        ->update(['active' => 2]);

        Alert::success('تم رفض السجل التجاري  رقم ',$request->cr_number );

        return redirect('/admin');
    }
 
    // admin logout
    public function logout() {
        // logout & end sessions
    }
    protected function search(Request $request) {

        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "دخل إلى صفحة البحث" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        return view('admin.search');
    }

    protected function updatePasswordAdmin(Request $request){
        if (!(Hash::check($request->get('old_password'), auth()->user()->password))) {
            // The passwords not matches
            //return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
            Alert::error('كلمة المرور  القديمة غير صحيحة ',' Current password does not match ');
           // Alert::html('Random lorempixel.com :' , '<img src="/images/Logo-white-Transparent-Background.png" ');
            //toast('!كلمة المرور  القديمة غير صحيحة','error','top-left');

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
        
        $log = new  UserLogs();
        $log->user_id = auth()->user()->id;
        $log->source_ip = $request->getClientIp();
        $log->description = "غير الرقم السري" . auth()->user()->full_name . auth()->user()->id ;
        $log->created_on = date('Y-m-d');
        $log->save();
        return redirect('/admin');
     
    }
   
}
