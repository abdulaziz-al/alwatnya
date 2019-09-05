@extends('layouts.app')
@section('content')
    

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
                                <form accept-charset="UTF-8" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="إسم المستخدم" name="email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me"> <span class="h5">تذكرني</span>
                                        </label>
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="دخول">
                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

        @endsection
