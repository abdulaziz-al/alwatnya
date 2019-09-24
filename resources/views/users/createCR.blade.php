@extends('layouts.app')

@section('content')
@include('layouts.errmsg')

@if (Session::has('danger'))
<div class="alert alert-danger">{{Session::get('danger')}}</div>
@endif


<div class="container" style="width: 60%"> 
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
<input id="cr_image" type="file" {{ $errors->has('cr_image') ? ' is-invalid' : '' }} name="cr_image"     />
     
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
@endsection