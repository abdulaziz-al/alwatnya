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


class AdminController extends Controller
{
    // admin index page (dashboard)
    public function index() {

         
        $order_all = UserOreder::all();

        $order_waiting = UserOreder::where('status_id',1);
                   
        $order_Accepte = UserOreder::where('status_id',2);
        
        $order_Reject = UserOreder::where('status_id',3);
         

        $userInfo =Array('order'=>$order_all ,'order_waiting'=>$order_waiting,'order_Reject'=>$order_Reject,'order_Accepte'=>$order_Accepte);
        
        return view('admin.index', $userInfo);
    }
    // admin settings page:
    public function settings() {
        return view('admin.settings');
    }
    // 1 admin settings page / subadmins page
    public function subadmins() {
        return view('admin.subadmins');
    }
    // 2 admin/settings/subadmins/ create a new sub-admin page
    public function newSubAdmin() {
        return view('admin.newsubadmin');
    }
    // 3 admin/settings/subadmins/ view a sub-admin info page
    public function viewsubadmin() {
        return view('admin.viewsubadmin');
    }
    // 4 admin/settings/password change password page
    public function password() {
        return view('admin.changepassword');
    }
    // 5 admin/settings/orderStatuses view orders statuses page
    public function orderStatuses() {
        return view('admin.statuses');
    }

    // admin quick links:
    // 1 admin/ create new user
    public function createUser() {
        return view('admin.newuser');
    }
    // 2 admin/neworders page
    public function newOrders() {

        $order = UserOreder::where('status_id' , 1 )->get();
    
        $invoice = Invoice::all();
        $invoice_items = InvoiceItem::all();
        $user = User::all();

        $Waitorder =Array( 'order'=>$order ,'invoice_items'=>$invoice_items, 'invoice'=>$invoice , 'user'=>$user);

        
/*
        $Waiting_order = UserOreder::where('status_id', 1)
        ->leftJoin('invoices', 'user_oreders.invoice_id', '=', 'invoices.id')
        ->leftJoin('invoice_items' , 'invoices.invoiceItems_id' , '=' , 'invoice_items.id' )
        ->leftJoin('users' , 'user_oreders.user_id' , '=' , 'users.id')->get();

        $Waitorder =Array( 'Waiting_order'=>$Waiting_order);
*/

        return view('admin.neworders', $Waitorder);
    }
    // 3 admin/completedorders page
    public function completedOrders() {

    
        $order = UserOreder::where('status_id' , 2 )->get();
    
        $invoice = Invoice::all();
        $invoice_items = InvoiceItem::all();
        $user = User::all();

        $Accorder =Array( 'order'=>$order ,'invoice_items'=>$invoice_items, 'invoice'=>$invoice , 'user'=>$user);


        return view('admin.completed' , $Accorder);
    }
    // 4 admin/returnedorders page
    public function returnedOrders() {
        return view('admin.returnedorders');
    }
    // 5 admin/vieworder page
    public function viewOrder($id) {
        
        $order = UserOreder::where('id',$id )->get();
    
        $invoice = Invoice::all();
        $invoice_items = InvoiceItem::all();
        $user = User::all();
        $truck = Truck::where('order_id' , $id)->get();

        $Accorder =Array( 'order'=>$order ,'invoice_items'=>$invoice_items,
        'truck'=>$truck , 'invoice'=>$invoice , 'user'=>$user);


        return view('admin.vieworder' , $Accorder );
    }
    public function OrderCompleted($id){
        UserOreder::where('id', $id)
        ->update(['admin_id' => auth()->user()->id , 'status_id'=> 2]);
     //   Alert::info('تمت الزيادة بنسبة %',$request->input('salary') );
        return redirect('/admin');
    }
    public function OrderReject(Request $request , $id){

        UserOreder::where('id', $id)
        ->update(['admin_id' => auth()->user()->id , 'status_id'=> 3]);
        $userInfo = UserOreder::where('id' , $id )->first();
        $Comment =  new Comment();
        $Comment->comment_description = $request->comment ;
        $Comment->comment_by_user = auth()->user()->id;
        $Comment->comment_to_user = $userInfo->user_id;
        $Comment->save(); 
            //   Alert::info('تمت الزيادة بنسبة %',$request->input('salary') );
        return redirect('/admin');

    }
    // 6 admin/search page
    public function search() {
        return view('admin.search');
    }
    // admin logout
    public function logout() {
        // logout & end sessions
    }
}
