@extends('layouts.app')

@section('content')

    <title>الوطنية - إدارة المشرفين</title>
    
    <div class="container">
        <h1 class="text-center mt-3">الإعدادات</h1>
        <h3 class="text-center mt-3">إدارة المشرفين</h3>
        <hr>
        {{-- breadcrumb --}}
        <button
  [swal]="{ title: 'Enter your email', input: 'email' }"
  (confirm)="saveEmail($event)"
  (cancel)="handleRefusalToSetEmail($event)">

  Set my e-mail address
</button>
        <nav aria-label="breadcrumb" dir="rtl">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i> الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/admin/settings"> <i class="fas fa-cog"></i> الإعدادات</a></li>
            </ol>
        </nav>
        <div class="text-right mb-3">
            <a href="subadmins/new"><button class="btn btn-info text-right">مشرف جديد <i class="fas fa-plus-circle"></i></button></a>
        </div>
        <table class="table borderless table-striped text-center rounded-lg">
            <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>الحالة</th>
                    <th>المشرف</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>    
                        <a href="subadmins/viewsubadmin"><button class="btn btn-info"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>فعّال</td>
                    <td>فلعوط</td>
                </tr>
                <tr>
                    <td>
                        <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>    
                        <a href="subadmins/viewsubadmin"><button class="btn btn-info"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>فعّال</td>
                    <td>حلتيت</td>
                </tr>
                <tr>
                    <td>
                        <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>    
                        <a href="subadmins/viewsubadmin"><button class="btn btn-info"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>معطّل</td>
                    <td>قضعان</td>
                </tr>
            </tbody>
        </table>
    </div>


    <script>
        $('.del-btn').on('click', function() {
            swal({
                title: "هل أنت متأكد؟",
                text: "!بعد الحذف لن تتمكن من استعادة البيانات المحذوفة",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("درررررم تم الحذف بنجاح", {
                        icon: "success",
                    });
                } else {
                    swal("تم إلغاء عملية الحذف");
                }
            });
        })
    </script>
    
    @endsection