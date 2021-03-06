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

        <link href="/css/bootstrap.css" rel="stylesheet" />
        <link href="/css/bootstrap-datetimepicker.css" rel="stylesheet" />
    

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/6606739ea1.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


        <script src="/js/jquery-3.3.1.js"></script>
        <script src="/js/bootstrap.js"></script>
        <script src="/js/momentjs.js"></script>
        <script src="/js/moment-with-locales.js"></script>
        <script src="/js/moment-hijri.js"></script>
        <script src="/js/bootstrap-hijri-datetimepicker.js"></script>
     {{--   <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
--}}


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @if (App::getLocale() == 'en')
                   <style>
                  u,h3,th, p,input.form-control{
                text-align: left;
                direction: ltr;
                
                   }
                   u{
                       margin-left: 80%;
                   }
                   
                   </style>
                   @else
                   <style>
                      u,h3, th, p,input.form-control{
                     text-align: right;
                     direction: rtl;
                     
                        }
                        u{
                       margin-right: 80%;
                   }
                      
                      </style>
                   @endif
       
       
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
                            <i class="fa fa-language" aria-hidden="true"><span class="caret">{{trans('main.lang')}} </span></i>
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
                                
                                <a class="nav-link" href="/admin">{{trans('main.dashboard')}}
                                    
                                    @if ($seen->count() != null )
                                        
                                    <span class="badge badge-pill badge-danger">{{$seen->count()}}</span>
                                    @else
                                        @endif
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{trans('main.sitting')}}   <span class="caret"></span>
                                        </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                              
    
                                    @if(Auth::user()->role_id==1)
                                    <a class="dropdown-item" href="/admin/settings/subadmins/new">{{trans('main.new_member')}}<i class="fas fa-plus-circle"></i></a>
                                @else 

                                @endif
                                <a class="dropdown-item" href="/admin/viewCr">{{trans('main.Commercial_record')}}</a>

                                    <a class="dropdown-item" href="/admin/settings/subadmins" >
                                        {{trans('main.manage_supervisors')}}
                                    </a>
                                    <a class="dropdown-item" href="/admin/createuser" >
                                        {{trans('main.Add_new_user')}}
                                    </a>
                                    <a class="dropdown-item" href="/admin/search" >
                                        {{trans('main.search')}}
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
                                    {{trans('main.profile')}}
                                </a>  

                                        <a class="dropdown-item" href="/admin/settings/password"> 
                                            {{trans('main.change_password')}} 
                                        </a>   
                                       
                                    
                         
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                       {{trans('main.Logout')}} 
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            

                            @endif
                    @if (Auth::user()->role_id == 3 )



                    
                    <li class="nav-item">
                            <a class="nav-link" href="/user"> {{trans('main.dashboard')}}</a>
                        </li>

                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{trans('main.Quick')}}  <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                @yield('select')

                                        <a class="dropdown-item" href="/user/neworders">
                                            {{trans('main.Current_requests')}}
                                        </a>
                                                <a class="dropdown-item" href="#"
                                                   >
                                                   {{trans('main.Executed_requests')}}
                                                </a>
                                                        <a class="dropdown-item" href="#"
                                                         >
                                                         {{trans('main.Returned_requests')}}
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
                                    {{trans('main.profile')}}
                                </a>  

                                        <a class="dropdown-item" href="/user/settings/password"> 
                                            {{trans('main.change_password')}}
                                        </a>   

                                


                                <a class="dropdown-item" href="/user/createCR"> 
                                    {{trans('main.Commercial_record')}}
                                 
                                
                                    </a>   
                                    <a class="dropdown-item" href="/user/settings/crs">
                                        {{trans('main.edit_Commercial_record')}}
                                    </a>
                                    
                         
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{trans('main.Logout')}}
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

          
 
    <script type="text/javascript">


    
        $(function initHijrDatePicker() {
         
          for(var i=1; i<=24; i++){
            var el = document.getElementById("hijri-date-input" + i);

            $(el).hijriDatePicker({
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

        })


    </script>

    </body>
</html>


