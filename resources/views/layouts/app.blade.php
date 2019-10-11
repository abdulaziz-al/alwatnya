<!doctype html>
<html >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>  
            @yield('title')  {{trans('main.title')}}
          
          </title>

          <link  rel="icon"  href="{!!asset('/images/Logo-Transparent-Background.png')!!}" />
      

        <!-- Fonts -->

        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/bootstrap-datetimepicker.css" rel="stylesheet" />
    

  
        <script src="https://kit.fontawesome.com/6606739ea1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

     {{--   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
--}}


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
        @include('sweetalert::alert')

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            
                <a class="navbar-brand" href="{{ url('/') }}">
            <img  src="/images/Logo-white-Transparent-Background.png" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ ('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
         
           
               
                     <!-- -->
                     
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{trans('main.lang')}} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
    
                        
            @foreach (LaravelLocalization::getSupportedLocales() as $key => $value)
    
              <a class="dropdown-item" href="{{LaravelLocalization::getLocalizedUrl($key)}}">
                 {{$value['native']}} 
                </a>
    
             @endforeach   
            </div>
                </li>
                


                    <li class="nav-item">
                        <a class="nav-link" href="/contact-us">{{trans('main.contactUs')}}</a>
                    </li>
                 

                     <li class="nav-item">
                        <a class="nav-link" href="/">{{trans('main.home')}}</a>
                    </li>
    
                            @guest
           
              <li class="nav-item">
                           <a class="nav-link" href="/login">{{trans('main.Login')}}  <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">{{trans('main.sigup')}}</a>
                    </li>
                        @else
                        @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2 )
                        <li class="nav-item">
                                <a class="nav-link" href="/admin">لوحة التحكم</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   الإعدادات   <span class="caret"></span>
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item" href="/admin/settings/subadmins/new"> عضو جديد <i class="fas fa-plus-circle"></i></a>

                                    <a class="dropdown-item" href="/admin/settings/subadmins" >
                                        إدارة المشرفين
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->full_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/admin/settings"> 
                                    الملف الشخصي
                                </a>  

                                        <a class="dropdown-item" href="/admin/settings/password"> 
                                            تغير كلمة المرور 
                                        </a>   
                                       
                                    
                         
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            

                            @endif
                    @if (Auth::user()->role_id == 3 )



                    
                    <li class="nav-item">
                            <a class="nav-link" href="/user">لوحة التحكم</a>
                        </li>

                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                الوصل السريع  <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                @yield('select')

                                        <a class="dropdown-item" href="/user/neworders">
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
                        

                      
                    
                   
                      <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->full_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/user/settings/info"> 
                                    الملف الشخصي
                                </a>  

                                        <a class="dropdown-item" href="/user/settings/password"> 
                                            تغير كلمة المرور 
                                        </a>   

                                


                                <a class="dropdown-item" href="/user/createCR"> 
                                   إضافة سجل التجاري
                                 
                                
                                    </a>   
                                    <a class="dropdown-item" href="/user/settings/crs">
                                        تعديل السجل التجاري
                                    </a>
                                    
                         
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endif


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
        
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/momentjs.js"></script>
    <script src="js/moment-with-locales.js"></script>
    <script src="js/moment-hijri.js"></script>
    <script src="js/bootstrap-hijri-datetimepicker.js"></script>
    <script type="text/javascript">


        $(function () {

            initHijrDatePicker();

            //initHijrDatePickerDefault();

        });

        function initHijrDatePicker() {

            $("#hijri-date-input").hijriDatePicker({
                locale: "ar-sa",

                format:"هـ iYYYY-iMM-iDD " + "DD-MM-YYYY م" ,
                hijriFormat:"هـ iYYYY-iMM-iDD " + "DD-MM-YYYY م" ,

                dayViewHeaderFormat: "MMMM YYYY",
                hijriDayViewHeaderFormat: "iMMMM iYYYY",
                showSwitcher: true,

                allowInputToggle: true,
                showTodayButton: false,
                useCurrent: true,
                isRTL: false,
                keepOpen: false,
                hijri: true,
                debug: true,
                showClear: true,
                showTodayButton: true,
                showClose: true

            });

        }

        function initHijrDatePickerDefault() {

            $("#hijri-date-input").hijriDatePicker();
        }


    </script>

    </body>
</html>


