@extends('layouts.app')

@section('content')

        <title> #CDC-1090 الوطنية - عرض طلب</title>
        <div class="container">
            {{$order->count()}}
            @foreach ($order as $orders)
            @foreach ($invoice as $invoices)
            @foreach ($invoice_items as $invoice_item)
                @if ($invoices->id == $orders->invoice_id && $invoices->invoiceItems_id == $invoice_item->id )
                
                
            <h1 class="text-center mt-3"> {{substr($invoice_item->invoiceItems_description , 0,-3) }} عرض طلب</h1>
            <a  href="{{Storage::url($invoice_item->invoiceItems_description)}}" style= "height: 5cm"> fjkkjgz</a>


            <hr>
            <table class="table borderless table-striped text-center">
                <tr>
                    <td>{{substr($invoice_item->invoiceItems_description , 0,-3) }}<i class="far fa-file text-primary"></i></td>
                    <td>رقم الطلب</td>
                    @endif
                    @endforeach
                    @endforeach
                </tr>
                <tr>
                        @foreach ($user as $users)
                        @if ($users->id == $orders->user_id)
                    <td>{{$users->full_name}} <i class="far fa-user text-primary"></i></td>
                    <td>إسم المستخدم</td>
                </tr>
                <tr>
                    <td>{{$users->email}} <i class="far fa-envelope text-primary"></i></td>
                    <td>البريد الإلكتروني</td>
                </tr>
                <tr>
                    <td>+{{$users->phone}}  <i class="fas fa-mobile-alt text-primary"></i></td>
                    <td>رقم الجوال</td>
                    @endif
                    @endforeach

                </tr>
                <tr>
                    <td>Bilal Khan <i class="fas fa-truck-moving text-primary"></i></td>
                    <td>إسم السائق</td>
                </tr>
                <tr>
                    <td>+966532892778 <i class="fas fa-mobile-alt text-primary"></i></td>
                    <td>رقم جوال السائق</td>
                </tr>
                @if ($orders->importeport_id == 0)

                <tr>
                        
                    <td>Import <i class="fas fa-arrow-circle-down text-primary"></i></td>
                    <td>نوع الطلب</td>
                </tr>
                @else 
                <tr>
                    <td>Export <i class="fas fa-arrow-circle-up text-primary"></i></td>
                    <td>نوع الطلب</td>
                   
                </tr>
                @endif

                @endforeach

                <tr>
                    <td>
                        <select class="form-control" dir="rtl">
                            <option value="">قرار الطلب؟</option>
                            <option value="">قبول</option>
                            <option value="">إعادة</option>
                            <option value="">رفض</option>
                        </select> <i class="fas fa-gavel text-primary"></i></td>
                    <td>إجراء</td>
                </tr>
            </table>
            <hr>
            <h3 class="text-center text-primary">الملفات المرفقة</h3>

            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- CR --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">السجل التجاري</th>
                        </tr>
                        <tr>
                            <td>رقم السجل</td>
                            <td>تاريخ السجل</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">cr.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- Cirtificate of Origin --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">شهادة بلد المنشأ</th>
                        </tr>
                        <tr>
                            <td>رقم الشهادة</td>
                            <td>تاريخ الشهادة</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">coo.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- packing list --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">قائمة التعبئة</th>
                        </tr>
                        <tr>
                            <td>رقم القائمة</td>
                            <td>تاريخ القائمة</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">packing_list.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- Muqassah statement --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">بيان المقاصة</th>
                        </tr>
                        <tr>
                            <td>رقم البيان</td>
                            <td>تاريخ البيان</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">muqassah.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- SASO - شهادة المطابقة للمنتجات المصدرة للمملكة --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">شهادة المطابقة للمنتجات المصدرة للمملكة</th>
                        </tr>
                        <tr>
                            <td>رقم الشهادة</td>
                            <td>تاريخ الشهادة</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">saso.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- Release letter - خطاب الفسح --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">خطاب الفسح</th>
                        </tr>
                        <tr>
                            <td>رقم الفسح</td>
                            <td>تاريخ الفسح</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">release_letter.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- Policy - البوليصة --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">البوليصة</th>
                        </tr>
                        <tr>
                            <td>رقم البوليصة</td>
                            <td>تاريخ البوليصة</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">policy.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- invoice - فاتورة البضاعة --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">فاتورة البضاعة</th>
                        </tr>
                        <tr>
                            <td>رقم البضاعة</td>
                            <td>تاريخ البضاعة</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">invoice.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- exemption_letter - خطاب إعفاء من التفتيش --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">خطاب إعفاء من التفتيش</th>
                        </tr>
                        <tr>
                            <td>رقم الخطاب</td>
                            <td>تاريخ الخطاب</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">exemption_letter.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                    {{-- truck ownership - إستمارة ملكية الشاحنات --}}
                    <table class="table borderless table-striped text-center">
                        <tr>
                            <th colspan="2">إستمارة ملكية الشاحنات</th>
                        </tr>
                        <tr>
                            <td>رقم الاستمارة</td>
                            <td>تاريخ الاستمارة</td>
                        </tr>
                        <tr>
                            <td>12312323</td>
                            <td>dd/mm/yyy</td>
                        </tr>
                        <tr>
                            <td colspan="2"><a href="">truck_ownership.pdf</a></td>
                        </tr>
                        <tr><td colspan="2"></td></tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6 col-lg-6">

                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">

                </div>
            </div>
    

                          {{-- <img src="http://pngimg.com/uploads/simpsons/simpsons_PNG8.png" class="d-block w-100" height="650" alt="..."> --}}
                 
        </div>

        @endsection