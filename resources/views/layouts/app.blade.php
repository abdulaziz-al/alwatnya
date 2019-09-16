<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>الوطنية  </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
            <img  src="images/Logo-white-Transparent-Background.png" width="60" height="60" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ ('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
         
            </a>
          



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">تواصل معنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="/checkstatus">استعلام عن طلب</a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="/">الرئيسية</a>
                    </li>
    
                            @guest
           
              <li class="nav-item">
                           <a class="nav-link" href="/login">الدخول  <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">التسجيل</a>
                    </li>
                        @else
         
                    @if (Auth::user()->role_id == 3 )
                    
                    <li class="nav-item">
                            <a class="nav-link" href="/user">لوحة التحكم</a>
                        </li>

                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                الوصل السريع  <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/createOrder"
                                    ><!--add count for each option-->
                                    {{ __('إنشاء طلب ') }}
                                </a>
                                        <a class="dropdown-item" href="#"
                                           >
                                            {{ __('الطلبات الحالية ') }}
                                        </a>
                                                <a class="dropdown-item" href="#"
                                                   >
                                                    {{ __('الطلبات المنفذة') }}
                                                </a>
                                                        <a class="dropdown-item" href="#"
                                                         >
                                                            {{ __('الطلبات المعادة') }}
                                                        </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        
                    @endif

                      
                    
                   
                      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->full_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    
                         
                          

        @yield('content')
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
        // $('#datepicker').val(currDate);
        
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
    <script>
        $(document).ready(function(){
        
         var count = 1;
        
         dynamic_field(count);
        
         function dynamic_field(number)
         {
          html = '<tr>';
                html += '<td><input type="text" name="first_name[]" class="form-control" /></td>';
                html += '<td><input type="text" name="last_name[]" class="form-control" /></td>';
                if(number > 1)
                {
                    html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
                    $('tbody').append(html);
                }
                else
                {   
                    html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
                    $('tbody').html(html);
                }
         }
        
         $(document).on('click', '#add', function(){
          count++;
          dynamic_field(count);
         });
        
         $(document).on('click', '.remove', function(){
          count--;
          $(this).closest("tr").remove();
         });
        
         $('#dynamic_form').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                    url:'{{ route("dynamic-field.insert") }}',
                    method:'post',
                    data:$(this).serialize(),
                    dataType:'json',
                    beforeSend:function(){
                        $('#save').attr('disabled','disabled');
                    },
                    success:function(data)
                    {
                        if(data.error)
                        {
                            var error_html = '';
                            for(var count = 0; count < data.error.length; count++)
                            {
                                error_html += '<p>'+data.error[count]+'</p>';
                            }
                            $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                        }
                        else
                        {
                            dynamic_field(1);
                            $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                        }
                        $('#save').attr('disabled', false);
                    }
                })
         });
        
        });
        </script>
    </body>
</html>


