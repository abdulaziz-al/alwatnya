@extends('layouts.app')

@section('content')
       
        <title>الوطنية - تعديل سجل تجاري</title>

        <div class="container">
            <h1 class="text-center mt-3"> {{trans('main.edit_Commercial_record')}}</h1>
            <hr>
            {{-- breadcrumb --}}
            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/user"><i class="fas fa-home"></i> {{trans('main.home')}}</a></li>
                    <li class="breadcrumb-item"><a href="/user/settings"><i class="fas fa-cog"></i> {{trans('main.sitting')}}</a></li>
                </ol>
            </nav>
            <table class="table borderless text-center mb-5">
                    @foreach ($crUser as $crUsers)
                <tr>
                    <td><input type="text" class="form-control" value="{{$crUsers->cr_number}}"></td>
                    <th>{{trans('main.number_Commercial_record')}}</th>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" id="datepicker" value="{{$crUsers->cr_expiry}}" /></td>
                    <th>{{trans('main.exp_cr')}}</th>

                  
                </tr>
               
                <tr>
                    <td>
                        <button class="btn btn-primary">{{trans('main.save')}}</button>
                    </td>
                </tr>   
                @endforeach
            </table>
    </div>


    
@endsection
       