@extends('layouts.app')

@section('content')
    <title>الوطنية - الإعدادات</title>
    
    <div class="container">
        <h1 class="text-center mt-3">الإعدادات</h1>
        <hr>
        {{-- breadcrumb --}}
        <nav aria-label="breadcrumb" dir="rtl">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i> الرئيسية</a></li>
            </ol>
        </nav>
        <ul class="list-group list-group-flush text-right">
            {{-- manage sub-admins --}}
            <a href="settings/subadmins"><li class="list-group-item list-group-item-primary rounded-lg mb-1 list-group-item-action h4">إدارة الإشراف <i class="fas fa-unlock-alt"></i></li></a>
            {{-- change password --}}
            <a href="settings/password"><li class="list-group-item list-group-item-primary rounded-lg mb-1 list-group-item-action h4">تغيير كلمة المرور <i class="fas fa-key"></i></li></a>
            {{-- manage statuses --}}
            {{-- <a href="settings/statuses"><li class="list-group-item list-group-item-primary rounded-lg mb-1 list-group-item-action h4">إدارة حالات الطلب <i class="fas fa-wrench"></i></li></a> --}}
        </ul>
    </div>

    @endsection