@extends('layouts.app')

@section('content')


        <title>الوطنية - الطلبات المنفذة</title>

        <div class="container">
            <h1 class="text-center mt-3">{{trans('main.Executed_requests')}}</h1>
            <hr>
            <table class="table table-striped  text-center">
                <tr>
                    <td>

                        <div class="list-group">
                            @foreach ($order as $orders)
                        <a href="/user/showOrder{{$orders->id}}"  class="list-group-item list-group-item-action">
                                
                            <i class="fas fa-check text-success"></i>
                                <span class="badge badge-pill badge-primary">{{trans('main.completed')}}</span>
                                <div class="d-flex w-100 justify-content-between">
                                    @foreach ($invoice as $invoices)
                                    @foreach ($invoice_items as $invoice_item)
                                        @if ($invoices->id == $orders->invoice_id && $invoices->invoiceItems_id == $invoice_item->id )
                                        <h5 class="mb-1 ml-auto mr-auto">{{substr($invoice_item->invoiceItems_description , 0,-3) }}   طلب تخليص جمركي رقم</h5>

                                        @endif
                                    @endforeach
                                    @endforeach
                                
                                
                                <small> {{substr ($orders->created_at,0,10)}}   :{{trans('main.since')}} </small>
                                </div>
                                @foreach ($user as $users)
                                    @if ($users->id == $orders->user_id)
                                        
                                <p class="mb-1">{{$users->full_name}}  -  +{{$users->phone}} </p>
                                @endif
                                @endforeach

                                <small>{{substr ($orders->updated_at, 0,10)}}     :{{trans('main.date_of_starting')}} </small>
                            </a>
                          
                            @endforeach

                        </div>
                    </td>
                </tr>
            </table>
        </div>

        @endsection
