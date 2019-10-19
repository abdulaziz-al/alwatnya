@extends('layouts.app')

@section('content')

        <title>الوطنية - إضافة عضو جديد</title>
        <div class="container">
            <h1 class="text-center mt-3">إضافة عضو جديد</h1>
            <hr>
            {{-- breadcrumb --}}
            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i> الرئيسية</a></li>
                </ol>
            </nav>
        
            <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form  method="POST" action="{{ route('createUser') }}" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                <div class="form-group text-right">
                                    <label for="username">{{trans('main.name')}}</label>
                                    <input class="form-control" id='full_name' placeholder="username" name="full_name" type="text">
                                </div>
                                <div class="form-group text-right">
                                    <label for="email">{{trans('main.email')}}</label>
                                    <input class="form-control" id='email' placeholder="email@example.com" name="email" type="email">
                                </div>
                                <div class="form-group text-right">
                                    <label for="password">{{trans('main.password')}}</label>
                                    <input class="form-control" id='password' placeholder="********" name="password" type="password">
                                </div>
                                <div class="form-group text-right">
                                    <label for="phone">{{trans('main.phone')}}</label>
                                    <input class="form-control" id='phone' placeholder="+966543210987" name="phone" type="phone">
                                </div>
                                <input class="btn btn-lg btn-primary btn-block" type="submit" value="{{trans('main.Add_new_member')}}">
                            </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@endsection