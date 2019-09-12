@extends('layouts.app')

@section('content')

        <title>الوطنية - بحث</title>


        <div class="container flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md mt-4 h1 text-center">
                    
                </div>
                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">بحث</h3>
                                <ul class="text-right" dir="rtl">
                                    <li>إسم المستخدم</li>
                                    <li>رقم الطلب</li>
                                    <li>تصدير أو استيراد</li>
                                    <li>رقم الجوال</li>
                                    <li>إسم السائق</li>
                                    <li>رقم السائق</li>
                                    <li>رقم السجل التجاري</li>
                                    <li>* للكل</li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="بحث" name="text" type="text">
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="إبحث">
                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection