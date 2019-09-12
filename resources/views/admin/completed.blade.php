@extends('layouts.app')

@section('content')


        <title>الوطنية - الطلبات المنفذة</title>

        <div class="container">
            <h1 class="text-center mt-3">طلبات تم تنفيذها</h1>
            <hr>
            <table class="table table-striped  text-center">
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-check text-success"></i>
                                <span class="badge badge-pill badge-primary">منفذ</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1094 طلب تخليص جمركي رقم</h5>
                                <small>منذ: 10/10/2018</small>
                                </div>
                                <p class="mb-1">@kamal1199 - +966554433221</p>
                                <small>تاريخ التنفيذ: 14/10/2018</small>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-check text-success"></i>
                                <span class="badge badge-pill badge-primary">منفذ</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1095 طلب تخليص جمركي رقم</h5>
                                <small>منذ: 12/10/2018</small>
                            </div>
                                <p class="mb-1">@hussam9911 - +966554354321</p>
                                <small>تاريخ التنفيذ: 16/10/2018</small>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-check text-success"></i>
                                <span class="badge badge-pill badge-primary">منفذ</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1096 طلب تخليص جمركي رقم</h5>
                                <small>منذ: 22/10/2018</small>
                                </div>
                                <p class="mb-1">@ahmad91 - +96655000999</p>
                                <small>تاريخ التنفيذ: 23/10/2018</small>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="list-group">
                            <a href="vieworder" class="list-group-item list-group-item-action">
                                <i class="fas fa-check text-success"></i>
                                <span class="badge badge-pill badge-primary">منفذ</span>
                                <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 ml-auto mr-auto">#CDC-1097 طلب تخليص جمركي رقم</h5>
                                <small>منذ: 27/10/2018</small>
                                </div>
                                <p class="mb-1">@ali91 - +96655999000</p>
                                <small>تاريخ التنفيذ: 1/11/2018</small>
                            </a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        @endsection