@extends('layouts.app')

@section('content')
@include('sweetalert::alert')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
               


                <img id="image_home" src="/images/Logo-Transparent-Background.png" alt="" >
        <div id="pragraph_hoome">
                <p> <h4 >   
                        {{trans('main.paragraph_title')}}
  
                    
                </h4> 
                {{trans('main.paragraph')}}
   
                </p>

        </div>
        </div>
        </div>
    </div>
</div>
@endsection
