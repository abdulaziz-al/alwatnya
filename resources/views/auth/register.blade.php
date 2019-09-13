@extends('layouts.app')

@section('content')
<!--
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
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


<<<<<<< HEAD
                                <div class="form-group">
                                    <input type="file" name="file">
                                </div>
                                
=======
                            <div class="form-group">
                                <input  id="cr_image" type="text" name="cr_image" placeholder="CR name">
                            </div>

                               <div class="form-group">
                                <input  id="cr_image" type="file" name="cr_image" placeholder="Upload CR">
                            </div>
                            
>>>>>>> e2b1105e7a176093a4e467c3d4fdd6bd47db2408


                            </div>
                            <div class="col-md-6">
                               


                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="الإسم الأول" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="إسم العائلة" value="" />
                                </div>
                                
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="الرقم السري" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  placeholder="تأكيد الرقم السري " value="" />
                                </div>


        
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                <input type="submit" class="btnRegister"  value="إنشاء حساب"/>
                                            
                        </div>

                    </div>
                    
                    
                </div>

            </div>

        </div>
    
    </div>

    

                    <span class="list-group-item mb-3 rounded-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3 ml-auto mr-auto">طلب تسجيل حساب عبر الوطنية</h5>
                            <small>الخطوة الأولى</small>
                        </div>
                        <p class="mb-3 text-center">الرجاء التواصل معنا والتقدم بالطلب عبر القنوات التالية  </p>
                        <p class="mb-1 ml-auto mr-auto text-center">
                            <i class="fab fa-whatsapp fa-2x text-success mb-3"></i>&nbsp;<span class="h3">+966135370501</span><br>
                            <i class="far fa-envelope fa-2x text-danger"></i>&nbsp;<span class="h3">admin@alwatanya.sa</span> 
                        </p>
                    </span>
                    <!-- step 2 -->
                    <span class="list-group-item mb-3 rounded-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3 ml-auto mr-auto">التأكد من هوية صاحب الطلب</h5>
                            <small>الخطوة الثانية</small>
                        </div>
                        <p class="mb-1 ml-auto mr-auto text-center">
                         يتم في هذه المرحلة التأكد من هوية صاحب الطلب وإنشاء حساب للمستخدم بعد ذلك يتم إرسال معلومات إسم المستخدم وكلمة المرور عبر أحد قنوات وسائل التواصل
                        </p>
                    </span>
                    <!-- step 3 -->
                    <span class="list-group-item mb-3 rounded-lg">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-3 ml-auto mr-auto">الدخول الى الملف الشخصي</h5>
                            <small>الخطوة الثالثة</small>
                        </div>
                        <p class="mb-1 ml-auto mr-auto text-center">
                            بعد الدخول الى الملف الشخصي بالإمكان رفع الطلبات والمستندات الخاصة لكل طلب ومتابعة سير المعاملة أول بأول
                        </p>
                    </span>


                </div> <!-- end of .list-group -->
            </div> <!-- end of .content -->
        </div> <!-- end of container -->
        

@endsection
