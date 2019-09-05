@extends('layouts.app')
@section('content')
    
        <div class="container flex-center position-ref full-height">
                <div class="content">
                        <div class="title m-b-md h1 text-center mt-5">
        
        
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title text-center">إنشاء حساب</h3>
                                        </div>
                                        <div class="panel-body">
                                            <form accept-charset="UTF-8" role="form" method="POST" action="{{ route('register') }}">
                                            <fieldset>
                                            
                                                            @csrf
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="إسم المستخدم" name="name" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="الإيميل" name="email" type="text" value="">
                                                </div>
                                                <div class="form-group">
                                                    <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">
                                                </div>
                                                
                                                <div class="form-group">
                                                        <input class="form-control" placeholder="إعادة كلمة المرور" name="password2" type="password" value="">
                                                    </div>
                                                
                                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="تسجيل">
                                            </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
        
                        </div>
                    </div>
            <div class="content">
                <div class="title m-b-md h1 text-center mt-3">
                    تسجيل طلب
                </div>
                <div class="title m-b-md h3 text-right mt-3">
                    :الخطوات
                </div>

                <div class="list-group">
                    <!-- step 1 -->
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