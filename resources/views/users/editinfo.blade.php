@extends('layouts.app')

@section('content')
       
        <title>الوطنية - تعديل معلومات الحساب</title>

        <div class="container">
            <h1 class="text-center mt-3">تعديل معلومات الحساب</h1>
            <hr>
            {{-- breadcrumb --}}
            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/user"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="/user/settings"><i class="fas fa-cog"></i> الإعدادات</a></li>
                    <li class="breadcrumb-item"><a href="/user/settings/info"><i class="fas fa-info-circle"></i> معلومات الحساب</a></li>
                </ol>
            </nav>

            <div class="jumbotron rounded-lg text-center">
                <table class="table borderless text-center">
                    <tr>
                        <td><input type="text" class="form-control" dir='rtl' value="كمال الكياس"></td>
                        <th>الإسم</th>
                    </tr>
                    <tr>
                        <td><input type="email" class="form-control" value="kamal.alzahrani1@gmail.com"></td>
                        <th>البريد الإلكتروني</th>
                    </tr>
                    <tr>
                        <td><input type="tel" class="form-control" name="" value="0532892778"></td>
                        <th>رقم الجوال</th>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="/user/settings/info"><button class="btn btn-success">حفظ</button></a></td>
                    </tr>
                </table>
            </div>
        </div>


        @endsection