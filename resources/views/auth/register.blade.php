@extends('layouts.app')

@section('content')



                    
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="images/plane-travel-icon-rebound2.gif" alt=""/>
    
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
                        <div class="row register-form">
                            <div class="col-md-6">
                               
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="إيميل " value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="رقم جوال*" value="" />
                                </div>


                            <div class="form-group">
                                
                                    <i class="fa fa-address-card" aria-hidden="true" id="icon"></i>
                                <input id="cr_number" name="cr_number" type="text" class="form-control" placeholder="رقم السجل التجاري  " value="" />
                            </div>

                            <div class="form-group">
                                    <i class="fa fa-arrow-circle-down" aria-hidden="true" ></i>
                                <input  id="cr_image" type="file" name="cr_image" placeholder="Upload CR">
                            </div>
                            

                            <div class="form-group">
                                <input id="cr_exp" name="cr_exp" type="text" class="form-control" placeholder="تاريخ انتهاء السجل التجاري  " value="" />
                            </div>

                           


                            </div>
                            <div class="col-md-6">
                               


                            <div class="form-group">
                                    <i class="fa fa-user" aria-hidden="true" id="icon" ></i>
                         <input id="full_name" name="full_name" type="text"  class="form-control" placeholder="الإسم الكامل"  >
                        </div>
                          
                            
                            
                        
    
                                <div class="form-group row ">            

                                        <i class="fa fa-lock" id="icon"></i>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="الرقم السري " required>
                                            
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                    </div>
            
                                    <div class="form-group row ">
                                            <i class="fa fa-lock" id="icon" ></i>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="تأكيد الرقم السري  " required>
                                    </div>
    


        
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                <input type="submit" class="btnRegister"  value="إنشاء حساب"/>
                                            
                        </div>
                     
                        <input type="submit" class="btnRegister"  value="إنشاء حساب" />
                        </form>
                    </div>
                    
                    
                </div>

            </div>

        </div>
    
    </div>


    

@endsection
