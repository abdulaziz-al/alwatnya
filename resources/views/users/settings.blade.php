<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الوطنية - الإعدادات</title>

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
                        <a class="nav-link" href="/user/logout">تسجيل خروج <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/user/settings">الإعدادات  <span class="sr-only">(current)</span> <i class="fas fa-cog"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user">الرئيسية <i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link">kamal1199, مرحبا بك  <span class="sr-only">(current)</span> <i class="far fa-smile"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

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
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>