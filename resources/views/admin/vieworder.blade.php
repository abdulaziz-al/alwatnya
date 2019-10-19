@extends('layouts.app')

@section('content')

        <title> #CDC-1090 الوطنية - عرض طلب</title>
        <div class="container">
            {{$order->count()}}
            @foreach ($order as $orders)
            @foreach ($invoice as $invoices)
            @foreach ($invoice_items as $invoice_item)
                @if ($invoices->id == $orders->invoice_id && $invoices->invoiceItems_id == $invoice_item->id )
                
        
                @foreach ($user as $users)
                @foreach ($cr as $crs)
                @foreach ($file as $files)
                @if ($users->id == $orders->user_id && $orders->cr_id == $crs->id && $crs->file_id == $files->id)

               
            <h1 class="text-center mt-3"> {{substr($invoice_item->invoiceItems_description , 0,-4) }} عرض طلب</h1>
   
      

       
            <hr>
            <table class="table borderless table-striped text-center">
                <tr>
                    <td> <a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$invoice_item->invoiceItems_description}}" download="{{$invoice_item->invoiceItems_description}}">
         
                        {{$invoice_item->invoiceItems_description}}
                    </i>
                </a><i class="far fa-file text-primary"></i></td>
                    <td>{{trans('main.Order_number')}}</td>

                </tr>
                <tr>
                       
                    <td>{{$users->full_name}} <i class="far fa-user text-primary"></i></td>
                    <td>{{trans('main.name')}}</td>
                </tr>
                <tr>
                    <td>{{$users->email}} <i class="far fa-envelope text-primary"></i></td>
                    <td>{{trans('main.email')}}</td>
                </tr>
                <tr>
                    <td>+{{$users->phone}}  <i class="fas fa-mobile-alt text-primary"></i></td>
                    <td>{{trans('main.phone')}}</td>
                   

                </tr>
                
          
             

                    @foreach ($truck as $trucks)

                    <tr>
                        
                        <td>{{$trucks->driver_name}} <i class="fas fa-truck-moving text-primary"></i></td>
                        <td>{{trans('main.name_of_driver')}}</td>
                    </tr>
                    <tr>
                        <td>{{$trucks->driver_mobile_2}} <i class="fas fa-mobile-alt text-primary"></i></td>
                        <td> {{trans('main.Local_phone_number')}} </td>
                    </tr>
    
                        <tr>
                        <td> {{$trucks->driver_mobile_1}} <i class="fas fa-mobile-alt text-primary"></i></td>
    
                        <td> {{trans('main.International_telephone_number')}} </td>
                    </tr>
                    @foreach ($file as $files)
                        
                    @if( $trucks->file_id == $files->id  )
                   
                    <tr>
                            <td><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                {{$files->file_location}}
                        </a><i class="far fa-file text-primary"></i></td>
        
                            <td>{{trans('main.file')}} </td>
                        </tr>
                        
                    @endif
                    @endforeach
                    @endforeach
           

                @if ($orders->importeport_id == 0)

                <tr>
                        
                    <td>{{trans('main.import')}} <i class="fas fa-arrow-circle-down text-primary"></i></td>
                    <td>{{trans('main.export_or_import')}}</td>
                </tr>
                @else 
                <tr>
                    <td>{{trans('main.export')}} <i class="fas fa-arrow-circle-up text-primary"></i></td>
                    <td>{{trans('main.export_or_import')}}</td>
                   
                </tr>
                @endif


                <tr>
                    @if($orders->status_id==1)
                    <td>

                        <form method="post" action="/admin/vieworderC{{$orders->id}}">
                            @csrf
                            <input type="submit" class="btn btn-success"  value="{{trans('main.accept')}} " />
                        </form></td>
                        <td>
                        <a><button class="btn btn-warning text-right ml-auto mr-auto" data-toggle="modal" data-target="#viewAddModal">{{trans('main.rejection')}}   </button></a>


                        </td>
                        <div class="modal fade" id="viewAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content container">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel">{{trans('main.note')}} </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="card text-center">
                                            <div class="card-header">
                                            <h3>أترك ملاحظة للعميل  </h3>
                                        </div>
                        
                        
                            <div class="card-body">
                                    <form method="POST" action="{{ route('OrderReject',[$orders->id]) }}" >
                                        
                                            @csrf
                        <div class="form-group row">
                                                        
                            <i class="fa fa-comment" aria-hidden="true" id="icon"></i>
                        <input id="comment" name="comment" type="text" class="form-control"  placeholder=" ملاحظة" required/>
                        </div>
                        
                        <input type="submit" class=" btn btn-warning "  value="إرسال الملاحظة" />
                        
                                    </form>
                        </div>
                        </div>
                                </div>
                            </div>
                            </div>
                         
                       

                            
                    <td>{{trans('main.Procedure')}}</td>
                </tr>
                @else
                @endif
            </table>
            <hr>
            <h3 class="text-center text-primary">{{trans('main.attached_files')}}</h3>

            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- CR --}}
                    @foreach ($file as $files)
                    
                    @if ($crs->file_id == $files->id )
                    <table class="table borderless table-striped text-center">
                        <tr>
                        <th colspan="2"> {{trans('main.cr')}}</th>
                        </tr>
                        <tr>
                            <td>{{trans('main.number_Commercial_record')}}</td>
                            <td>{{trans('main.exp_cr')}}</td>
                        </tr>
                        <tr>
                            <td>{{$crs->cr_number}}</td>
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
                            <th colspan="2">{{trans('main.Country_of_origin_certificate')}}</th>
                        </tr>
                        <tr>
                            <td>{{trans('main.number_of_certificate')}}</td>
                            <td>{{trans('main.date')}}</td>
                        </tr>
                        <tr>
                        <td>{{$coos->coo_number}}</td>
                        <td>{{$coos->expirydate}}</td>
                        </tr>
                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
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
                            <th colspan="2">{{trans('main.packing_list')}}</th>
                        </tr>
                        <tr>
                            <td>{{trans('main.number_packing')}}</td>
                            <td>{{trans('main.date')}}</td>
                        </tr>
                        <tr>
                            <td>{{$packList->pl_number}}</td>
                        <td>{{$packList->expirydate}}</td>
                        </tr>

                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
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
                            <th colspan="2">{{trans('main.Clearing_statement')}}</th>
                        </tr>
                        <tr>
                            <td>{{trans('main.number_of_statement')}}</td>
                            <td>{{trans('main.date')}}</td>
                        </tr>
                        <tr>
                            <td>{{$Muqassah->ms_number}}</td>
                        <td>{{$Muqassah->expirydate}}</td>
                        </tr>
                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
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
                            <th colspan="2">{{trans('main.Certificate_of_Conformity')}}</th>
                        </tr>
                        <tr>
                            <td>{{trans('main.number_of_certificate')}}</td>
                            <td>{{trans('main.date')}}</td>
                        </tr>
                        <tr>
                            <td>{{$sasos->saso_number}}</td>
                        <td>{{$sasos->expirydate}}</td>
                        </tr>
                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
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
                            <th colspan="2">{{trans('main.Glade_speech')}}</th>
                        </tr>
                        <tr>
                            <td>{{trans('main.number_of_speach')}}</td>
                            <td>{{trans('main.date')}}</td>
                        </tr>
                        <tr>
                            <td>{{$Release->rl_number}}</td>
                        <td>{{$Release->expirydate}}</td>
                        </tr>
                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
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
                            <th colspan="2">{{trans('main.The_policy')}}</th>
                        </tr>
                        <tr>
                            <td>{{trans('main.number_of_policy')}}</td>
                            <td>{{trans('main.date')}}</td>
                        </tr>
                        <tr>
                            <td>{{$Policy->policy_number}}</td>
                        <td>{{$Policy->expirydate}}</td>
                        </tr>
                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
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
                            <th colspan="2">{{trans('main.Letter_of_exemption')}}</th>
                        </tr>
                        <tr>
                            <td>{{trans('main.number_of_Letter')}}</td>
                            <td>{{trans('main.date')}}</td>
                        </tr>
                        <tr>
                        <td>{{$exemption_letter->el_number}}</td>
                        <td>{{$exemption_letter->expirydate}}</td>
                        </tr>
                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
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
                                @if ($comments->comment_by_user == $users->id)
                                <th colspan="2">{{trans('main.comment_user')}} </th>
                                @else 
                                <th colspan="2">{{trans('main.comment_admin')}} </th>
        
                                @endif
                        </tr>
                        <tr>
                            <td>{{trans('main.comment')}}  </td>
                            <td>{{trans('main.Comment_date')}}  </td>
                        </tr>
                       
                        <tr>
                        <td>{{$comments->comment_description}}</td>
                        <td>{{$exemption_letter->created_at}}</td>
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
                        <th colspan="2">  {{$others->ood_name}} {{trans('main.Other_Form')}} </th>
                        </tr>
                        <tr>
                            <td>{{trans('main.Form_number')}}</td>
                            <td>{{trans('main.date')}}</td>
                        </tr>
                        <tr>
                            <td>{{$others->ood_number}}</td>
                        <td>{{$others->expirydate}}</td>
                        </tr>

                        <tr>
                                <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                                    {{$files->file_location}}
                            </a><i class="far fa-file text-primary"></i></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                @endif
                @endforeach
                @endforeach

            </div>


            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">

                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">

                </div>
            </div>
    

                          {{-- <img src="http://pngimg.com/uploads/simpsons/simpsons_PNG8.png" class="d-block w-100" height="650" alt="..."> --}}
                 
        </div>

        @endif
        @endforeach
        @endforeach
        @endforeach
               
        @endif
       
        @endforeach
        @endforeach                    
        @endforeach



        @endsection