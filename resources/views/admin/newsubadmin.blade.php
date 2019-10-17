@extends('layouts.app')

@section('content')
    <title>الوطنية - إضافة مشرف</title>
    <div class="container">
        <h1 class="text-center mt-3">الإعدادات</h1>
        <h3 class="text-center mt-3">إضافة مشرف</h3>
        <hr>
        {{-- breadcrumb --}}
        <nav aria-label="breadcrumb" dir="rtl">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i> الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/admin/settings"> <i class="fas fa-cog"></i> الإعدادات</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/admin/settings/subadmins"> <i class="fas fa-unlock-alt"></i> إدارة الإشراف</a></li>
            </ol>
        </nav>
        <form  method="POST" action="{{ route('createUser') }}" enctype="multipart/form-data">
            @csrf

                                <div class="form-group text-right">
                                    <label for="username">إسم المستخدم</label>
                                    <input class="form-control" id='full_name' placeholder="username" name="full_name" type="text">
                                </div>
                                <div class="form-group text-right">
                                    <label for="email">البريد الإلكتروني</label>
                                    <input class="form-control" id='email' placeholder="email@example.com" name="email" type="email">
                                </div>
                                <div class="form-group text-right">
                                    <label for="password">كلمة المرور</label>
                                    <input class="form-control" id='password' placeholder="********" name="password" type="password">
                                </div>
                                <div class="form-group text-right">
                                    <label for="phone">رقم الجوال</label>
                                    <input class="form-control" id='phone' placeholder="+966543210987" name="phone" type="phone">
                                </div>

            <div class="row mb-3">
                <div class="col text-right">
                    <label for="">الصلاحيات</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="stats">تسجيل عميل جديد </label>
                    <input type="checkbox" class="child" name="Create_user" id="stats">
                </div>
                <div class="col-6 text-center">
                    <label for="manageadmins">الموافقه على السجلات التجارية وإدارتها وتفعيل العملاء</label>
                    <input type="checkbox" class="child" name="active_cr" id="manageadmins">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="passwordchange">إدارة حالات الطلب وإعادته</label>
                    <input type="checkbox" class="child" name="edit_order" id="passwordchange">
                </div>
                <div class="col-6 text-center">
                    <label for="viewneworders">عرض الطلبات على النظام لمدة 365 يوما </label>
                    <input type="checkbox" class="child" name="view_year" id="viewneworders">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="viewcompletedorders">تحديد الكل</label>
                    <input type="checkbox"  name="all" id="viewcompletedorders">
                </div>
                
            </div>
            
            <hr>
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary" value="إضافة">
                </div>
            </div>
        </form>
        <br><br>
    </div>
     

    <script>
$(function() {
  $('#viewcompletedorders').on('change', function() {
    $('.child').prop('checked', this.checked);
  });
  $('.child').on('change', function() {
    $('#viewcompletedorders').prop('checked', $('.child:checked').length===$('.child').length);
  });
});

        </script>
    @endsection