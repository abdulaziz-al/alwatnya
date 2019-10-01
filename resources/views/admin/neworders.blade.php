@extends('layouts.app')

@section('content')
        <title>الوطنية - الطلبات الجديدة</title>



        <div class="container">
            <h1 class="text-center mt-3">طلبات بإنتظار التنفيذ</h1>
            <hr>
            <table class="table table-striped  text-center">
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-primary">جديد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1090 طلب تخليص جمركي رقم</h5>
                                <small>منذ يوم</small>
                                </div>
                                <p class="mb-1">@kamal1199 - +966554433221</p>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-primary">جديد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1091 طلب تخليص جمركي رقم</h5>
                                <small>منذ 3 أيام</small>
                            </div>
                                <p class="mb-1">@hussam9911 - +966554354321</p>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-primary">جديد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1092 طلب تخليص جمركي رقم</h5>
                                <small>منذ 4 أيام</small>
                                </div>
                                <p class="mb-1">@ahmad91 - +96655000999</p>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-fire text-danger"></i>
                                <span class="badge badge-pill badge-primary">جديد</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1093 طلب تخليص جمركي رقم</h5>
                                <small>منذ 4 أيام</small>
                                </div>
                                <p class="mb-1">@ali91 - +96655999000</p>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        


        @endsection