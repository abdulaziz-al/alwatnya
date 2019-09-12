@extends('layouts.app')

@section('content')

        <title>الوطنية - إدارة حالات الطلب</title>
    
    <div class="container">
        <h1 class="text-center mt-3">الإعدادات</h1>
        <h3 class="text-center mt-3">إدارة حالات الطلب</h3>
        <hr>
        {{-- breadcrumb --}}
        <nav aria-label="breadcrumb" dir="rtl">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i> الرئيسية</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="/admin/settings"> <i class="fas fa-cog"></i> الإعدادات</a></li>
            </ol>
        </nav>
        <div class="text-right mb-3">
            <a><button class="btn btn-info text-right" data-toggle="modal" data-target="#exampleModal">حالة جديدة <i class="fas fa-plus-circle"></i></button></a>
        </div>
        <table class="table borderless table-striped text-center rounded-lg">
            <thead>
                <tr>
                    <th>&nbsp;</th>
                    <th>الحالة</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        {{-- <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>     --}}
                        <a><button class="btn btn-info" data-toggle="modal" data-target="#viewStatusModal"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>تحت المعالجة</td>
                </tr>
                <tr>
                    <td>
                        {{-- <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>     --}}
                        <a><button class="btn btn-info" data-toggle="modal" data-target="#viewStatusModal"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>مكتمل</td>
                </tr>
                <tr>
                    <td>
                        {{-- <a><button class="btn btn-danger del-btn"><i class="fas fa-trash"></i></button></a>     --}}
                        <a><button class="btn btn-info" data-toggle="modal" data-target="#viewStatusModal"><i class="fas fa-pencil-alt"></i></button></a>
                    </td>
                    <td>معاد</td>
                </tr>
            </tbody>
        </table>
    </div>
    {{-- modal body for status adding button --}}
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">إضافة حالة جديدة</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row mt-3 mb-3 text-center">
                        <div class="col-12"><input type="text" dir="rtl" name="statusname" id='statusname' placeholder="إسم الحالة الجديدة">
                            <label for="statusname">إسم الحالة</label>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3 text-center">
                        <div class="col-12 text-center">
                            <input type="submit" name="submit" class="btn btn-info" value="إضافة حالة">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    {{-- modal body for status viewing button --}}
      <!-- Modal -->
      <div class="modal fade" id="viewStatusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">تعديل حالة طلب</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row mt-3 mb-3 text-center">
                        <div class="col-12"><input type="text" dir="rtl" name="statusname" id='statusname' placeholder="تحت المعالجة" value="تحت المعالجة">
                            <label for="statusname">إسم الحالة</label>
                        </div>
                    </div>
                    <div class="row mt-3 mb-3 text-center">
                        <div class="col-12 text-center">
                            <input type="submit" name="submit" class="btn btn-info" value="حفظ التغيير">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    
      @endsection