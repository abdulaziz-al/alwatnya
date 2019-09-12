@extends('layouts.app')

@section('content')

        <title>الوطنية - استعلام عن طلب</title>

       

        <div class="container flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md mt-4 h1 text-center">
                    
                </div>
                <div class="row">
                    <div class="col-md-4 ml-auto mr-auto">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">استعلام عن طلب مسجل</h3>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="رقم الطلب" name="text" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="كلمة المرور" name="password" type="password" value="">
                                    </div>
                                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="استعلام">
                                </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        @endsection