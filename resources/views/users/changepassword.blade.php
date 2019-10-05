
@extends('layouts.app')

@section('content')
@include('sweetalert::alert')




        <title>الوطنية - معلومات الحساب</title>
        <div class="container">
            <h1 class="text-center mt-3">معلومات الحساب</h1>
            <hr>
           
            <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="POST" action="{{ route('updatePassword') }}" enctype="multipart/form-data">

                                @csrf 
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="كلمة المرور الحالية" name="old_password" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="كلمة المرور الجديدة" name="new_password" type="password">
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