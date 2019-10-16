@extends('layouts.app')

@section('content')

        <title> #CDC-1090 الوطنية - عرض طلب</title>
        <div class="container">
            
            @foreach ($order as $orders)
            @foreach ($invoice as $invoices)
            @foreach ($invoice_items as $invoice_item)
                @if ($invoices->id == $orders->invoice_id && $invoices->invoiceItems_id == $invoice_item->id )
                
        
                @foreach ($user as $users)
                @foreach ($cr as $crs)
                @foreach ($file as $files)
                @if ($users->id == $orders->user_id && $orders->cr_id == $crs->id && $crs->file_id == $files->id)

               
            <h1 class="text-center mt-3"> عرض الطلب {{str_replace('فاتورة البضاعة .pdf' , '',$invoice_item->invoiceItems_description) }}  </h1>
   
      
        <form  method="POST" action="/user/viewOrder{{$orders->id}}" enctype="multipart/form-data"  >
                @csrf
       
            <hr>
            <table class="table borderless table-striped text-center">
                    
                <tr>
                <td><input type="text" name="invoice_number" readonly="true" value="{{$invoice_item->invoice_number}}" />
                        <input type="text" id="hijri-date-input21"  value="{{$invoice_item->expirydate}}" name="expirydate_invoice" />
                         <input type="file"  name="invoice_file"  value="{{$invoice_item->invoiceItems_description}}" />
                         <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$invoice_item->invoiceItems_description}}" download="{{$invoice_item->invoiceItems_description}}">
         
                        {{$invoice_item->invoiceItems_description}}
                    </i>
                </a>
                <i class="far fa-file text-primary"></i></td>
                    <td>رقم الطلب</td>

                </tr>
                <tr>
                       
                    <td>{{$users->full_name}} <i class="far fa-user text-primary"></i></td>
                    <td>إسم المستخدم</td>
                </tr>
                <tr>
                    <td>{{$users->email}} <i class="far fa-envelope text-primary"></i></td>
                    <td>البريد الإلكتروني</td>
                </tr>
                <tr>
                    <td>+{{$users->phone}}  <i class="fas fa-mobile-alt text-primary"></i></td>
                    <td>رقم الجوال</td>
                   

                </tr>
                
          
             

                    @foreach ($truck as $trucks)
                    @foreach ($file as $files)
                        
                    @if( $trucks->file_id == $files->id  )

                    <tr>
                        
                        <td><input type="text" name="driver_name[]" value="{{$trucks->driver_name}}" /> <i class="fas fa-truck-moving text-primary"></i></td>
                        <td>إسم السائق</td>
                    </tr>
                    <tr>
                        <td><input type="text" value="{{$trucks->driver_mobile_2}}" name="truck_ownership_number2[]"/><i class="fas fa-mobile-alt text-primary"></i></td>
                        <td> رقم جوال السائق المحلي </td>
                    </tr>
    
                        <tr>
                        <td><input type="text" value="{{$trucks->driver_mobile_1}}" name="truck_ownership_number1[]" /> <i class="fas fa-mobile-alt text-primary"></i></td>
    
                        <td> رقم جوال السائق الدولي </td>
                    </tr>
                   
                   
                    <tr>
                            <td> <input type="file"  name="tos_file[]"/>
                                <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                {{$files->file_location}}
                        </a><i class="far fa-file text-primary"></i></td>
        
                            <td>ملف السائق  </td>
                        </tr>
                        
                    @endif
                    @endforeach
                    @endforeach
           

                @if ($orders->importeport_id == 0)

                <tr>
                        
                    <td>Import <i class="fas fa-arrow-circle-down text-primary"></i></td>
                    <td>نوع الطلب</td>
                </tr>
                @else 
                <tr>
                    <td>Export <i class="fas fa-arrow-circle-up text-primary"></i></td>
                    <td>نوع الطلب</td>
                   
                </tr>
                @endif


               
            </table>
            <hr>
            <h3 class="text-center text-primary">الملفات المرفقة</h3>

            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- CR --}}
                    @foreach ($file as $files)
                    
                    @if ($crs->file_id == $files->id )
                    <table class="table borderless table-striped text-center">
                        <tr>
                        <th colspan="2"> السجل التجاري</th>
                        </tr>
                        <tr>
                            <td>رقم السجل</td>
                            <td>تاريخ السجل</td>
                        </tr>
                        <tr>
                            <td><input   value="{{$crs->cr_number}}" name="cr_number" readonly="true"/></td>
                            <td>{{$crs->cr_expiry}}</td>
                        </tr>
                    

                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        @endif
                        @endforeach
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                @foreach ($coo as $coos)
                @foreach ($file as $files)
                    
       
                
                @if ($coos->file_id == $files->id && $coos->order_id == $orders->id )
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- Cirtificate of Origin --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">شهادة بلد المنشأ</th>
                        </tr>
                        <tr>
                            <td>رقم الشهادة</td>
                            <td>تاريخ الشهادة</td>
                        </tr>
                        <tr>
                        <td><input type="text"  value="{{$coos->coo_number}}" name="coo_number"  /></td>
                        <td><input type="text" id="hijri-date-input13"  value="{{$coos->expirydate}}" name="expirydate_coo" /></td>
                        </tr>
                        <tr>
                                <td colspan="2"><input type="file"   name="coo_file" />
                                     <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                @endif
                @endforeach
                @endforeach
                @foreach ($pl as $packList)
                @foreach ($file as $files)
                @if ($packList->file_id == $files->id )

                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- packing list --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">قائمة التعبئة</th>
                        </tr>
                        <tr>
                            <td>رقم القائمة</td>
                            <td>تاريخ القائمة</td>
                        </tr>
                        <tr>
                            <td><input type="text"  value="{{$packList->pl_number}}" name="packing_list_number" /></td>
                        <td><input type="text" id="hijri-date-input14"  value="{{$packList->expirydate}}" name="pl_expirydate" /></td>
                        </tr>

                        <tr>
                                <td colspan="2">
                                        <input type="file"  name="pl_file" />
                                    <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                
                @endif 
                @endforeach
                @endforeach
                @foreach ($ms as $Muqassah)
                @foreach ($file as $files)
                @if ($Muqassah->file_id == $files->id )
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- Muqassah statement --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">بيان المقاصة</th>
                        </tr>
                        <tr>
                            <td>رقم البيان</td>
                            <td>تاريخ البيان</td>
                        </tr>
                        <tr>
                            <td><input type="text" value="{{$Muqassah->ms_number}}" name="ms_number" /></td>
                        <td><input type="text" id="hijri-date-input15" value="{{$Muqassah->expirydate}}" name="ms_expirydate" /></td>
                        </tr>
                        <tr>
                                <td colspan="2"> <input type="file"   name="ms_file" />
                                    <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                @endif 
                @endforeach
                @endforeach
                @foreach ($saso as $sasos)
                @foreach ($file as $files)
                @if ($sasos->file_id == $files->id )
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- SASO - شهادة المطابقة للمنتجات المصدرة للمملكة --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">شهادة المطابقة للمنتجات المصدرة للمملكة</th>
                        </tr>
                        <tr>
                            <td>رقم الشهادة</td>
                            <td>تاريخ الشهادة</td>
                        </tr>
                        <tr>
                            <td><input type="text" value="{{$sasos->saso_number}}" name="saso_number" /></td>
                        <td><input type="text" id="hijri-date-input16" value="{{$sasos->expirydate}}" name="saso_expirydate"/></td>
                        </tr>
                        <tr>
                                <td colspan="2"><input type="file" name="saso_file" />
                                    <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                @endif 
                @endforeach
                @endforeach
                @foreach ($rl as $Release)
                @foreach ($file as $files)
                @if ($Release->file_id == $files->id )
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- Release letter - خطاب الفسح --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">خطاب الفسح</th>
                        </tr>
                        <tr>
                            <td>رقم الفسح</td>
                            <td>تاريخ الفسح</td>
                        </tr>
                        <tr>
                            <td><input type="text" value="{{$Release->rl_number}}" name="release_letter_number" /> </td>
                        <td><input type="text" id="hijri-date-input17"  value="{{$Release->expirydate}}" name="rl_expirydate" /> </td>
                        </tr>
                        <tr>
                                <td colspan="2"><input type="file" name="rl_file" />
                                    <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                @endif 
                @endforeach
                @endforeach
                    @foreach ($pn as $Policy)
                    @foreach ($file as $files)
                    @if ($Policy->file_id == $files->id )
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- Policy - البوليصة --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">البوليصة</th>
                        </tr>
                        <tr>
                            <td>رقم البوليصة</td>
                            <td>تاريخ البوليصة</td>
                        </tr>
                        <tr>
                            <td><input type="text" value="{{$Policy->policy_number}}" name="policy_number" /> </td>
                        <td><input type="text" id="hijri-date-input18"  value="{{$Policy->expirydate}}" name="policy_expirydate" /></td>
                        </tr>
                        <tr>
                                <td colspan="2"><input type="file" name="policy_file" />
                                    <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                @endif 
                @endforeach
                @endforeach
                @foreach ($el as $exemption_letter)
                @foreach ($file as $files)
                @if ($exemption_letter->file_id == $files->id )
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- exemption_letter - خطاب إعفاء من التفتيش --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">خطاب إعفاء من التفتيش</th>
                        </tr>
                        <tr>
                            <td>رقم الخطاب</td>
                            <td>تاريخ الخطاب</td>
                        </tr>
                        <tr>
                        <td><input type="text" value="{{$exemption_letter->el_number}}" name="el_number" /></td>
                        <td><input type="text" id="hijri-date-input19"  value="{{$exemption_letter->expirydate}}" name="el_expirydate" /></td>
                        </tr>
                        <tr>
                                <td colspan="2"><input type="file" name="el_file" />
                                    <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                @endif 
                @endforeach
                @endforeach
                
                @foreach ($comment as $comments)
                    
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- exemption_letter - خطاب إعفاء من التفتيش --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            @if ($comments->comment_by_user == auth()->user()->id)
                            <th colspan="2">تعليق من العميل </th>
                            @else 
                            <th colspan="2">تعليق من المشرف  </th>

                            @endif
                        </tr>
                      

                        <tr>
                        <th colspan="2">{{$comments->comment_description}}</th>
                        </tr>
                      
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>

                @endforeach
                @foreach ($other as $others)
                @foreach ($file as $files)
                    
       
                
                @if ($others->file_id == $files->id )

                        
                    
                <div class="col-xs-6 col-md-6 col-lg-6">
                    <table class="table borderless table-striped text-center">
                        <tr>
                        <th colspan="2">  {{$others->ood_name}} إستمارة أخرى </th>
                        </tr>
                        <tr>
                            <td>رقم الاستمارة</td>
                            <td>تاريخ الاستمارة</td>
                        </tr>
                        <tr>
                            <td><input type="text" value="{{$others->ood_number}}" name="Other_number[]" /></td>
                        <td><input type="date"   value="{{$others->expirydate}}" name="Other_exp[]" /></td>
                        </tr>

                        <tr>
                                <td colspan="2"><input type="file" name="Other_file[]" />
                                    <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>




              

                @endif
                @endforeach
                @endforeach

            


           
    

                          {{-- <img src="http://pngimg.com/uploads/simpsons/simpsons_PNG8.png" class="d-block w-100" height="650" alt="..."> --}}
                 


        @endif
        @endforeach
        @endforeach
        @endforeach
               
        @endif
       
        @endforeach
        @endforeach                    
        @endforeach
        
        <div class="col-xs-12 col-md-6 col-lg-12  table-bordered table-striped" style="width: 100%" >


                <div class=" amber-textarea active-amber-textarea-2">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea id="comment_order" name="comment_order" class="md-textarea form-control" rows="5" required></textarea>
                        <div  id="comment_div"> <h4> أترك ملاحظة </h4>
                         </div>
                      </div>
            
                    
                          </div>
<input type="submit"  name="save" id="save" style="width: 100%" class="btn btn-primary" value="Save" />

</form>

</div>



        @endsection