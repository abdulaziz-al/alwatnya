@extends('layouts.app')

@section('content')
        <title>الوطنية - إدارة السجلات التجارية</title>



        <div class="container">
            <h1 class="text-center mt-3"> {{trans('main.manegment_cr')}}</h1>
       
       
       <div class="row text-center mb-3">
                <div class="col-12 text-center">
                    <a><button class="btn btn-info text-right ml-auto mr-auto" data-toggle="modal" data-target="#viewAddModal">{{trans('main.Commercial_record')}}<i class="fas fa-plus-circle"></i></button></a>
                </div>
            </div>
            <table class="table borderless text-center">
                @foreach ($crUser as $crUsers)
                    
                
                <tr>
                <td>{{$crUsers->cr_number}}</td>
                    <th>{{trans('main.number_Commercial_record')}}</th>
                </tr>
                <tr>
                <td>{{$crUsers->cr_expiry}}</td>
                    <th>{{trans('main.exp_cr')}}</th>
                </tr>
                
                <tr>
                    <td>
                        <button class="btn btn-danger">{{trans('main.delete')}}</button>
                    <a href="crs/edit{{$crUsers->id}}"><button class="btn btn-primary">{{trans('main.edit')}}</button></a>
                    </td>
                </tr>
              
                @endforeach
            </table>
    </div>
    {{-- modal body for status viewing button --}}
      <!-- Modal -->
    <div class="modal fade" id="viewAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content container">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{trans('main.Commercial_record')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card text-center">
                        <div class="card-header">
                        
                    </div>
    
    
        <div class="card-body">
                <form method="POST" action="{{ route('CreateCR') }}" enctype="multipart/form-data">
    
                        @csrf
    <div class="form-group row">
                                    
        <i class="fa fa-address-card" aria-hidden="true" id="icon"></i>
    <input id="cr_number" name="cr_number" type="text" class="form-control"  placeholder="{{trans('main.number_Commercial_record')}}"/>
    </div>
    
    
    <div class="form-group row ">            
    
    <i class="fa fa-arrow-circle-down" aria-hidden="true" ></i>
    {!! Form::file('cr_image') !!}
    
        @if ($errors->has('cr_image'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cr_image') }}</strong>
            </span>
        @endif
    
    </div>
    
    <div class="form-group row">
    <input id="cr_exp" name="cr_exp" type="date" class="form-control" placeholder="{{trans('main.exp_cr')}}" value="" />
    </div>
    <input type="submit" class="btnRegister"  value="{{trans('main.Commercial_record')}}" />
    
                </form>
    </div>
    </div>
            </div>
        </div>
        </div>

 
        
 @endsection