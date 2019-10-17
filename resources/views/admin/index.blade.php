@extends('layouts.app')

@section('content')
@include('sweetalert::alert')


        <title>الوطنية - الإشراف</title>




        <div class="container">
            <h1 class="text-center mt-3">{{trans('main.dashboard')}} </h1>
            <hr>
            <div class="jumbotron rounded-lg">
                <h3 style="text-align: center"> {{trans('main.report')}}<i class="fas fa-tachometer-alt"></i></h3>
                <table class="borderless table text-right h4">
                    <tr>
                        
                        <th colspan="2">{{trans('main.Number_of_applications_registered_on_the_system')}} <i class="far fa-file text-info"></i>
                        <u>{{$order->count()}}</u></th>
                    </tr>
                    <tr>
                            <th colspan="2">
                            {{trans('main.Number_of_requests_executed_on_the_system')}} <i class="fas fa-clipboard-check text-success"></i>
                            <a href="/admin/completedorders"><u>{{$order_Accepte->count()}}</u></a>
                    </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                                {{trans('main.The_number_of_applications_pending_execution_on_the_system')}} <i class="far fa-clock text-danger"></i>

                            <a href="/admin/neworders"><u>{{$order_waiting->count()}}</u></a>
                     
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                                {{trans('main.Number_of_requests_returned_for_update')}}<i class="far fa-undo text-warning"></i>

                            <a href="/admin/returnedorders"><u >{{$order_Reject->count()}}</u></a>
                    
                    </th>
                    </tr>
                </table>
            </div>
            <hr>
            <h1 class="text-center mt-3 mb-3">{{trans('main.Quick')}}</h1>
            <div class="text-center">
                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                    <a href="/admin/search"><button type="button" class="btn btn-info mr-1 ml-1">بحث متقدم <i class="fas fa-search"></i></button></a>
                    <a href="/admin/returnedorders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-warning">{{$order_Reject->count()}}</span> {{trans('main.Returned_requests')}} <i class="fas fa-undo text-warning"></i></button></a>
                    <a href="/admin/completedorders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-primary">{{$order_Accepte->count()}}</span> {{trans('main.Executed_requests')}}  <i class="fas fa-clipboard-check"></i></button></a>
                    <a href="/admin/neworders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-danger">{{$order_waiting->count()}}</span> {{trans('main.new_order')}}<i class="far fa-clock text-danger"></i></button></a>
                    <a href="/admin/createuser"><button type="button" class="btn btn-info mr-1 ml-1"> عضو جديد <i class="fas fa-plus-circle"></i></button></a>
                </div>
            </div>
        </div>
        

        @endsection