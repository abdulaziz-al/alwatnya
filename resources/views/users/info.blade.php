@extends('layouts.app')

@section('content')
       
        <title>الوطنية - معلومات الحساب</title>

       


            <div class="jumbotron rounded-lg text-center">
                <table class="table borderless text-center">
                    <tr>
                    <td>{{Auth::user()->full_name}}</td>
                        <th>{{trans('main.name')}}                        </th>
                    </tr>
                    <tr>
                    <td>{{Auth::user()->email}}</td>
                        <th> {{trans('main.email')}} </th>
                    </tr>
                    <tr>
                        <td>{{Auth::user()->phone}}</td>
                        <th>{{trans('main.phone')}} </th>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="info/edit"><button class="btn btn-primary">{{trans('main.edit')}} <i class="fas fa-pencil-alt"></i></button></a></td>
                    </tr>
                </table>
            </div>
        </div>
        
        
        @endsection