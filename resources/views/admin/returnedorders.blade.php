<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الوطنية - الطلبات المعاده</title>

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
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">الرئيسية <i class="fas fa-home"></i></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link">Admin, مرحبا بك  <span class="sr-only">(current)</span> <i class="far fa-smile"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <h1 class="text-center mt-3">طلبات معاده للعضو</h1>
            <hr>
            <table class="table table-striped  text-center">
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-warning">معاد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1098 طلب تخليص جمركي رقم</h5>
                                <small>منذ يوم</small>
                                </div>
                                <p class="mb-1">@kamal1199 - +966554433221</p>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-warning">معاد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1099 طلب تخليص جمركي رقم</h5>
                                <small>منذ 3 أيام</small>
                            </div>
                                <p class="mb-1">@hussam9911 - +966554354321</p>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-warning">معاد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1100 طلب تخليص جمركي رقم</h5>
                                <small>منذ 4 أيام</small>
                                </div>
                                <p class="mb-1">@ahmad91 - +96655000999</p>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-warning">معاد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1101 طلب تخليص جمركي رقم</h5>
                                <small>منذ 4 أيام</small>
                                </div>
                                <p class="mb-1">@ali91 - +96655999000</p>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>