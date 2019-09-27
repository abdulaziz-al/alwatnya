@extends('layouts.app')

@section('content')
       
        <title>الوطنية - تعديل معلومات الحساب</title>

        <div class="container">
            <h1 class="text-center mt-3">تعديل معلومات الحساب</h1>
           

            <div class="jumbotron rounded-lg text-center">
                <table class="table borderless text-center">
                    <tr>
                    <td><input type="text" class="form-control" dir='rtl' value="{{Auth::user()->full_name}}"></td>
                        <th>الإسم</th>
                    </tr>
                    <tr>
                        <td><input type="email" class="form-control" value="{{Auth::user()->email}}"></td>
                        <th>البريد الإلكتروني</th>
                    </tr>
                    <tr>
                        <td><input type="tel" class="form-control" name="" value="{{Auth::user()->phone}}"></td>
                        <th>رقم الجوال</th>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="/user/settings/info"><button class="btn btn-success">حفظ</button></a></td>
                    </tr>
                </table>
            </div>
        </div>


        @endsection