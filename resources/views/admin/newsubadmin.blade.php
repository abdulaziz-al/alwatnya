@extends('layouts.app')

@section('content')
    <title>الوطنية - إضافة مشرف</title>
    <div class="container">
        <h1 class="text-center mt-3">{{trans('main.sitting')}}</h1>
        <h3 class="text-center mt-3">{{trans('main.new_member')}}</h3>
        <hr>
        {{-- breadcrumb --}}
        <nav aria-label="breadcrumb" dir="rtl">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i> {{trans('main.home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/admin/settings"> <i class="fas fa-cog"></i> {{trans('main.sitting')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/admin/settings/subadmins"> <i class="fas fa-unlock-alt"></i> {{trans('main.new_member')}}</a></li>
            </ol>
        </nav>
        <form  method="POST" action="{{ route('createUser') }}" enctype="multipart/form-data">
            @csrf

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

            <div class="row mb-3">
                <div class="col text-right">
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
                <div class="col-12 text-center">
                    <input type="submit" class="btn btn-primary" value="{{trans('main.create')}}">
                </div>
            </div>
        </form>
        <br><br>
    </div>
     

    <script>
$(function() {
  $('#viewcompletedorders').on('change', function() {
    $('.child').prop('checked', this.checked);
  });
  $('.child').on('change', function() {
    $('#viewcompletedorders').prop('checked', $('.child:checked').length===$('.child').length);
  });
});

        </script>
    @endsection