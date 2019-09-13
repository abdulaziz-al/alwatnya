@extends('layouts.app')

@section('content')
 
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="images/Logo-Transparent-Background.png" alt=""/>

            <h3>أهلا وسهلا</h3>
            <p> شركة الوطنية للتخليص الجمركي</p>
            <a href="/login" > 
            <input type="submit" name=""  value="تسجيل دخول"/>
            </a>
            <br/>

            
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">سجل</h3>
                    <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                    <div class="row register-form">
                        <div class="col-md-6">
                        
                             
                            <div class="form-group">
                                <input id="email"  name="email" type="text" class="form-control" placeholder="إيميل " value="" />
                            </div>
                            <div class="form-group">
                                <input  id="phone" type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="رقم جوال*" value="" />
                            </div>


                            <div class="form-group">
                                <input  id="cr_image" type="text" name="cr_image">
                            </div>
                            


                        </div>
                        <div class="col-md-6">
                           


                            <div class="form-group">
                                <input id="first_name" name="first_name" type="text" class="form-control" placeholder="الإسم الأول" value="" />
                            </div>
                            <div class="form-group">
                                <input id="last_name" name="last_name" type="text" class="form-control" placeholder="إسم العائلة" value="" />
                            </div>
                            
                        
    
                                <div class="form-group row ">            


                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="الرقم السري " required>
            
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>
            
                                    <div class="form-group row ">
            
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="تأكيد الرقم السري  " required>
                                    </div>
    

                            

                        </div>
                      
                        <button type="submit" class="btnRegister"  value="إنشاء حساب">
                        </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


    

@endsection
