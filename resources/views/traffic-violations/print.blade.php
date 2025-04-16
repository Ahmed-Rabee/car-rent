@extends('layouts.print')

@push('styles')
  <style>
    @media print {
      @page {
        size: A4 portrait;
        margin: 0;
        -webkit-print-color-adjust: exact;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      header, footer {
        display: none;
      }
      #traffic-violations-print-page.hide_header {
        padding-top: 150px;
      }
    }
  </style>
@endpush

@section('content')
  <div id="traffic-violations-print-page" class="min-vh-100 d-flex flex-column gap-3 hide_header">
    <div class="print-page-header p-2 d-flex justify-content-between">
      <div class="col-right d-flex flex-column gap-1 flex-shrink-0">
        <div class="d-block">شركة الرؤية المتكاملة للإستثمار ش.م.م</div>
        <div class="d-block">س.ت : 335346</div>
        <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-phone"></i> 99887766 - 99887766</div>
        <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-mailbox"></i> 1984</div>
        <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-map-pin"></i> صلاله - 211 - سلطنة عمان</div>
      </div><!-- col-right -->
      <div class="col-center d-flex align-items-center justify-content-center flex-grow-1 flex-column gap-2">
        <img src="{{ asset('assets/images/logo-default.png') }}" alt="شركة الآمانة لتآجير السيارات" class="mw-100 h-auto w-auto">
        <div class="d-block fw-bold m-0 text-center text-nowrap">شركة الآمانة لتآجير السيارات</div>
      </div><!-- col-center -->
      <div class="col-left d-flex flex-column gap-1 flex-shrink-0" dir="ltr">
        <div class="d-flex align-items-center justify-content-start">Integrated Vision for Investment LLC.</div>
        <div class="d-flex align-items-center justify-content-start">C.R: 1432964</div>
        <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-phone"></i> 99887766 - 99887766</div>
        <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-mailbox"></i> 1984</div>
        <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-map-pin"></i> Salalah - 211 - Sultanate of Oman</div>
      </div><!-- col-left -->
    </div><!-- print-page-header -->
    <div class="print-page-content d-flex flex-column gap-3 p-2">
      <div class="d-flex flex-column gap-2">
        <span>شرطة عمان السلطانية</span>
        <span>الفاضل / ظابط قسم السرعه</span>
        <span>السلام عليكم ورحمة الله وبركاتة</span>
      </div><!-- d-flex -->
      <div class="print-page-title d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center fw-bold px-4 py-2">الموضوع / تحويل مخالفات</div>
      </div><!-- print-page-title -->
      <div class="print-card-descrption d-flex flex-column gap-1">
        <p class="m-0 text-center">بالإشارة الى اعلاه نتقدم اليكم بطلب تحويل مخالفات من مكتبنا ومرفق لكم الاثباتات المطلوبة</p>
        <p class="m-0 text-center">وان المكتب سوف يتحمل كافه المسؤولية عن صحه البيانات في العقد والكشف</p>
        <p class="m-0 text-center">بناءَ على تسلمها من المستأجر وتوقيعه على صحتها بالعقد المبرم .</p>
      </div><!-- print-card-descrption -->

      <div class="print-card-details d-flex flex-column gap-2 fw-bold">
        <p class="m-0">اسم المستأجر / نصار احمد بخيت المعشني</p>
        <p class="m-0">رقم رخصه القيادة / 15040599</p>
      </div><!-- print-card-details -->

      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="fw-bold">م</th>
              <th class="fw-bold">تاريخ التسجيل والوقت</th>
              <th class="fw-bold">رقم المخالفة</th>
              <th class="fw-bold">رقم اللوحة</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="fw-bold">2</td>
              <td class="fw-bold">01/10/2024 16:21</td>
              <td class="fw-bold">8519324404</td>
              <td class="fw-bold">ط -  007630</td>
            </tr>
            <tr>
              <td class="fw-bold">2</td>
              <td class="fw-bold">01/10/2024 16:21</td>
              <td class="fw-bold">8519324404</td>
              <td class="fw-bold">ط -  007630</td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->

      <div class="print-card-thanks text-center fw-bold">ولكم جزيل الشكر ؛؛؛؛؛</div>

      <div class="row justify-content-center">
        <div class="col-10">
          <div class="images">
            <div class="row row-cols-2 g-3">
              <div class="col">
                <img src="{{ asset('assets/images/drivingـlicenseـphoto.webp') }}" alt="" class="img-fluid">
              </div><!-- col -->
              <div class="col">
                <img src="{{ asset('assets/images/drivingـlicenseـphoto.webp') }}" alt="" class="img-fluid">
              </div><!-- col -->
              <div class="col">
                <img src="{{ asset('assets/images/drivingـlicenseـphoto.webp') }}" alt="" class="img-fluid">
              </div><!-- col -->
              <div class="col">
                <img src="{{ asset('assets/images/drivingـlicenseـphoto.webp') }}" alt="" class="img-fluid">
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- images -->
        </div><!-- col -->
      </div><!-- row -->

    </div><!-- print-page-content -->
  </div><!-- traffic-violations-print-page -->
@endsection
