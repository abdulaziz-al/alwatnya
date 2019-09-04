<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الوطنية - إدارة المشرفين</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- fa -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .list-group {
            color:black;
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ml-auto" href="#">
            <span>الوطنية</span>
            <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/logout">تسجيل خروج <i class="fas fa-sign-out-alt"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/admin/settings">الإعدادات <i class="fas fa-cog"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/search">بحث <i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin">الرئيسية  <span class="sr-only">(current)</span> <i class="fas fa-home"></i></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link">Admin, مرحبا بك  <span class="sr-only">(current)</span> <i class="far fa-smile"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <h1 class="text-center mt-3">الإعدادات</h1>
        <h3 class="text-center mt-3">إدارة المشرفين</h3>
        <hr>
        {{-- breadcrumb --}}
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
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
</body>
</html>