@extends('layouts.app')

@section('content')




  
                    
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img id="image_reg" src="images/Logo-Transparent-Background.png" alt=""/>

            <h5>أهلا وسهلا</h5>
            <p> شركة الوطنية للتخليص الجمركي</p>
            
            <br/>

            
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h4 class="register-heading">تسجيل دخول</h4>
                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                    <div class="row register-form">
                        
                            <button type="submit" class="btnlogin">
                                    {{ __('تسجيل دخول') }}
                                </button>

                                <div class="form-inline">
                                        <div class="col-md-6">

                                        <i class="fa fa-lock" id="icon"></i>

                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required  placeholder="الرقم السري" value="" />
                                    </div>
                                    
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        
                                
                        <div class="col-md-6">
                           
                                        <i class="fa fa-envelope-open" aria-hidden="true" id="icon"></i>
                                        <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="إيميل " />
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                        </div>
                        
                           

                    </div>


                    </form>
                   </div>
                </div>
                
            </div>
        </div>
    </div>








                 

                        
                               
                          

                  

                       

                       

                               
@endsection
