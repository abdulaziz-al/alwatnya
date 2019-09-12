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
        <form>
            <div class="row mb-3">
                <div class="col text-right">
                    <label for="username">إسم المستخدم</label>
                    <input type="text" id='username' class="form-control" placeholder="username_123">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col text-right">
                    <label for="password">كلمة المرور</label>
                    <input type="text" id='password' class="form-control" placeholder="********">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col text-right">
                    <label for="">الصلاحيات</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="stats">عرض التقرير المبسط</label>
                    <input type="checkbox" name="privliges" id="stats">
                </div>
                <div class="col-6 text-center">
                    <label for="manageadmins">عرض خيار إدارة الإشراف</label>
                    <input type="checkbox" name="privliges" id="manageadmins">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="passwordchange">تغيير كلمة المرور</label>
                    <input type="checkbox" name="privliges" id="passwordchange">
                </div>
                <div class="col-6 text-center">
                    <label for="viewneworders">عرض الطلبات الجديدة</label>
                    <input type="checkbox" name="privliges" id="viewneworders">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="viewcompletedorders">عرض الطلبات المنفذه</label>
                    <input type="checkbox" name="privliges" id="viewcompletedorders">
                </div>
                <div class="col-6 text-center">
                    <label for="viewreturnedorders">عرض الطلبات المعادة</label>
                    <input type="checkbox" name="privliges" id="viewreturnedorders">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="viewuserinfo">عرض بيانات عضو</label>
                    <input type="checkbox" name="privliges" id="viewuserinfo">
                </div>
                <div class="col-6 text-center">
                    <label for="edituserinfo">تعديل بيانات عضو</label>
                    <input type="checkbox" name="privliges" id="edituserinfo">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="acceptorders">قبول طلب عضو</label>
                    <input type="checkbox" name="privliges" id="acceptorders">
                </div>
                <div class="col-6 text-center">
                    <label for="declineorders">رفض طلب عضو</label>
                    <input type="checkbox" name="privliges" id="declineorders">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="returnorder">إعادة طلب الى عضو للتحديث</label>
                    <input type="checkbox" name="privliges" id="returnorder">
                </div>
                <div class="col-6 text-center">
                    <label for="statuses">إدارة حالات الطلب</label>
                    <input type="checkbox" name="privliges" id="statuses">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col text-right">
                    <label for="">فعالية الحساب</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="inactive">معطّل</label>
                    <input type="radio" name="activity" id="inactive">
                </div>
                <div class="col-6 text-center">
                    <label for="active">فعّال</label>
                    <input type="radio" name="activity" id="active" checked>
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

    @endsection