<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الوطنية - الإشراف</title>

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
                        <a class="nav-link" href="/admin/logout">تسجيل خروج <i class="fas fa-sign-out-alt"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/settings">الإعدادات <i class="fas fa-cog"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/search">بحث <i class="fas fa-search"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin">الرئيسية  <span class="sr-only">(current)</span> <i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link">Admin, مرحبا بك  <span class="sr-only">(current)</span> <i class="far fa-smile"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container">
            <h1 class="text-center mt-3">لوحة تحكم الإشراف</h1>
            <hr>
            <div class="jumbotron rounded-lg">
                <h3 class="text-right"> تقرير مبسط <i class="fas fa-tachometer-alt"></i></h3>
                <table class="borderless table text-right h4">
                    <tr>
                        <td><u>217</u></td>
                        <td>عدد الطلبات المسجلة على النظام <i class="far fa-file text-info"></i></td>
                    </tr>
                    <tr>
                        <td><u>199</u></td>
                        <td>عدد الطلبات المنفذة على النظام <i class="fas fa-clipboard-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td><u>15</u></td>
                        <td>عدد الطلبات بإنتظار التنفيذ على النظام <i class="far fa-clock text-danger"></i></td>
                    </tr>
                    <tr>
                        <td><u>3</u></td>
                        <td>عدد الطلبات المعادة للتحديث <i class="far fa-undo text-warning"></i></td>
                    </tr>
                </table>
            </div>
            <hr>
            <h1 class="text-center mt-3 mb-3">الوصول السريع</h1>
            <div class="text-center">
                <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                    <a href="/admin/search"><button type="button" class="btn btn-info mr-1 ml-1">بحث متقدم <i class="fas fa-search"></i></button></a>
                    <a href="/admin/returnedorders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-warning">3</span> الطلبات المعادة <i class="fas fa-undo text-warning"></i></button></a>
                    <a href="/admin/completedorders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-primary">217</span> الطلبات المنفذة <i class="fas fa-clipboard-check"></i></button></a>
                    <a href="/admin/neworders"><button type="button" class="btn btn-info mr-1 ml-1"><span class="badge badge-pill badge-danger">15</span> الطلبات الجديدة <i class="far fa-clock text-danger"></i></button></a>
                    <a href="/admin/createuser"><button type="button" class="btn btn-info mr-1 ml-1"> عضو جديد <i class="fas fa-plus-circle"></i></button></a>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>