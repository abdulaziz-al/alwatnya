@extends('layouts.app')

@section('content')
       
        <title>الوطنية - معلومات الحساب</title>

       


            <div class="jumbotron rounded-lg text-center">
                <table class="table borderless text-center">
                    <tr>
                    <td>{{Auth::user()->full_name}}</td>
                        <th>الإسم</th>
                    </tr>
                    <tr>
                    <td>{{Auth::user()->email}}</td>
                        <th>البريد الإلكتروني</th>
                    </tr>
                    <tr>
                        <td>{{Auth::user()->phone}}</td>
                        <th>رقم الجوال</th>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="info/edit"><button class="btn btn-primary">تعديل <i class="fas fa-pencil-alt"></i></button></a></td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        @endsection