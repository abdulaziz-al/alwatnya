@extends('layouts.app')

@section('content')
       
        <title>الوطنية - الإعدادات</title>

        <div class="container">
            <h1 class="text-center mt-3">الإعدادات</h1>
            <hr>
            {{-- breadcrumb --}}
            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/user"><i class="fas fa-home"></i> الرئيسية</a></li>
                </ol>
            </nav>
            <ul class="list-group list-group-flush text-right">
                {{-- user information --}}
                <a href="settings/info"><li class="list-group-item list-group-item-primary rounded-lg mb-1 list-group-item-action h4">معلومات الحساب <i class="fas fa-info-circle"></i></li></a>
                {{-- change password --}}
                <a href="settings/password"><li class="list-group-item list-group-item-primary rounded-lg mb-1 list-group-item-action h4">تغيير كلمة المرور <i class="fas fa-key"></i></li></a>
                {{-- add/edit CRs --}}
                <a href="settings/crs"><li class="list-group-item list-group-item-primary rounded-lg mb-1 list-group-item-action h4">إدارة السجلات التجارية <i class="fas fa-briefcase"></i></li></a>
            </ul>
        </div>


        
@endsection