@extends('layouts.app')

@section('select')
@include('sweetalert::alert')

<div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">إختار سجلك التجاري</button>
        
        <div id="myDropdown" class="dropdown-content">
        

                <a class="dropdown-item" href="#"
                ><!--add count for each option-->
                {{ __('إنشاء طلب ') }}

            </a>
@foreach ($cr_number as $cr_numbers)

        <a href="/createOrder{{$cr_numbers->cr_number }}" name="{{$cr_numbers->cr_number }}" class="dropdown-item">  {{$cr_numbers->cr_number }}</a>


 @endforeach  
 
</div>
</div>  


 @endsection

@section('content')
       
        <title>الوطنية - kamal1199</title>
        

        <div class="container">



                @if (Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}</div>
                @endif
        

        

        <h1 class="text-center mt-3"> {{Auth::user()->full_name}} لوحة تحكم</h1>
        
        

     
                
            

           

            <hr>
            <div class="jumbotron rounded-lg">
                <h3 class="text-right"> تقرير مبسط <i class="fas fa-tachometer-alt"></i></h3>
                <table class="borderless table text-right h4">
                    <tr>
                    <td><u>{{$order->count()}}</u></td>
                        <td>عدد طلباتي المسجلة <i class="far fa-file text-info"></i></td>
                    </tr>
                    <tr>
                    <td><u>{{$order_Accepte->count()}}</u></td>
                        <td>عدد طلباتي المنفذة <i class="fas fa-clipboard-check text-success"></i></td>
                    </tr>
                    <tr>
                            
                           
                    <td><u>{{$order_waiting->count()}}</u></td>
                        <td>عدد الطلبات بإنتظار التنفيذ <i class="far fa-clock text-danger"></i></td>
                    </tr>
                    <tr>
                    <td><u><a href="/admin/returnedorders">{{$order_Reject->count()}}</a></u></td>
                        <td>عدد الطلبات المعادة للتحديث <i class="fas fa-exclamation-triangle text-warning"></i></td>
                    </tr>
                </table>
            </div>
            <hr>
            <h1 class="text-center mt-3 mb-3">الوصول السريع</h1>
            <div class="text-center">
                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                    <a href="/user/returnedorders" target="_blank"><button type="button" class="btn btn-info mr-1 ml-1">طلبات معادة <i class="fas fa-undo text-warning"></i></button></a>
                    <a href="/user/completed" target="_blank"><button type="button" class="btn btn-info mr-1 ml-1">طلبات منفذة <i class="fas fa-clipboard-check"></i></button></a>
                    <a href="/user/neworders" target="_blank"><button type="button" class="btn btn-info mr-1 ml-1">طلبات حالية <i class="far fa-clock text-danger"></i></button></a>
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            إضافة طلب جديد <i class="fas fa-plus-circle"></i></button></a>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <h6 class="dropdown-header">قم بتحديد السجل التجاري</h6>
                            <a class="dropdown-item" href="user/neworder">123456789abcde</a>
                            <a class="dropdown-item" href="user/neworder">a12b32web42</a>
                            <a class="dropdown-item" href="user/neworder">d12abcdeb42</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }
                
                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                </script>
        
        @endsection