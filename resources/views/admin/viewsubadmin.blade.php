@extends('layouts.app')

@section('content')
    <title>الوطنية - عرض مشرف</title>
    
    <div class="container">
        <h1 class="text-center mt-3">{{trans('main.sitting')}}</h1>
        <h3 class="text-center mt-3"> {{trans('main.Modify_admin_data')}}</h3>
        <hr>
      
        <form>
            <div class="row mb-3">
                <div class="col text-right">
                    <label for="username">{{trans('main.name')}}</label>
                <input type="text" id='username' class="form-control" placeholder="{{$sub->full_name}}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col text-right">
                    <label for="password">{{trans('main.password')}}</label>
                    <input type="text" id='password' class="form-control" placeholder="********">
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col text-center">
                <label for=""> {{trans('main.privileges')}}</label>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-center">
                <label for="stats">{{trans('main.Register_a_new_client')}} </label>
                <input type="checkbox" class="child" name="Create_user" id="stats">
            </div>
            <div class="col-6 text-center">
                <label for="manageadmins">{{trans('main.Approve_commercial_records_manage_and_activate_customers')}}</label>
                <input type="checkbox" class="child" name="active_cr" id="manageadmins">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-center">
                <label for="passwordchange">{{trans('main.Manage_and_return_request_cases')}}</label>
                <input type="checkbox" class="child" name="edit_order" id="passwordchange">
            </div>
            <div class="col-6 text-center">
                <label for="viewneworders">{{trans('main.View_orders_on_the_system_for_365_days')}}</label>
                <input type="checkbox" class="child" name="view_year" id="viewneworders">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-center">
                <label for="viewcompletedorders">{{trans('main.select_all')}}</label>
                <input type="checkbox"  name="all" id="viewcompletedorders">
            </div>
            
        </div>
        <hr>
            <div class="row mb-3">
                <div class="col text-center">
                    <label for="">فعالية الحساب</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-6 text-center">
                    <label for="inactive">معطّل</label>
                    <input type="radio" name="activity" id="inactive">
                </div>
                <div class="col-6 text-center">
                    <label for="active">فعّال</label>
                    <input type="radio" name="activity" id="active" checked>
                </div>
            </div>
            <hr>
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary" value="حفظ التغيير">
                </div>
            </div>
        </form>
        <br><br>
    </div>

    @endsection 