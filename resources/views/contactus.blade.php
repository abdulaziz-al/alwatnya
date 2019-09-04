<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الوطنية - تواصل معنا</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="/contact-us">تواصل معنا  <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/checkstatus">استعلام عن طلب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">الدخول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/registration">التسجيل</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">الرئيسية</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md h1 mt-3 text-center">
                    تواصل معنا
                </div>

                <section id="contact">
                    <div class="container">
                        <p class="text-center w-75 m-auto">بإمكانك التواصل معنا عبر قنوات التواصل التالية</p>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 my-5">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-whatsapp text-success fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">واتساب</h4>
                                    <p>+966135370501</p>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 my-5">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-globe text-primary fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">البريد الإلكتروني</h4>
                                    <p>admin@alwatanya.sa</p>
                                </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 my-5">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <i class="fa fa-thumbs-up text-info fa-5x mb-3" aria-hidden="true"></i>
                                    <h4 class="text-uppercase mb-5">نسعد بخدمتكم</h4>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>