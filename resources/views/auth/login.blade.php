@extends('layouts.app')

@section('content')




  
                    
<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img id="image_reg" src="/images/Logo-Transparent-Background.png" alt=""/>

            <h5>{{trans('main.welcome')}}</h5>
            <h5> {{trans('main.welcome2')}}</h5>
            
            <br/>

            
        </div>
        
        <div class="col-md-9 register-right">
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h4 class="register-heading"> {{trans('main.Login')}}</h4>
                    
                       

                    <form method="POST" action="{{ route('login') }}">
                            @csrf
                    <div class="row register-form">

                                <div class="row" id="field">
                                                                    
                                        <div class="col-lg-12">
                           
                                <i class="fa fa-envelope-open" aria-hidden="true" id="icon"></i>
                                <input type="email" class=" form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="{{trans('main.email')}} " />
                            </div>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                        <div class="col-lg-12">

                                        <i class="fa fa-lock" id="icon"></i>

                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" required  placeholder="{{trans('main.password')}}" value="" />

                                    </div>
                                    
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        

                        </div>


                        <button type="submit" class="btnlogin">
                            {{trans('main.Login')}}
                            </button>
                        

                    </div>

                
                
                    </form>
                   </div>
                </div>
                
            </div>
        </div>
    </div>








                 

                        
                               
                          

                  

                       

                       

                               
@endsection
