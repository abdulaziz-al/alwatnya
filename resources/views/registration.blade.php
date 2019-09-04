<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الوطنية - تسجيل طلب</title>

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
                        <a class="nav-link" href="/contact-us">تواصل معنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/checkstatus">استعلام عن طلب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">الدخول</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/registration">التسجيل <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">الرئيسية</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md h1 text-center mt-3">
                    تسجيل طلب
                </div>
                <div class="title m-b-md h3 text-right mt-3">
                    :الخطوات
                </div>

                <div class="list-group">
                    <!-- step 1 -->
                    <span class="list-group-item mb-3 rounded-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3 ml-auto mr-auto">طلب تسجيل حساب عبر الوطنية</h5>
                            <small>الخطوة الأولى</small>
                        </div>
                        <p class="mb-3 text-center">الرجاء التواصل معنا والتقدم بالطلب عبر القنوات التالية  </p>
                        <p class="mb-1 ml-auto mr-auto text-center">
                            <i class="fab fa-whatsapp fa-2x text-success mb-3"></i>&nbsp;<span class="h3">+966135370501</span><br>
                            <i class="far fa-envelope fa-2x text-danger"></i>&nbsp;<span class="h3">admin@alwatanya.sa</span> 
                        </p>
                    </span>
                    <!-- step 2 -->
                    <span class="list-group-item mb-3 rounded-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3 ml-auto mr-auto">التأكد من هوية صاحب الطلب</h5>
                            <small>الخطوة الثانية</small>
                        </div>
                        <p class="mb-1 ml-auto mr-auto text-center">
                         يتم في هذه المرحلة التأكد من هوية صاحب الطلب وإنشاء حساب للمستخدم بعد ذلك يتم إرسال معلومات إسم المستخدم وكلمة المرور عبر أحد قنوات وسائل التواصل
                        </p>
                    </span>
                    <!-- step 3 -->
                    <span class="list-group-item mb-3 rounded-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3 ml-auto mr-auto">الدخول الى الملف الشخصي</h5>
                            <small>الخطوة الثالثة</small>
                        </div>
                        <p class="mb-1 ml-auto mr-auto text-center">
                            بعد الدخول الى الملف الشخصي بالإمكان رفع الطلبات والمستندات الخاصة لكل طلب ومتابعة سير المعاملة أول بأول
                        </p>
                    </span>


                </div> <!-- end of .list-group -->
            </div> <!-- end of .content -->
        </div> <!-- end of container -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>