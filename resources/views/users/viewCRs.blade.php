<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الوطنية - إدارة السجلات التجارية</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
        <!-- fa -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        {{-- required for date attribute --}}
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .ui-draggable, .ui-droppable {
	background-position: top;
}

        </style>
    </head>
    <body onload="initWork()">
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
            <h1 class="text-center mt-3">إدارة السجلات التجارية</h1>
            <hr>
            {{-- breadcrumb --}}
            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/user"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="/user/settings"><i class="fas fa-cog"></i> الإعدادات</a></li>
                </ol>
            </nav>
            <div class="row text-center mb-3">
                <div class="col-12 text-center">
                    <a><button class="btn btn-info text-right ml-auto mr-auto" data-toggle="modal" data-target="#viewAddModal">إضافة سجل تجاري جديد <i class="fas fa-plus-circle"></i></button></a>
                </div>
            </div>
            <table class="table borderless text-center">
                <tr>
                    <td>1</td>
                    <th>#</th>
                </tr>
                <tr>
                    <td>123456789abcde</td>
                    <th>رقم السجل</th>
                </tr>
                <tr>
                    <td>11/12/2019</td>
                    <th>تاريخ السجل</th>
                </tr>
                <tr>
                    <td><img src="https://pbs.twimg.com/profile_images/434117280/CR_Logo_400x400.jpg" alt=""></td>
                    <th>صورة من السجل</th>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-danger">حذف</button>
                        <a href="crs/edit"><button class="btn btn-primary">تعديل</button></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <th>#</th>
                </tr>
                <tr>
                    <td>a12b32web42</td>
                    <th>رقم السجل</th>
                </tr>
                <tr>
                    <td>5/6/2017</td>
                    <th>تاريخ السجل</th>
                </tr>
                <tr>
                    <td><img src="https://pbs.twimg.com/profile_images/434117280/CR_Logo_400x400.jpg" alt=""></td>
                    <th>صورة من السجل</th>
                </tr>
                <td>
                    <button class="btn btn-danger">حذف</button>
                    <a href="crs/edit"><button class="btn btn-primary">تعديل</button></a>
                </td>
            </table>
    </div>
    {{-- modal body for status viewing button --}}
      <!-- Modal -->
    <div class="modal fade" id="viewAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">إضافة سجل تجاري</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-6"><input type="text" dir="rtl" name="crnumber" id='crnumber' placeholder="رقم السجل" class="form-control"></div>
                            <div class="col-6"><label for="statusname">:رقم السجل التجاري</label></div>
                        </div>
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-6"><input type="text" id="datepicker"></div>
                            <div class="col-6"><label for="statusname">:تاريخ السجل التجاري</label></div>
                        </div>
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-12"><label for="statusname">:صورة السجل التجاري</label></div>
                        </div>
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-12 custom-file">
                                <input type="file" dir="rtl" class="custom-file-input" id="customFile" name="crpic" placeholder="صورة السجل">
                                <label class="custom-file-label" for="customFile" data-browse="عرض">إختر ملف</label>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-12 text-center">
                                <input type="submit" name="submit" class="btn btn-info" value="إضافة">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> --}}
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/Hijri.js') }}"></script>
        <script>
            var currDate = '';
            function initWork() {
                // get today's date in Hijri
                currDate = HijriJS.today().toString();
                // to remove H from yearH ex: 1440H, drop the last character to be 1440
                currDate = currDate.substring(0, currDate.length - 1);
                // reformat date from dd/mm/yyyy to dd-mm-yyyy
                currDate = currDate.split('/').join('-');
                // set the date input field to currDate so, datepicker sets it as the current date automatically
                $('#datepicker').val(currDate);
                
            }
            $( function() {
                $( "#datepicker" ).datepicker({
                    // changeMonth: true, // show months menu
                    changeYear: true, // show years menu
                    dayNamesMin: [ "س", "ج", "خ", "ر", "ث", "ن", "ح" ], // arabic days names
                    // dayNames: [ "السبت", "الجمعة", "الخميس", "الأربعاء", "الثلاثاء", "الأُثنين", "الأحد" ],
                    dateFormat: "dd-mm-yy", // set format to dd-mm-yyyy
                    monthNames: [ "محرم", "صفر", "ربيع الأول", "ربيع الثاني", "جمادى الأول", "جمادى الثاني", "رجب", "شعبان", "رمضان", "شوال", "ذو القعدة", "ذو الحجة" ],
                    yearRange: "c-0:c+15", // year range in Hijri from current year and +15 years
                    monthNamesShort: [ "محرم", "صفر", "ربيع ١", "ربيع ٢", "جمادى ١", "جمادى ٢", "رجب", "شعبان", "رمضان", "شوال", "ذو القعدة", "ذو الحجة" ],
                    showAnim: 'bounce'
                });
            } );
            </script>
                
    </body>
</html>