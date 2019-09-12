@extends('layouts.app')

@section('content')
        <title>الوطنية - تغيير كلمة المرور</title>

        <div class="container">
            <h1 class="text-center mt-3">تغيير كلمة المرور</h1>
            <hr>
            {{-- breadcrumb --}}
            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/admin/settings"> <i class="fas fa-cog"></i> الإعدادات</a></li>
                </ol>
            </nav>
        
            <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="كلمة المرور الحالية" name="password1" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="كلمة المرور الجديدة" name="password2" type="password">
                                </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="حفظ التغيير">
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>

    @endsection