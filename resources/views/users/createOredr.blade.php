@extends('layouts.app')
@section('content')

<div class="container">    
    
  <div class="table-responsive">
               <form method="post" id="dynamic_form">
                <span id="result"></span>
                <table class="table table-bordered table-striped" id="user_table">
              <thead>
               <tr>
                   <th width="35%">First Name</th>
                   <th width="35%">Last Name</th>
                   <th width="30%">Action</th>
               </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
               <tr>
                               <td></td>
                               <td>
                 @csrf
                 <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                </td>
               </tr>
              </tfoot>
          </table>
               </form>
  </div>
 </div>




















@endsection