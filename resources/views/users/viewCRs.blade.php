@extends('layouts.app')

@section('content')
        <title>الوطنية - إدارة السجلات التجارية</title>



        <div class="container">
            <h1 class="text-center mt-3">إدارة السجلات التجارية</h1>
            <hr>
            {{-- breadcrumb --}}
            <nav aria-label="breadcrumb" dir="rtl">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/user"><i class="fas fa-home"></i> الرئيسية</a></li>
                    <li class="breadcrumb-item"><a href="/user/settings"><i class="fas fa-cog"></i> الإعدادات</a></li>
                </ol>
            </nav>
            <div class="row text-center mb-3">
                <div class="col-12 text-center">
                    <a><button class="btn btn-info text-right ml-auto mr-auto" data-toggle="modal" data-target="#viewAddModal">إضافة سجل تجاري جديد <i class="fas fa-plus-circle"></i></button></a>
                </div>
            </div>
            <table class="table borderless text-center">
                <tr>
                    <td>1</td>
                    <th>#</th>
                </tr>
                <tr>
                    <td>123456789abcde</td>
                    <th>رقم السجل</th>
                </tr>
                <tr>
                    <td>11/12/2019</td>
                    <th>تاريخ السجل</th>
                </tr>
                <tr>
                    <td><img src="https://pbs.twimg.com/profile_images/434117280/CR_Logo_400x400.jpg" alt=""></td>
                    <th>صورة من السجل</th>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-danger">حذف</button>
                        <a href="crs/edit"><button class="btn btn-primary">تعديل</button></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <th>#</th>
                </tr>
                <tr>
                    <td>a12b32web42</td>
                    <th>رقم السجل</th>
                </tr>
                <tr>
                    <td>5/6/2017</td>
                    <th>تاريخ السجل</th>
                </tr>
                <tr>
                    <td><img src="https://pbs.twimg.com/profile_images/434117280/CR_Logo_400x400.jpg" alt=""></td>
                    <th>صورة من السجل</th>
                </tr>
                <td>
                    <button class="btn btn-danger">حذف</button>
                    <a href="crs/edit"><button class="btn btn-primary">تعديل</button></a>
                </td>
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
                <div class="modal-body">
                    <form action="">
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-6"><input type="text" dir="rtl" name="crnumber" id='crnumber' placeholder="رقم السجل" class="form-control"></div>
                            <div class="col-6"><label for="statusname">:رقم السجل التجاري</label></div>
                        </div>
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-6"><input type="text" id="datepicker"></div>
                            <div class="col-6"><label for="statusname">:تاريخ السجل التجاري</label></div>
                        </div>
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-12"><label for="statusname">:صورة السجل التجاري</label></div>
                        </div>
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-12 custom-file">
                                <input type="file" dir="rtl" class="custom-file-input" id="customFile" name="crpic" placeholder="صورة السجل">
                                <label class="custom-file-label" for="customFile" data-browse="عرض">إختر ملف</label>
                            </div>
                        </div>
                        <div class="row mt-3 mb-3 text-center">
                            <div class="col-12 text-center">
                                <input type="submit" name="submit" class="btn btn-info" value="إضافة">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

 
        
 @endsection