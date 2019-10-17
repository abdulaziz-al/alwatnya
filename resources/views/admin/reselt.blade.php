@extends('layouts.app')

@section('content')


<div class="content">


    
                          @if ($user->count() != null)


                    @foreach ($user as $users)


                    <div id="data_user">

                    <div class="col-md-12 col-md-6 ">

                    <table class="table borderless table-striped text-center">
                            <tr>
                            <th colspan="7"> {{$users->full_name}}</th>
                            </tr>
                            <tr>
                                <td>رقم السجل</td>
                                <td>رقم الهاتف </td>
                                <td>الايميل </td>
                                <td>تاريخ السجل</td>
                                <th>رقم الطلب </th>
                                <th>نوع الطلب </th>
                                <th>حالة الطلب </th>

                            </tr>

                            @foreach ($crAll as $crAlls)
                            @foreach ($order as $orders)
                            @foreach ($invoice_itemsAll as $invoice_itemsAlls)
                            @foreach ($invoice as $invoices)
                                
                                

                            <tr>

                            @if ($users->id == $crAlls->user_id && $orders->user_id == $users->id 
                            && $orders->cr_id == $crAlls->id && $orders->invoice_id == $invoices->id 
                            && $invoices->invoiceItems_id ==  $invoice_itemsAlls->id )

                                   
                            <td>{{$crAlls->cr_number}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$crAlls->cr_expiry}}</td>


                            <td>{{$invoice_itemsAlls->invoice_number}}</td>

                            
                            @if ($orders->importeport_id == 0)                        
                            <td>Import</td>
                             @else 
                            <td>Export </td>
                   
                            @endif
                            @if ($orders->status_id == 1)                        
                            <td>قيد الأنتظار </td>
                             @elseif($orders->status_id == 2)
                            <td>منفذ </td>
                            @else   
                            <td>مرفوض</td>


                            @endif
                            @endif
                            @endforeach
                            @endforeach
                            @endforeach
                            @endforeach
                            </tr>

                        </table>  
                    </div> 
                    </div>                        

                    @endforeach


                    @elseif($userphone->count() != null )


                    @foreach ($userphone as $users)


                    <div id="data_user">

                    <div class="col-md-12 col-md-6 ">

                    <table class="table borderless table-striped text-center">
                            <tr>
                            <th colspan="7"> {{$users->phone}}</th>
                            </tr>
                            <tr>
                                <td>رقم السجل</td>
                                <td>رقم الهاتف </td>
                                <td>الايميل </td>
                                <td>تاريخ السجل</td>
                                <th>رقم الطلب </th>
                                <th>نوع الطلب </th>
                                <th>حالة الطلب </th>

                            </tr>

                            @foreach ($crAll as $crAlls)
                            @foreach ($order as $orders)
                            @foreach ($invoice_itemsAll as $invoice_itemsAlls)
                            @foreach ($invoice as $invoices)
                                
                                

                            <tr>

                            @if ($users->id == $crAlls->user_id && $orders->user_id == $users->id 
                            && $orders->cr_id == $crAlls->id && $orders->invoice_id == $invoices->id 
                            && $invoices->invoiceItems_id ==  $invoice_itemsAlls->id )

                                   
                            <td>{{$crAlls->cr_number}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$crAlls->cr_expiry}}</td>


                            <td>{{$invoice_itemsAlls->invoice_number}}</td>

                            
                            @if ($orders->importeport_id == 0)                        
                            <td>Import</td>
                             @else 
                            <td>Export </td>
                   
                            @endif
                            @if ($orders->status_id == 1)                        
                            <td>قيد الأنتظار </td>
                             @elseif($orders->status_id == 2)
                            <td>منفذ </td>
                            @else   
                            <td>مرفوض</td>


                            @endif
                            @endif
                            @endforeach
                            @endforeach
                            @endforeach
                            @endforeach
                            </tr>

                        </table>  
                    </div> 
                    </div>                        

                    @endforeach

                    @elseif($cr->count() != null )

                    
                    @foreach ($cr as $crs)
                    @foreach ($userAll as $users)

                    @if ($crs->user_id == $users->id)
                        


                    <div id="data_user">

                    <div class="col-md-12 col-md-6 ">

                    <table class="table borderless table-striped text-center">
                            <tr>
                            <th colspan="7"> {{$crs->cr_number}}</th>
                            </tr>
                            <tr>
                                <td>رقم السجل</td>
                                <td>رقم الهاتف </td>
                                <td>الايميل </td>
                                <td>تاريخ السجل</td>
                                <th>رقم الطلب </th>
                                <th>نوع الطلب </th>
                                <th>حالة الطلب </th>

                            </tr>

                            @foreach ($order as $orders)
                            @foreach ($invoice_itemsAll as $invoice_itemsAlls)
                            @foreach ($invoice as $invoices)
                                
                                

                            <tr>

                            @if ($users->id == $crs->user_id && $orders->user_id == $users->id 
                            && $orders->cr_id == $crs->id && $orders->invoice_id == $invoices->id 
                            && $invoices->invoiceItems_id ==  $invoice_itemsAlls->id )

                                   
                            <td>{{$crs->cr_number}}</td>
                            <td>{{$users->phone}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$crs->cr_expiry}}</td>


                            <td>{{$invoice_itemsAlls->invoice_number}}</td>

                            
                            @if ($orders->importeport_id == 0)                        
                            <td>Import</td>
                             @else 
                            <td>Export </td>
                            @endif
                            
                            @if ($orders->status_id == 1)                        
                            <td>قيد الأنتظار </td>
                             @elseif($orders->status_id == 2)
                            <td>منفذ </td>
                            @else   
                            <td>مرفوض</td>
                            @endif

                            @endif
                            @endforeach
                            @endforeach
                            @endforeach
                            </tr>

                        </table>  
                    </div> 
                    </div>                        
                    @endif

                    @endforeach
                    @endforeach

                    @elseif($truck_name->count() != null )

                    
                    @foreach ($truck_name as $truck_names)
                    @foreach ($order as $orders)

                    @if ($truck_names->order_id == $orders->id)
                        


                    <div id="data_user">

                    <div class="col-md-12 col-md-6 ">

                    <table class="table borderless table-striped text-center">
                            <tr>
                            <th colspan="7"> {{$truck_names->driver_name}}</th>
                            </tr>
                            <tr>
                                <td>رقم السجل</td>
                                <th>رقم الطلب </th>
                                <th>نوع الطلب </th>
                                <th>حالة الطلب </th>
                                <td>رقم الهاتف الدولي  </td>
                                <td>رقم الهاتف المحلي  </td>
                                <td>رقم لوحة السيارة </td>

                            </tr>

                            @foreach ($invoice_itemsAll as $invoice_itemsAlls)
                            @foreach ($crAll as $crs)
                            @foreach ($invoice as $invoices)
                                
                                

                            <tr>

                            @if ($orders->cr_id == $crs->id && $orders->invoice_id == $invoices->id 
                            && $invoices->invoiceItems_id ==  $invoice_itemsAlls->id )

                                   
                            <td>{{$crs->cr_number}}</td>
                            <td>{{$invoice_itemsAlls->invoice_number}}</td>

                            @if ($orders->importeport_id == 0)                        
                            <td>Import</td>
                             @else 
                            <td>Export </td>
                            @endif

                            @if ($orders->status_id == 1)                        
                            <td>قيد الأنتظار </td>
                             @elseif($orders->status_id == 2)
                            <td>منفذ </td>
                            @else   
                            <td>مرفوض</td>
                            @endif

                            <td>{{$truck_names->driver_mobile_1}}</td>
                            <td>{{$truck_names->driver_mobile_2}}</td>
                            <td>{{$truck_names->Truck_ownership_number}}</td>



                            
                          
                            
                          

                            @endif
                            @endforeach
                            @endforeach
                            @endforeach
                            </tr>

                        </table>  
                    </div> 
                    </div>                        
                    @endif

                    @endforeach
                    @endforeach

                    @elseif($truck_phone2->count() != null )


                    @foreach ($truck_phone2 as $truck_phone)
                    @foreach ($order as $orders)

                    @if ($truck_phone->order_id == $orders->id)
                        


                    <div id="data_user">

                    <div class="col-md-12 col-md-6 ">

                    <table class="table borderless table-striped text-center">
                            <tr>
                            <th colspan="7"> {{$truck_phone->driver_name}}</th>
                            </tr>
                            <tr>
                                <td>رقم السجل</td>
                                <th>رقم الطلب </th>
                                <th>نوع الطلب </th>
                                <th>حالة الطلب </th>
                                <td>رقم الهاتف الدولي  </td>
                                <td>رقم الهاتف المحلي  </td>
                                <td>رقم لوحة السيارة </td>

                            </tr>

                            @foreach ($invoice_itemsAll as $invoice_itemsAlls)
                            @foreach ($crAll as $crs)
                            @foreach ($invoice as $invoices)
                                
                                

                            <tr>

                            @if ($orders->cr_id == $crs->id && $orders->invoice_id == $invoices->id 
                            && $invoices->invoiceItems_id ==  $invoice_itemsAlls->id )

                                   
                            <td>{{$crs->cr_number}}</td>
                            <td>{{$invoice_itemsAlls->invoice_number}}</td>

                            @if ($orders->importeport_id == 0)                        
                            <td>Import</td>
                             @else 
                            <td>Export </td>
                            @endif

                            @if ($orders->status_id == 1)                        
                            <td>قيد الأنتظار </td>
                             @elseif($orders->status_id == 2)
                            <td>منفذ </td>
                            @else   
                            <td>مرفوض</td>
                            @endif

                            <td>{{$truck_phone->driver_mobile_1}}</td>
                            <td>{{$truck_phone->driver_mobile_2}}</td>
                            <td>{{$truck_phone->Truck_ownership_number}}</td>



                            
                          
                            
                          

                            @endif
                            @endforeach
                            @endforeach
                            @endforeach
                            </tr>

                        </table>  
                    </div> 
                    </div>                        
                    @endif

                    @endforeach
                    @endforeach
                    @elseif($truck_phone1->count() != null )


                    @foreach ($truck_phone1 as $truck_phone)
                    @foreach ($order as $orders)

                    @if ($truck_phone->order_id == $orders->id)
                        


                    <div id="data_user">

                    <div class="col-md-12 col-md-6 ">

                    <table class="table borderless table-striped text-center">
                            <tr>
                            <th colspan="7"> {{$truck_phone->driver_name}}</th>
                            </tr>
                            <tr>
                                <td>رقم السجل</td>
                                <th>رقم الطلب </th>
                                <th>نوع الطلب </th>
                                <th>حالة الطلب </th>
                                <td>رقم الهاتف الدولي  </td>
                                <td>رقم الهاتف المحلي  </td>
                                <td>رقم لوحة السيارة </td>

                            </tr>

                            @foreach ($invoice_itemsAll as $invoice_itemsAlls)
                            @foreach ($crAll as $crs)
                            @foreach ($invoice as $invoices)
                                
                                

                            <tr>

                            @if ($orders->cr_id == $crs->id && $orders->invoice_id == $invoices->id 
                            && $invoices->invoiceItems_id ==  $invoice_itemsAlls->id )

                                   
                            <td>{{$crs->cr_number}}</td>
                            <td>{{$invoice_itemsAlls->invoice_number}}</td>

                            @if ($orders->importeport_id == 0)                        
                            <td>Import</td>
                             @else 
                            <td>Export </td>
                            @endif

                            @if ($orders->status_id == 1)                        
                            <td>قيد الأنتظار </td>
                             @elseif($orders->status_id == 2)
                            <td>منفذ </td>
                            @else   
                            <td>مرفوض</td>
                            @endif

                            <td>{{$truck_phone->driver_mobile_1}}</td>
                            <td>{{$truck_phone->driver_mobile_2}}</td>
                            <td>{{$truck_phone->Truck_ownership_number}}</td>

                            @endif
                            @endforeach
                            @endforeach
                            @endforeach
                            </tr>

                        </table>  
                    </div> 
                    </div>                        
                    @endif

                    @endforeach
                    @endforeach

                    @elseif($invoice_items->count() != null )

                    
                    @foreach ($invoice_items as $invoice_item)
                    @foreach ($invoice as $invoices)
                    @foreach ($order as $orders)


                    @if ( $orders->invoice_id == $invoices->id 
                    && $invoices->invoiceItems_id ==  $invoice_item->id )                        


                    <div id="data_user">

                    <div class="col-md-12 col-md-6 ">

                    <table class="table borderless table-striped text-center">
                            <tr>
                            <th colspan="3"> {{$invoice_item->invoice_number}}</th>
                            </tr>

                            <tr>
                                <th>رقم الطلب </th>
                                <th>نوع الطلب </th>
                                <th>حالة الطلب </th>           

                            </tr>
                            <tr>                                   
                            <td>{{$invoice_item->invoice_number}}</td>

                            @if ($orders->importeport_id == 0)                        
                            <td>Import</td>
                             @else 
                            <td>Export </td>
                            @endif

                            @if ($orders->status_id == 1)                        
                            <td>قيد الأنتظار </td>
                             @elseif($orders->status_id == 2)
                            <td>منفذ </td>
                            @else   
                            <td>مرفوض</td>
                            @endif

                          
                           
                            </tr>

                        </table>  
                    </div> 
                    </div>                        
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach

                    @elseif ($ordertype->count() != null )

                    @foreach ($invoice_itemsAll as $invoice_item)
                    @foreach ($invoice as $invoices)
                    @foreach ($ordertype as $orders)


                    @if ( $orders->invoice_id == $invoices->id 
                    && $invoices->invoiceItems_id ==  $invoice_item->id )                        


                    <div id="data_user">

                    <div class="col-md-12 col-md-6 ">

                    <table class="table borderless table-striped text-center">
                            <tr>
                            <th colspan="3">
                                 @if ($orders->importeport_id == 0)                        
                                    Import
                                     @else 
                                    Export 
                                    @endif
                            </tr>

                            <tr>
                                <th>رقم الطلب </th>
                                <th>نوع الطلب </th>
                                <th>حالة الطلب </th>           

                            </tr>
                            <tr>                                   
                            <td>{{$invoice_item->invoice_number}}</td>

                            @if ($orders->importeport_id == 0)                        
                            <td>Import</td>
                             @else 
                            <td>Export </td>
                            @endif

                            @if ($orders->status_id == 1)                        
                            <td>قيد الأنتظار </td>
                             @elseif($orders->status_id == 2)
                            <td>منفذ </td>
                            @else   
                            <td>مرفوض</td>
                            @endif

                          
                           
                            </tr>

                        </table>  
                    </div> 
                    </div>                        
                    @endif
                    @endforeach
                    @endforeach
                    @endforeach




                    @else 


                    <div id="no_zero"> There are no Reselt !! </div>
                         
                     @endif

             
</div>
                @endsection