<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الوطنية - عرض مشرف</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- fa -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
        <h3 class="text-center mt-3">تعديل بيانات مشرف</h3>
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
                    <input type="text" id='username' class="form-control" placeholder="username_123" value="فلعوط">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col text-right">
                    <label for="password">كلمة المرور</label>
                    <input type="text" id='password' class="form-control" placeholder="********" value="********">
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
                    <input type="checkbox" name="privliges" id="passwordchange" checked>
                </div>
                <div class="col-6 text-center">
                    <label for="viewneworders">عرض الطلبات الجديدة</label>
                    <input type="checkbox" name="privliges" id="viewneworders" checked>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="viewcompletedorders">عرض الطلبات المنفذه</label>
                    <input type="checkbox" name="privliges" id="viewcompletedorders">
                </div>
                <div class="col-6 text-center">
                    <label for="viewreturnedorders">عرض الطلبات المعادة</label>
                    <input type="checkbox" name="privliges" id="viewreturnedorders" checked>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="viewuserinfo">عرض بيانات عضو</label>
                    <input type="checkbox" name="privliges" id="viewuserinfo" checked>
                </div>
                <div class="col-6 text-center">
                    <label for="edituserinfo">تعديل بيانات عضو</label>
                    <input type="checkbox" name="privliges" id="edituserinfo">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="acceptorders">قبول طلب عضو</label>
                    <input type="checkbox" name="privliges" id="acceptorders" checked>
                </div>
                <div class="col-6 text-center">
                    <label for="declineorders">رفض طلب عضو</label>
                    <input type="checkbox" name="privliges" id="declineorders" checked>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="returnorder">إعادة طلب الى عضو للتحديث</label>
                    <input type="checkbox" name="privliges" id="returnorder" checked>
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
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary" value="حفظ التغيير">
                </div>
            </div>
        </form>
        <br><br>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>