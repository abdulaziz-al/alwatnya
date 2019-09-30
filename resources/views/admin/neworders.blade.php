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
                                @foreach ($Waiting_order as $order)

                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-primary">جديد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">{{substr($order->invoiceItems_description , 0,-3) }}  طلب تخليص جمركي رقم</h5>
                                <small> {{substr ($order->created_at,0,10)}}  :منذ </small>
                                </div>
                                <p class="mb-1">{{$order->full_name}}  -  +{{$order->phone}}</p>
                            </a>
                            @endforeach

                        </div>
                    </td>
                </tr>
            </table>
        </div>


        @endsection