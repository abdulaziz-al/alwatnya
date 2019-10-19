@extends('layouts.app')

@section('content')
        <title>الوطنية - الطلبات الجديدة</title>



        <div class="container">
            <h1 class="text-center mt-3">طلبات بإنتظار التنفيذ</h1>
            <hr>
            <table class="table table-striped  text-center">
                <tr>
                    <td>
                        <div class="list-group">
                                @foreach ($order as $orders)

                                <a href="vieworder{{$orders->id}}" class="list-group-item list-group-item-action">
                                    <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-primary">جديد</span>
                                <div class="d-flex w-100 justify-content-between">
                                    @foreach ($invoice as $invoices)
                                    @foreach ($invoice_items as $invoice_item)
                                        @if ($invoices->id == $orders->invoice_id && $invoices->invoiceItems_id == $invoice_item->id )
                                        <h5 class="mb-1 ml-auto mr-auto">{{substr($invoice_item->invoiceItems_description , 0,-3) }}   طلب تخليص جمركي رقم</h5>

                                        @endif
                                    @endforeach
                                    @endforeach 
                                    <small> {{ $orders->created_at->diffForHumans() }}  :منذ </small>

                                    <small> {{substr ($orders->created_at,0,10)}}  :منذ </small>
                                </div>
                                @foreach ($user as $users)
                                @if ($users->id == $orders->user_id)
                                    
                            <p class="mb-1">{{$users->full_name}}  -  +{{$users->phone}} </p>
                            @endif
                            @endforeach
                            </a>
                            @endforeach

                        </div>
                    </td>
                </tr>
            </table>
        </div>
        


        @endsection