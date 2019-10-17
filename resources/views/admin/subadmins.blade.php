@extends('layouts.app')

@section('content')

    <title>الوطنية - إدارة المشرفين</title>
    
    <div class="container">
        <h1 class="text-center mt-3">{{trans('main.sitting')}}</h1>
        <h3 class="text-center mt-3">{{trans('main.manage_supervisors')}}</h3>
        <hr>
    
        <div class="text-right mb-3">
            <a href="subadmins/new"><button class="btn btn-info text-right">{{trans('main.new_member')}} <i class="fas fa-plus-circle"></i></button></a>
        </div>
        <table class="table borderless table-striped text-center rounded-lg">
            <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>{{trans('main.status')}}</th>
                    <th>{{trans('main.supervisors')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sub as $subadmin)
                    
                <tr>
                    <td>
                        <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>    
                        <a href="subadmins/viewsubadmin{{$subadmin->id}}"><button class="btn btn-info"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>{{trans('main.active')}}</td>
                    <td>{{$subadmin->full_name}}</td>
                </tr>
                @endforeach

                
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