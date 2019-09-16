@extends('layouts.app')

@section('content')
       
        <title>الوطنية - تعديل سجل تجاري</title>

        <div class="container">
            <h1 class="text-center mt-3">تعديل سجل تجاري</h1>
            <hr>
            {{-- breadcrumb --}}
            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/user"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="/user/settings"><i class="fas fa-cog"></i> الإعدادات</a></li>
                </ol>
            </nav>
            <table class="table borderless text-center mb-5">
                <tr>
                    <td><input type="text" class="form-control" value="123456789abcde"></td>
                    <th>رقم السجل</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="datepicker" /></td>
                    <th>تاريخ السجل</th>

                  
                </tr>
                <tr>
                    <td><img src="https://pbs.twimg.com/profile_images/434117280/CR_Logo_400x400.jpg" alt=""></td>
                    <th>صورة من السجل</th>
                </tr>
                <tr>
                    <td colspan=""><i class="fas fa-trash-alt text-danger fa-2x" title="إزالة الصورة"></i></td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary">حفظ</button>
                    </td>
                </tr>   
            </table>
    </div>


    
@endsection
       