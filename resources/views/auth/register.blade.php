@extends('layouts.app')

@section('content')
@include('layouts.errmsg')

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img id="image_reg" src="images/Logo-Transparent-Background.png" alt=""/>

            <h4>أهلا وسهلا</h4>
            <p> شركة الوطنية للتخليص الجمركي</p>
            <a href="/login" > 
            <input type="submit" name=""  value="تسجيل دخول"/>
            </a>
            <br/>

            
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h1 class="register-heading">سجل</h1>
                    <form method="POST" action="{{ route('register') }}" >

                        @csrf
    
                    <div class="row register-form">
                            <div class="col-lg-12">


                                        <i class="fa fa-user" aria-hidden="true" id="icon" ></i>
                             <input id="typesPrompt" name="full_name" type="text"  class="form-control" placeholder="الإسم الكامل" id="typesPrompt" >
                             <span id="typePrompt">يرجى إدخال إسم المستخدم الكامل</span>
    
                            
                              



                             
                            
                                    <i class="fa fa-envelope-open" aria-hidden="true" id="icon"></i>
                                <input id="typesPrompt"  name="email" type="text" class="form-control" placeholder="إيميل " value="" />
                                <span id="typePrompt">يرجى إدخال الإيميل</span>

                            
                            

                           

                           


                        


                                        <i class="fa fa-phone" aria-hidden="true" id="icon"></i>
                                    <input  id="typesPrompt" type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="رقم جوال*" value="" />
                                    <span id="typePrompt">يرجى إدخال الجوال</span>
    
    
                            
                            
                        
    

                                        <i class="fa fa-lock" id="icon"></i>
                                            <input id="typesPrompt" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="الرقم السري " required>
                                            <span id="typePrompt">يرجى ادخال كلمة مرور مكونة من حروف وارقام </span>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
            
                                            <i class="fa fa-lock" id="icon" ></i>
                                            <input id="typesPrompt" type="password" class="form-control" name="password_confirmation" placeholder="تأكيد الرقم السري  " required>
                                  
                                            <span id="typePrompt">يرجى إعادة أدخال كلمة المرور </span>

                    </div>
                    <input type="submit" id="btnRegister" class="btnRegister"  value="إنشاء حساب" />

                </div>   
                    </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>


    

@endsection
