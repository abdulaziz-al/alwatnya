<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الوطنية - تسجيل دخول</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
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
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">الدخول  <span class="sr-only">(current)</span></a>
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
                <div class="title m-b-md h1 text-center mt-5">


                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-center">مرحبا بك, الرجاء تسجيل الدخول</h3>
                                </div>
                                <div class="panel-body">
                                    <form accept-charset="UTF-8" role="form">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="إسم المستخدم" name="email" type="text">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input name="remember" type="checkbox" value="Remember Me"> <span class="h5">تذكرني</span>
                                            </label>
                                        </div>
                                        <input class="btn btn-lg btn-primary btn-block" type="submit" value="دخول">
                                    </fieldset>
                                    </form>
                                </div>
			                </div>
		                </div>
	                </div>


                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>