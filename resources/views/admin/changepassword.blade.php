@extends('layouts.app')

@section('content')

        <title>الوطنية - تغيير كلمة المرور</title>

        <div class="container">
            <h1 class="text-center mt-3">{{trans('main.change_password')}}</h1>
            <hr>
        
        
            <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="panel panel-default">
                        <div class="panel-body">
                                <form method="POST" action="{{ route('updatePasswordAdmin') }}" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="{{trans('main.password')}}" name="old_password" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="{{trans('main.new_password')}}" name="new_password" type="password">
                                </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="{{trans('main.save')}}">
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>

    @endsection