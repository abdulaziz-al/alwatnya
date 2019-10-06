@extends('layouts.app')

@section('content')
@include('sweetalert::alert')


        <title>الوطنية - الإشراف</title>




        <div class="container">
            <h1 class="text-center mt-3">لوحة تحكم الإشراف</h1>
            <hr>
            <div class="jumbotron rounded-lg">
                <h3 class="text-right"> تقرير مبسط <i class="fas fa-tachometer-alt"></i></h3>
                <table class="borderless table text-right h4">
                    <tr>
                        <td><u>{{$order->count()}}</u></td>
                        <td>عدد الطلبات المسجلة على النظام <i class="far fa-file text-info"></i></td>
                    </tr>
                    <tr>
                        <td><a href="/admin/completedorders"><u>{{$order_Accepte->count()}}</u></a></td>
                        <td>عدد الطلبات المنفذة على النظام <i class="fas fa-clipboard-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td><a href="/admin/neworders"><u>{{$order_waiting->count()}}</u></a></td>
                        <td>عدد الطلبات بإنتظار التنفيذ على النظام <i class="far fa-clock text-danger"></i></td>
                    </tr>
                    <tr>
                        <td><u>{{$order_Reject->count()}}</u></td>
                        <td>عدد الطلبات المعادة للتحديث <i class="far fa-undo text-warning"></i></td>
                    </tr>
                </table>
            </div>
            <hr>
            <h1 class="text-center mt-3 mb-3">الوصول السريع</h1>
            <div class="text-center">
                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                    <a href="/admin/search"><button type="button" class="btn btn-info mr-1 ml-1">بحث متقدم <i class="fas fa-search"></i></button></a>
                    <a href="/admin/returnedorders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-warning">{{$order_Reject->count()}}</span> الطلبات المعادة <i class="fas fa-undo text-warning"></i></button></a>
                    <a href="/admin/completedorders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-primary">{{$order_Accepte->count()}}</span> الطلبات المنفذة <i class="fas fa-clipboard-check"></i></button></a>
                    <a href="/admin/neworders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-danger">{{$order_waiting->count()}}</span> الطلبات الجديدة <i class="far fa-clock text-danger"></i></button></a>
                    <a href="/admin/createuser"><button type="button" class="btn btn-info mr-1 ml-1"> عضو جديد <i class="fas fa-plus-circle"></i></button></a>
                </div>
            </div>
        </div>
        

        @endsection