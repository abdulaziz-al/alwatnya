@extends('layouts.app')
@section('content')


<div class="container">    
        <form  method="POST" action="{{ route('createOrder') }}"  >
                @csrf
        <div class="row">
               

    <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>


        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

        <div class="col-xs-6 col-md-6 col-lg-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">فاتورة البضاعة </h4>
                        <input type="text" class="form-control {{ $errors->has('number_') ? ' is-invalid' : '' }}" name="number_" value="{{ old('number_') }}" required autofocus placeholder="   " />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate') }}" required autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('file_') ? ' is-invalid' : '' }}" name="file_" value="{{ old('file_') }}"  />
    @if ($errors->has('file_'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('file_') }}</strong>
    </span>
@endif

        </div>

    </div>

        

        <br/>
       
  <div class="table-responsive">
              
                           
                        
                <span id="result"></span>
                
                


                <table class="table table-bordered table-striped" id="user_table">
              <thead>
               <tr>
                   <th width="20%">Other Name</th>
                   <th width="20%">Other  Number</th>
                   <th width="20%">Other Exp </th>
                   <th width="20%">Other File</th>
                   <th width="20%">+ </th>
                   
               </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
               <tr>
                               <td colspan="2" align="right"></td>
                             
               </tr>
              </tfoot>
          </table>
          <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />

               </form>
  </div>
 </div>

<script> 

$(document).ready(function(){

var count = 1;

dynamic_field(count);

function dynamic_field(number)
{
 html = '<tr>';
       html += '<td><input type="text"  name="Other_name[]" class="form-control"  placeholder="Name of......"  /></td>';
       html += '<td><input type="text"  name="Other_number[]" class="form-control" placeholder="Number of......" / ></td>';
       html += '<td><input type="text" name="Other_exp[]" class="form-control" placeholder="Exp date" /></td>';
       html += '<td><input type="file" name="Other_file[]" /></td>';
       if(number > 1)
       {
           html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
           $('tbody').append(html);
       }
       else
       {   
           html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
           $('tbody').html(html);
       }
}

$(document).on('click', '#add', function(){
 count++;
 dynamic_field(count);
});

$(document).on('click', '.remove', function(){
 count--;
 $(this).closest("tr").remove();
});

$('#dynamic_form').on('submit', function(event){
       event.preventDefault();
       $.ajax({
           url: '/CreateOrder',
           method:'post',
           data:$(this).serialize(),
           dataType:'json',
           beforeSend:function(){
               $('#save').attr('disabled','disabled');
           },
           success:function(data)
           {
               if(data.error)
               {
                   var error_html = '';
                   for(var count = 0; count < data.error.length; count++)
                   {
                       error_html += '<p>'+data.error[count]+'</p>';
                   }
                   $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
               }
               else
               {
                   dynamic_field(1);
                   $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
               }
               $('#save').attr('disabled', false);
           }
       })
});

});
</script>















@endsection