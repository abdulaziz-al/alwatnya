@extends('layouts.app')


@section('content')


<div class="container">


        <table class="table borderless table-striped text-center">
                    <tr>
                    <th colspan="6">  السجلات التجارية </th>
                    </tr>
                    <tr>
                        <td>اسم العميل  </td>
                        <td>رقم السجل</td>
                        <td>ملف السجل </td>
                        <th></th>
                        <th></th>

                    </tr>

                    @foreach ($user as $users)  
                    @foreach ($file as $files) 
                    @foreach ($cr as $crs)
                        @if ($users->id == $crs->user_id && $files->id == $crs->file_id )
                        <tr>

                        <td>{{$users->full_name}}</td>
                        <td>{{$crs->cr_number}}</td>
                        <td colspan="2"><a href="/files/{{$users->full_name}}/{{$crs->cr_number}}/{{$files->file_location}}" download="{{$files->file_location}}">
             
                            {{$files->file_location}}
                    </a><i class="far fa-file text-primary"></i></td>

                    
                <form method="POST" action="{{route('activeCr', $crs->cr_number)}}" enctype="multipart/form-data">
                    @csrf


                                <td><input type="submit" class="btn btn-success"  value="قبول" /> </td>
                    </form>



                <form method="POST" action="{{route('DiableCr')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="cr_number"  value="{{$crs->cr_number}}" readonly="true" hidden  />


                <td><input type="submit" class="btn btn-danger"   value="رفض" /></td>
                    </form>
                            </tr>
                        @endif
                    @endforeach
                    @endforeach
                    @endforeach
             





    </table>


</div>
    
@endsection