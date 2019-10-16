@extends('layouts.app')

@section('content')
@include('layouts.errmsg')

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img id="image_reg" src="/images/Logo-Transparent-Background.png" alt=""/>

            <h2>{{trans('main.welcome')}}</h2>
            <h5>{{trans('main.welcome2')}}</h5>
            <a href="/login" > 
            <input type="submit" name=""  value="{{trans('main.Login')}} "/>
            </a>
            <br/>

            
        </div>
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h1 class="register-heading">{{trans('main.sigup')}}</h1>
                    <form method="POST" action="{{ route('register') }}" >

                        @csrf
    
                    <div class="row register-form">
                            <div class="col-lg-12 ">


                                        <i class="fa fa-user" aria-hidden="true" id="icon" ></i>
                             <input id="typesPrompt" name="full_name" type="text"  class="form-control" placeholder="{{trans('main.name')}}" id="typesPrompt" >
                             <span id="typePrompt">{{trans('main.please_name')}}</span>
    
                            </div>
                              


                            <div class="col-lg-12 ">

                             
                            
                                    <i class="fa fa-envelope-open" aria-hidden="true" id="icon"></i>
                                <input id="typesPrompt"  name="email" type="text" class="form-control" placeholder="{{trans('main.email')}}" value="" />
                                <span id="typePrompt">{{trans('main.please_email')}}</span>

                            </div>                            
                            

                           

                           

                            <div class="col-lg-12 ">

                        


                                        <i class="fa fa-phone" aria-hidden="true" id="icon"></i>
                                    <input  id="typesPrompt" type="text" minlength="10" maxlength="10" name="phone" class="form-control" placeholder="{{trans('main.phone')}}" value="" />
                                    <span id="typePrompt">{{trans('main.please_phone')}}</span>
    
                            </div>
                            
                            
                            <div class="col-lg-12 ">
                             <i class="fa fa-lock" id="icon"></i>
                                            <input id="typesPrompt" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="{{trans('main.password')}}" required>
                                            <span id="typePrompt">
                                                    {{trans('main.please_password')}}
                                                </span>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                            </div>
                            <div class="col-lg-12 ">

                                            <i class="fa fa-lock" id="icon" ></i>
                                            <input id="typesPrompt" type="password" class="form-control" name="password_confirmation" placeholder="{{trans('main.return_password')}}" required>
                                  
                                            <span id="typePrompt"> {{trans('main.please_return_password')}}</span>
                            </div>
                            <div class="col-lg-12 ">

                                            <input type="submit" id="btnRegister" class="btnRegister"  value="{{trans('main.sigup')}}" />


                    </div>

                </div>   
                    </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>


    

@endsection
