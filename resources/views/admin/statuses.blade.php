<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الوطنية - إدارة حالات الطلب</title>
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
        <h3 class="text-center mt-3">إدارة حالات الطلب</h3>
        <hr>
        {{-- breadcrumb --}}
        <nav aria-label="breadcrumb" dir="rtl">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i> الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/admin/settings"> <i class="fas fa-cog"></i> الإعدادات</a></li>
            </ol>
        </nav>
        <div class="text-right mb-3">
            <a><button class="btn btn-info text-right" data-toggle="modal" data-target="#exampleModal">حالة جديدة <i class="fas fa-plus-circle"></i></button></a>
        </div>
        <table class="table borderless table-striped text-center rounded-lg">
            <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>الحالة</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{-- <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>     --}}
                        <a><button class="btn btn-info" data-toggle="modal" data-target="#viewStatusModal"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>تحت المعالجة</td>
                </tr>
                <tr>
                    <td>
                        {{-- <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>     --}}
                        <a><button class="btn btn-info" data-toggle="modal" data-target="#viewStatusModal"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>مكتمل</td>
                </tr>
                <tr>
                    <td>
                        {{-- <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>     --}}
                        <a><button class="btn btn-info" data-toggle="modal" data-target="#viewStatusModal"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>معاد</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- modal body for status adding button --}}
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">إضافة حالة جديدة</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row mt-3 mb-3 text-center">
                        <div class="col-12"><input type="text" dir="rtl" name="statusname" id='statusname' placeholder="إسم الحالة الجديدة">
                            <label for="statusname">إسم الحالة</label>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3 text-center">
                        <div class="col-12 text-center">
                            <input type="submit" name="submit" class="btn btn-info" value="إضافة حالة">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    {{-- modal body for status viewing button --}}
      <!-- Modal -->
      <div class="modal fade" id="viewStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">تعديل حالة طلب</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row mt-3 mb-3 text-center">
                        <div class="col-12"><input type="text" dir="rtl" name="statusname" id='statusname' placeholder="تحت المعالجة" value="تحت المعالجة">
                            <label for="statusname">إسم الحالة</label>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3 text-center">
                        <div class="col-12 text-center">
                            <input type="submit" name="submit" class="btn btn-info" value="حفظ التغيير">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
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