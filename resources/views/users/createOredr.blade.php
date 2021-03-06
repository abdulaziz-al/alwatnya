@extends('layouts.app')



@section('content')
@include('layouts.errmsg')
@include('sweetalert::alert')



<div class="container">   
    

        <form  method="POST" action="{{ route('createOrder') }}" enctype="multipart/form-data"  >
                @csrf
                <div class="form-group">
                    <div class="   table-striped" id="newcard" style="width: 65%" >
                   
                                    <h4 style="text-align: right">                                
    
                                    <input type="text" name="cr_number"  value="{{$userCR->cr_number}}" readonly="true" hidden  />
                                        {{trans('main.export_or_import')}} </h4>
                                        <div class="radio-toolbar">
                                            <input type="radio" id="radioA" name="radioF" value="0" checked>
                                            <label for="radioA">{{trans('main.import')}}</label>
                                        
                                            <input type="radio" id="radioB" name="radioF" value="1">
                                            <label for="radioB">{{trans('main.export')}}</label>
                                        
                                        </div>
                                    </div>

                    </div>

            <div class="form-group">
                <div class="   table-striped" id="newcard" style="width: 65%" >
               
                                <h4 style="text-align: right">                                

                                    {{trans('main.invoice')}}  </h4>
                                    

                                


                        <div id="cardform" >
                            
                    <input type="text" id="typesPrompt" class="form-control {{ $errors->has('invoice_number') ? ' is-invalid' : '' }}" name="invoice_number" value="{{ old('invoice_number') }}" required autofocus placeholder="{{trans('main.number_invoice')}}" />
                    <span id="typePrompt">يرجى إدخال رقم الفاتورة </span>

                        @if ($errors->has('invoice_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('invoice_number') }}</strong>
                        </span>
                    @endif
    
            
                            
                                <div class="input-group date">
                                    <input type='text'   id="hijri-date-input1" name="expirydate_invoice" class="form-control"  placeholder="{{trans('main.exp')}}" />
                                   
                                </div>
                            

                @if ($errors->has('expirydate_invoice'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('expirydate_invoice') }}</strong>
                </span>
            @endif
            
           
            <br>
          
            {!! Form::file('invoice_file',['required']) !!}
            

 
  

</div>

                        </div>
        </div>

               

        <div class="table-striped" id="cardss" >

                <div class="form-group">
                    
                    <h3>
                        <label class="cont">
              <input  type="checkbox" id="myCheck1" onclick="myFunction()">
              <span class="checkmark"></span>
            </label>

            {{trans('main.Country_of_origin_certificate')}} </h3>
                                <div id="cardform1" style="display: none" >

                        
                        <input type="text" class="form-control {{ $errors->has('coo_number') ? ' is-invalid' : '' }}" name="coo_number" id="typesPrompt" value="{{ old('coo_number') }}"  autofocus placeholder="{{trans('main.number_of_certificate')}}" />
                        <span id="typePrompt">يرجى إدخال رقم الشهادة لهذا الطلب</span>

                    @if ($errors->has('coo_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('coo_number') }}</strong>
                    </span>
                @endif
            
                <div class="form-group">
                    <div class="input-group date">
                        <input type='text' id="hijri-date-input2" name="expirydate_coo" class="form-control"  placeholder="{{trans('main.exp')}}" />
                       
                    </div>
                </div>

  
            @if ($errors->has('expirydate_coo'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('expirydate_coo') }}</strong>
            </span>
        @endif
<br>
      
<div class="fas fa-arrow-alt-circle-up">
    {!! Form::file('coo_file') !!}
</div>
</div>

        </div>
        </div>


        <div class="table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h3>
                        <label class="cont">

                    <input type="checkbox" id="myCheck2" onclick="myFunction()" >
                    <span class="checkmark"></span>
                </label>
    
                {{trans('main.Clearing_statement')}}
                    
                    </h3>
                            <div id="cardform2" style="display: none">

                        <input type="text" class="form-control {{ $errors->has('ms_number') ? ' is-invalid' : '' }}" name="ms_number" id="typesPrompt" value="{{ old('ms_number') }}"  autofocus placeholder="{{trans('main.number_of_statement')}}" />
                        <span id="typePrompt">الرجاء إدخال رقم المرجع والموجودعلى بيان المقاصة</span>

                    @if ($errors->has('ms_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('ms_number') }}</strong>
                    </span>
                @endif
        
                            
                <div class="input-group date">
                    <input type='text'   id="hijri-date-input4" name="ms_expirydate" class="form-control"  placeholder="{{trans('main.exp')}}" />
                   
                </div>

            @if ($errors->has('ms_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('ms_expirydate') }}</strong>
            </span>
        @endif
<br>
      
<div class="fas fa-arrow-alt-circle-up">
    {!! Form::file('ms_file') !!}
</div>      

                            </div>
        </div>
    </div>



        <div class="table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h3>
                        <label class="cont">

                <input type="checkbox" id="myCheck3" onclick="myFunction()">
                <span class="checkmark"></span>
            </label>
            {{trans('main.number_of_statement')}}
                         </h3>
                                <div id="cardform3" style="display: none">
                        <input type="text" class="form-control {{ $errors->has('packing_list_number') ? ' is-invalid' : '' }}" name="packing_list_number" id="typesPrompt" value="{{ old('packing_list_number') }}"  autofocus placeholder="{{trans('main.packing_list')}}" />
                        <span id="typePrompt">الرجاء إدخال الرقم المرجعي لقائمة التعبئة </span>

    
                    @if ($errors->has('packing_list_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('packing_list_number') }}</strong>
                    </span>
                @endif
               
                <div class="input-group date">
                    <input type='text'   id="hijri-date-input5" name="pl_expirydate" class="form-control"  placeholder="{{trans('main.exp')}} " />
                   
                </div>

            @if ($errors->has('pl_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('pl_expirydate') }}</strong>
            </span>
        @endif

        <br>
      
        <div class="fas fa-arrow-alt-circle-up">
            {!! Form::file('pl_file') !!}
        </div>      
    </div>
</div>
        </div>

        <div class=" table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h3>
                        <label class="cont">

                            <input type="checkbox" id="myCheck4" onclick="myFunction()">
                            <span class="checkmark"></span>
                        </label>
                        {{trans('main.Glade_speech')}}             
                     </h3>

                                <div id="cardform4" style="display: none">

                        <input type="text" id="typesPrompt" class="form-control {{ $errors->has('release_letter_number') ? ' is-invalid' : '' }}" name="release_letter_number" value="{{ old('release_letter_number') }}"  autofocus placeholder="{{trans('main.number_of_speach')}} " />
                        <span id="typePrompt">يرجى إدخال رقم الفسح </span>

                    @if ($errors->has('release_letter_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('release_letter_number') }}</strong>
                    </span>
                @endif

                <div class="input-group date">
                    <input type='text'   id="hijri-date-input6" name="rl_expirydate" class="form-control"  placeholder="{{trans('main.exp')}} " />
                   
                </div>

            @if ($errors->has('rl_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('rl_expirydate') }}</strong>
            </span>
        @endif

        <br>
      
        <div class="fas fa-arrow-alt-circle-up">
            {!! Form::file('rl_file') !!}
        </div> 
</div>
</div>
        </div>

        <div class="table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h3 >
                        <label class="cont">


             <input type="checkbox" id="myCheck5" onclick="myFunction()">
             <span class="checkmark"></span>
            </label>
            {{trans('main.Certificate_of_Conformity')}}
                          </h3>
                        
                                <div id="cardform5" style="display: none">
                        <input type="text" id="typesPrompt" class="form-control {{ $errors->has('saso_number') ? ' is-invalid' : '' }}" name="saso_number" value="{{ old('saso_number') }}"  autofocus placeholder=" {{trans('main.number_of_Certificate')}}  " />
                        <span id="typePrompt">يرجى إدخال رقم الشهادة </span>

                    @if ($errors->has('saso_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('saso_number') }}</strong>
                    </span>
                @endif

                <div class="input-group date">
                    <input type='text'   id="hijri-date-input7" name="saso_expirydate" class="form-control"  placeholder="{{trans('main.exp')}}" />
                   
                </div>

            @if ($errors->has('saso_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('saso_expirydate') }}</strong>
            </span>
        @endif
        <br>
      
        <div class="fas fa-arrow-alt-circle-up">
            {!! Form::file('saso_file') !!}
        </div> 

        </div>

    </div>


</div>

       

        <div class=" table-striped" id="cardss" >

                <div class="form-group"  >
                    
                    <h3>
                        <label class="cont">

                <input  type="checkbox" id="myCheck6" onclick="myFunction()">
                <span class="checkmark"></span>
            </label>

            {{trans('main.The_policy')}}
        </h3>
    
                                <div id="cardform6" style="display: none">

                        <input type="text" id="typesPrompt" class="form-control {{ $errors->has('policy_number') ? ' is-invalid' : '' }}" name="policy_number" value="{{ old('policy_number') }}"  autofocus placeholder="{{trans('main.number_of_policy')}}" />
                        <span id="typePrompt">يرجى إدخال رقم البوليصة </span>

                    @if ($errors->has('policy_number'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('policy_number') }}</strong>
                    </span>
                @endif

                <div class="input-group date">
                    <input type='text'   id="hijri-date-input8" name="policy_expirydate" class="form-control"  placeholder="{{trans('main.exp')}} " />
                   
                </div>
            @if ($errors->has('policy_expirydate'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('policy_expirydate') }}</strong>
            </span>
        @endif

        <br>
      
        <div class="fas fa-arrow-alt-circle-up">
            {!! Form::file('policy_file') !!}
        </div> 
                                </div>
                        </div>
                </div>


        <div class="table-striped" id="cardss" >

            <div class="form-group"  >
                
                <h3>
                    <label class="cont">

                        <input  type="checkbox" id="myCheck7" onclick="myFunction()">
                        <span class="checkmark"></span>
                    </label>
        
                    {{trans('main.Letter_of_exemption')}}

                 </h3>
                 
                        <div id="cardform7" style="display: none">
                    <input type="text" class="form-control {{ $errors->has('el_number') ? ' is-invalid' : '' }}" name="el_number" id="typesPrompt" value="{{ old('el_number') }}"  autofocus placeholder=" {{trans('main.number_of_Letter')}}" />
                    <span id="typePrompt">الرجاء إدخال الرقم المرجعي لخطاب الإعفاء</span>

                @if ($errors->has('el_number'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('el_number') }}</strong>
                </span>
            @endif

            <div class="input-group date">
                <input type='text'   id="hijri-date-input9" name="el_expirydate" class="form-control"  placeholder="{{trans('main.exp')}}" />
               
            </div>

        @if ($errors->has('el_expirydate'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('el_expirydate') }}</strong>
        </span>
    @endif
    <br>
      
    <div class="fas fa-arrow-alt-circle-up">
        {!! Form::file('el_file') !!}
    </div>
</div>
</div>
    </div>

    <div div class="table-striped" id="cardss" >
    <div class="field_wrapper" >
            <h3>{{trans('main.Vehicle_Information')}} </h3>
            <input type="text" name="Truck_ownership[]" class="form-control" placeholder="{{trans('main.number_of_car')}}" required/>
            <div>
                <input type="text" class="form-control" name="driver_name[]" placeholder="{{trans('main.name_of_driver')}}" required/>
                <input type="text" class="form-control" name="truck_ownership_number1[]" placeholder="{{trans('main.International_telephone_number')}}" required/>
                <input type="text" class="form-control" name="truck_ownership_number2[]" placeholder="{{trans('main.Local_phone_number')}}" required/>
                <input type="file"  name="tos_file[]"  required/>

            </div>

        </div>

        <a class="add_button" title="Add field">{{trans('main.add_driver')}}</a>
    </div>
               <div class="col-xs-12 col-md-6 col-lg-12  table-bordered table-striped" style="width: 100%" >


    <div class=" amber-textarea active-amber-textarea-2">
            <i class="fas fa-pencil-alt prefix"></i>
            <textarea id="comment_order" name="comment_order" class="md-textarea form-control" rows="5" required></textarea>
            <div  id="comment_div"> <h4>{{trans('main.note')}}  </h4>
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
                    <th width="20%">{{trans('main.file')}}</th>
                    <th width="20%">{{trans('main.exp')}}</th>
                    <th width="20%">{{trans('main.number')}}</th>

                   <th width="20%">{{trans('main.other')}}</th>
                   
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
  </div>
      <!--Textarea with icon prefix-->
      

          <input type="submit"  name="save" id="save" class="btn btn-primary" value="Save" />
          
        </form>
    
  </div>

  <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('.add_button'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div > <br/><input type="text" name="Truck_ownership[]" class="form-control" placeholder="رقم السيارة  " required><input type="text" class="form-control" name="driver_name[]" placeholder="أسم السائق"/><input type="text" class="form-control" name="truck_ownership_number1[]" placeholder="الرقم الهاتف الدولي"/><input type="text" class="form-control" name="truck_ownership_number2[]" placeholder="الرقم الهاتف المحلي"/><input type="file"  name="tos_file[]"  required/><input style="width: 20%" class="btn btn-danger remove_button" value="حذف" /> </div>'; //New input field html 
        var x = 1; //Initial field counter is 1
        
        //Once add button is clicked
        $(addButton).click(function(){
            //Check maximum number of input fields
            if(x < maxField){ 
                x++; //Increment field counter
                $(wrapper).append(fieldHTML); //Add field html
            }
        });
        
        //Once remove button is clicked
        $(wrapper).on('click', '.remove_button', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            x--; //Decrement field counter
        });
    });
    </script>



     

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
        
               html += '<td><input type="date" name="Other_exp[]" class="form-control" placeholder="" /></td>';
                 html += '<td><input type="text"  name="Other_number[]" class="form-control" placeholder="" / ></td>';
        
               html += '<td><input type="text"  name="Other_name[]" class="form-control"  placeholder=""  /></td></tr>';
        
                   $('tbody').append(html);
               }
               else
               {   
                   html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td>';
                   html += '<td><input type="file" name="Other_file[]" /></td>';     
        
               html += '<td><input type="date" name="Other_exp[]" class="form-control" placeholder="" /></td>';
                 html += '<td><input type="text"  name="Other_number[]" class="form-control" placeholder="" / ></td>';
        
               html += '<td><input type="text"  name="Other_name[]" class="form-control"  placeholder=""  /></td></tr>';
        
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
        
      
        
        });
        </script>



<script type="text/javascript">



function myFunction() {
    // Get the checkbox

    var checkBox1 = document.getElementById("myCheck1");
    
    var checkBox2 = document.getElementById("myCheck2");
    
    var checkBox3 = document.getElementById("myCheck3");
    var checkBox4 = document.getElementById("myCheck4");
    var checkBox5 = document.getElementById("myCheck5");
    var checkBox6 = document.getElementById("myCheck6");
    var checkBox7 = document.getElementById("myCheck7");

    // Get the output text

    var text1 = document.getElementById("cardform1");

    var text2 = document.getElementById("cardform2");

    var text3 = document.getElementById("cardform3");

    var text4 = document.getElementById("cardform4");

    var text5 = document.getElementById("cardform5");
      
     
    var text6 = document.getElementById("cardform6");
 
 
    var text7 = document.getElementById("cardform7");
    // If the checkbox is checked, display the output text

    if (checkBox1.checked == true){
        text1.style.display = "block";
    } 
    

    
     else if (checkBox1.checked != true) {
        text1.style.display = "none";

    }
    if (checkBox2.checked == true){
        text2.style.display = "block";
    } 
    

    
     else if (checkBox2.checked != true) {
        text2.style.display = "none";

    }
    if (checkBox3.checked == true){
        text3.style.display = "block";
    } 
    

    
    else if (checkBox3.checked != true) {
        text3.style.display = "none";

    }
    
    if (checkBox4.checked == true){
        text4.style.display = "block";
    } 
    

    
     else if (checkBox4.checked != true) {
        text4.style.display = "none";

    }
    if (checkBox5.checked == true){
        text5.style.display = "block";
    } 
    

    
    else if (checkBox5.checked != true) {
        text5.style.display = "none";

    }
    
    if (checkBox6.checked == true){
        text6.style.display = "block";
    } 
    

    
     else if (checkBox6.checked != true) {
        text6.style.display = "none";

    }
    
    if (checkBox7.checked == true){
        text7.style.display = "block";
    } 
    

    
     else if (checkBox7.checked != true) {
        text7.style.display = "none";

    }


  } 
</script>







@endsection