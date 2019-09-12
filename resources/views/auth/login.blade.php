@extends('layouts.app')

@section('content')


    <!-- 
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
                                    <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                                                            
                                            <fieldset>
                                    <div class="form-group">
                                        <input  placeholder="إسم المستخدم" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                    <div class="form-group">
                                        <input  placeholder="كلمة المرور" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    </div>
                                   
                                <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                                                <label class="form-check-label" for="remember">
                                                    {{ __('تذكرني') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-lg btn-primary btn-block">
                                                    {{ __('تسجيل دخول') }}
                                                </button>
                                            </div>
                                    </div>
                                   </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


  
    -->
    
                    
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="images/plane-travel-icon-rebound2.gif" alt=""/>

            <h5>أهلا وسهلا</h5>
            <p> شركة الوطنية للتخليص الجمركي</p>
            
            <br/>

            
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h4 class="register-heading">تسجيل دخول</h4>
                    <div class="row register-form">
                        <div class="col-md-6">
                           
                            <div class="form-group">
                                <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="إيميل " />
                            </div>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                            <div class="form-group">
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  placeholder="الرقم السري" value="" />
                            </div>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                        </div>
                        
                           


                            

                        </div>
                        <button type="submit" class="btnRegister">
                            {{ __('تسجيل دخول') }}
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>








                 

                        
                               
                          

                  

                       

                       

                               
@endsection
