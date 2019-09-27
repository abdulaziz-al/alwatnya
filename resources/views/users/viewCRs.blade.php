@extends('layouts.app')

@section('content')
        <title>الوطنية - إدارة السجلات التجارية</title>



        <div class="container">
            <h1 class="text-center mt-3">إدارة السجلات التجارية</h1>
       
       
       <div class="row text-center mb-3">
                <div class="col-12 text-center">
                    <a><button class="btn btn-info text-right ml-auto mr-auto" data-toggle="modal" data-target="#viewAddModal">إضافة سجل تجاري جديد <i class="fas fa-plus-circle"></i></button></a>
                </div>
            </div>
            <table class="table borderless text-center">
                @foreach ($crUser as $crUsers)
                    
                
                <tr>
                <td>{{$crUsers->cr_number}}</td>
                    <th>رقم السجل</th>
                </tr>
                <tr>
                <td>{{$crUsers->cr_expiry}}</td>
                    <th>تاريخ السجل</th>
                </tr>
                
                <tr>
                    <td>
                        <button class="btn btn-danger">حذف</button>
                        <a href="crs/edit"><button class="btn btn-primary">تعديل</button></a>
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
                    <h5 class="modal-title" id="exampleModalLabel">إضافة سجل تجاري</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card text-center">
                        <div class="card-header">
                        <h3>أضف سجلك التجاري </h3>
                    </div>
    
    
        <div class="card-body">
                <form method="POST" action="{{ route('CreateCR') }}" enctype="multipart/form-data">
    
                        @csrf
    <div class="form-group row">
                                    
        <i class="fa fa-address-card" aria-hidden="true" id="icon"></i>
    <input id="cr_number" name="cr_number" type="text" class="form-control"  placeholder="رقم السجل التجاري "/>
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
    <input id="cr_exp" name="cr_exp" type="date" class="form-control" placeholder="تاريخ انتهاء السجل التجاري  " value="" />
    </div>
    <input type="submit" class="btnRegister"  value="إضافة السجل" />
    
                </form>
    </div>
    </div>
            </div>
        </div>
        </div>

 
        
 @endsection