@extends('layouts.app')



@section('content')
@include('layouts.errmsg')


<div class="container">   
    
    
        


        <form  method="POST" action="{{ route('createOrder') }}" enctype="multipart/form-data" >
                @csrf

                <div class="col-sm-6  table-bordered table-striped" id="cardss" style="margin-left: 25%">

                    <div class="form-group"  >
                        
                        <h4 style="text-align: center">فاتورة البضاعة </h4>
                            <input type="text" class="form-control {{ $errors->has('invoice_number') ? ' is-invalid' : '' }}" name="invoice_number" value="{{ old('invoice_number') }}" required autofocus placeholder="   رقم الفاتورة" />
                        </div>
                        @if ($errors->has('invoice_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('invoice_number') }}</strong>
                        </span>
                    @endif
    
                    <input type="date" class="form-control {{ $errors->has('expirydate_invoice') ? ' is-invalid' : '' }}" name="expirydate" value="{{ old('expirydate_invoice') }}" required autofocus placeholder="تاريخ الإنتهاء" />
                @if ($errors->has('expirydate_invoice'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('expirydate_invoice') }}</strong>
                </span>
            @endif
    
            <input type="file" class="{{ $errors->has('invoice_file') ? ' is-invalid' : '' }}" name="invoice_file" value="{{ old('invoice_file') }}"  required/>
        @if ($errors->has('invoice_file'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('invoice_file') }}</strong>
        </span>
    @endif
    
            </div>

        <div class="row">
               

    

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">شهادة بلد المنشأ </h4>
                        <input type="text" class="form-control {{ $errors->has('coo_number') ? ' is-invalid' : '' }}" name="coo_number" value="{{ old('coo_number') }}"  autofocus placeholder="   تاريخ الشهادة" />
                    </div>
                    @if ($errors->has('coo_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('coo_number') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('expirydate_coo') ? ' is-invalid' : '' }}" name="expirydate_coo" value="{{ old('expirydate_coo') }}"  autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('expirydate_coo'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate_coo') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('coo_file') ? ' is-invalid' : '' }}" name="cr_file" value="{{ old('coo_file') }}"  />
    @if ($errors->has('coo_file'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('coo_file') }}</strong>
    </span>
@endif

        </div>


        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">السجل التجاري </h4>
                        <input type="text" class="form-control {{ $errors->has('cr_number') ? ' is-invalid' : '' }}" name="cr_number" value=" {{Auth::user()->cr_number}}"  autofocus placeholder="   "  />
                    </div>
                    @if ($errors->has('number_'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('number_') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('cr_expirydate') ? ' is-invalid' : '' }}" name="cr_expirydate" value=" {{Auth::user()->cr_exp}}"  autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('cr_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cr_expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('cr_file') ? ' is-invalid' : '' }}" name="cr_file" value=" {{Auth::user()->cr_image}}"  />
    @if ($errors->has('cr_file'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('cr_file') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">بيان المقاصة </h4>
                        <input type="text" class="form-control {{ $errors->has('ms_number') ? ' is-invalid' : '' }}" name="ms_number" value="{{ old('ms_number') }}"  autofocus placeholder=" رقم البيان  " />
                    </div>
                    @if ($errors->has('ms_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('ms_number') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('ms_expirydate') ? ' is-invalid' : '' }}" name="ms_expirydate" value="{{ old('ms_expirydate') }}"  autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('ms_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('ms_expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('ms_file') ? ' is-invalid' : '' }}" name="ms_file" value="{{ old('ms_file') }}"  />
    @if ($errors->has('ms_file'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('ms_file') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">قائمة التعبئة </h4>
                        <input type="text" class="form-control {{ $errors->has('packing_list_number') ? ' is-invalid' : '' }}" name="packing_list_number" value="{{ old('packing_list_number') }}"  autofocus placeholder="  رقم القائمة " />
                    </div>
                    @if ($errors->has('packing_list_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('packing_list_number') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('pl_expirydate') ? ' is-invalid' : '' }}" name="pl_expirydate" value="{{ old('pl_expirydate') }}"  autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('pl_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('pl_expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('pl_file') ? ' is-invalid' : '' }}" name="pl_file" value="{{ old('pl_file') }}"  />
    @if ($errors->has('pl_file'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('pl_file') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">خطاب الفسح </h4>
                        <input type="text" class="form-control {{ $errors->has('release_letter_number') ? ' is-invalid' : '' }}" name="release_letter_number" value="{{ old('release_letter_number') }}"  autofocus placeholder="  رقم فسح " />
                    </div>
                    @if ($errors->has('release_letter_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('release_letter_number') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('rl_expirydate') ? ' is-invalid' : '' }}" name="rl_expirydate" value="{{ old('rl_expirydate') }}"  autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('rl_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('rl_expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('rl_file') ? ' is-invalid' : '' }}" name="rl_file" value="{{ old('rl_file') }}"  />
    @if ($errors->has('rl_file'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('rl_file') }}</strong>
    </span>
@endif

        </div>

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">شهادة المطابقة للمنتجات المصدرة للمملكة</h4>
                        <input type="text" class="form-control {{ $errors->has('saso_number') ? ' is-invalid' : '' }}" name="saso_number" value="{{ old('saso_number') }}"  autofocus placeholder="  رقم الشهادة " />
                    </div>
                    @if ($errors->has('saso_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('saso_number') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('saso_expirydate') ? ' is-invalid' : '' }}" name="saso_expirydate" value="{{ old('saso_expirydate') }}"  autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('saso_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('saso_expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('saso_file') ? ' is-invalid' : '' }}" name="saso_file" value="{{ old('saso_file') }}"  />
    @if ($errors->has('saso_file'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('saso_file') }}</strong>
    </span>
@endif

        </div>

       

        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h4 style="text-align: center">البوليصة</h4>
                        <input type="text" class="form-control {{ $errors->has('policy_number') ? ' is-invalid' : '' }}" name="policy_number" value="{{ old('policy_number') }}"  autofocus placeholder="  رقم البوليصة " />
                    </div>
                    @if ($errors->has('policy_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('policy_number') }}</strong>
                    </span>
                @endif

                <input type="date" class="form-control {{ $errors->has('policy_expirydate') ? ' is-invalid' : '' }}" name="policy_expirydate" value="{{ old('policy_expirydate') }}"  autofocus placeholder="تاريخ الإنتهاء" />
            @if ($errors->has('policy_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('policy_expirydate') }}</strong>
            </span>
        @endif

        <input type="file" class="{{ $errors->has('policy_file') ? ' is-invalid' : '' }}" name="policy_file" value="{{ old('policy_file') }}"  />
    @if ($errors->has('policy_file'))
    <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('policy_file') }}</strong>
    </span>
@endif

        </div>


        <div class="col-sm-6  table-bordered table-striped" id="cardss" >

            <div class="form-group"  >
                
                <h4 style="text-align: center">خطاب إعفاء </h4>
                    <input type="text" class="form-control {{ $errors->has('el_number') ? ' is-invalid' : '' }}" name="el_number" value="{{ old('el_number') }}"  autofocus placeholder="  تاريخ الخطاب " />
                </div>
                @if ($errors->has('el_number'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('el_number') }}</strong>
                </span>
            @endif

            <input type="date" class="form-control {{ $errors->has('el_expirydate') ? ' is-invalid' : '' }}" name="el_expirydate" value="{{ old('el_expirydate') }}"  autofocus placeholder="تاريخ الإنتهاء" />
        @if ($errors->has('el_expirydate'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('el_expirydate') }}</strong>
        </span>
    @endif

    <input type="file" class="{{ $errors->has('el_file') ? ' is-invalid' : '' }}" name="el_file" value="{{ old('el_file') }}"  />
@if ($errors->has('el_file'))
<span class="invalid-feedback" role="alert">
    <strong>{{ $errors->first('el_file') }}</strong>
</span>
@endif

    </div>

        <div class="col-xs-6 col-md-6 col-lg-6  table-bordered table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    {{-- إستمارة ملكية الشاحنات --}}
                    <h4 style="text-align: center">إستمارة ملكية الشاحنات </h4>

                    <input type="text" class="form-control {{ $errors->has('Truck_ownership') ? ' is-invalid' : '' }}" name="Truck_ownership" value="{{ old('Truck_ownership') }}" required autofocus placeholder="إسم الشركة " />
                    @if ($errors->has('Truck_ownership'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('Truck_ownership') }}</strong>
                    </span>
                @endif


                    <input type="text" class="form-control {{ $errors->has('driver_name') ? ' is-invalid' : '' }}" name="driver_name" value="{{ old('driver_name') }}" required autofocus placeholder="  إسم السائق  " />
                    @if ($errors->has('driver_name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('driver_name') }}</strong>
                    </span>
                @endif

                 

                        <input type="text" class="form-control {{ $errors->has('truck_ownership_number1') ? ' is-invalid' : '' }}" name="truck_ownership_number1" value="{{ old('truck_ownership_number1') }}" required  autofocus placeholder="  رقم الهاتف الإماراتي " />
                    </div>
                    @if ($errors->has('truck_ownership_number1'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('truck_ownership_number1') }}</strong>
                    </span>
                @endif

                <input type="text" class="form-control {{ $errors->has('truck_ownership_number2') ? ' is-invalid' : '' }}" name="truck_ownership_number2" value="{{ old('truck_ownership_number2') }}" required autofocus placeholder="  رقم الهاتف السعودي " />
            @if ($errors->has('truck_ownership_number2'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('truck_ownership_number2') }}</strong>
            </span>
        @endif

                <input type="text" class="form-control {{ $errors->has('truck_of_number') ? ' is-invalid' : '' }}" name="truck_of_number" value="{{ old('truck_of_number') }}" required autofocus placeholder="  عدد الشاحنات  " />
            @if ($errors->has('truck_of_number'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('truck_of_number') }}</strong>
            </span>
        @endif

        
    </div>

               <div class="col-xs-6 col-md-6 col-lg-6  table-bordered table-striped" id="cardss" >


    <div class=" amber-textarea active-amber-textarea-2">
            <i class="fas fa-pencil-alt prefix"></i>
            <textarea id="comment_order" name="comment_order" class="md-textarea form-control" rows="5"></textarea>
            <div  id="comment_div"> <h4> أترك ملاحظة </h4>
             </div>
          </div>

        
              </div>
          

  


        </div>


        <br/>
       
  <div class="table-responsive">
              
                           
                        
                <span id="result"></span>
                
                


                <table class="table table-bordered table-striped" id="user_table">
              <thead>
               <tr>
                    <th width="20%">+ </th>
                    <th width="20%">الملف</th>
                    <th width="20%">تاريخ الإنتهاء </th>
                    <th width="20%">الرقم</th>

                   <th width="20%">أخرى</th>
                   
                 
                   
               </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
               <tr>
                               <td colspan="5" align="right"></td>
                             
               </tr>
              </tfoot>
          </table>


      <!--Textarea with icon prefix-->
      

          <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
        </form>
    
  </div>

<script> 

$(document).ready(function(){

var count = 1;

dynamic_field(count);

function dynamic_field(number)
{
 html = '<tr>';
        if(number > 1)
       {
           html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td>';
           html += '<td><input type="file" name="Other_file[]" /></td>';     

       html += '<td><input type="date" name="Other_exp[]" class="form-control" placeholder="تاريخ الإنتهاء" /></td>';
         html += '<td><input type="text"  name="Other_number[]" class="form-control" placeholder="الرقم" / ></td>';

       html += '<td><input type="text"  name="Other_name[]" class="form-control"  placeholder="الاسم"  /></td></tr>';

           $('tbody').append(html);
       }
       else
       {   
           html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>';
           html += '<td><input type="file" name="Other_file[]" /></td>';     

       html += '<td><input type="date" name="Other_exp[]" class="form-control" placeholder="تاريخ الإنتهاء" /></td>';
         html += '<td><input type="text"  name="Other_number[]" class="form-control" placeholder="الرقم" / ></td>';

       html += '<td><input type="text"  name="Other_name[]" class="form-control"  placeholder="الاسم"  /></td></tr>';

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