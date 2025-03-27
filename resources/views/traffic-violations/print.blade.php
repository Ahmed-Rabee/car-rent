@extends('layouts.print')

@push('styles')
  <style>
    @media print {
      @page {
        size: A4 portrait;
        margin: 0; /* This is for page margins */
        -webkit-print-color-adjust: exact;
      }
      body {
        margin: 0; /* This removes default body margins */
        padding: 0; /* This removes padding */
        -webkit-print-color-adjust: exact;
      }
      header, footer {
        display: none; /* Hide headers and footers */
      }
    }
  </style>
@endpush

@section('content')
  <div id="contracts-print-page" class="min-vh-100 bg-white d-flex flex-column p-2 gap-4 mx-auto border">
    <div class="page-header flex-shrink-0">
      <div class="print-header d-flex justify-content-between">
        <div class="col-right d-flex flex-column gap-1">
          <div class="d-block">شركة الرؤية المتكاملة للإستثمار ش.م.م</div>
          <div class="d-block">س.ت : 335346</div>
          <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-phone"></i> 99887766 - 99887766</div>
          <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-mailbox"></i> 1984</div>
          <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-map-pin"></i> صلاله - 211 - سلطنة عمان</div>
        </div><!-- col-right -->
        <div class="col-center align-self-stretch d-flex align-items-center justify-content-center flex-column gap-3">
          <img src="https://i.postimg.cc/MKjJTgGv/logo.png" alt="شركة الآمانة لتآجير السيارات" class="mw-100 h-auto w-auto">
          <div class="d-block fw-bold m-0 text-center text-nowrap">شركة الآمانة لتآجير السيارات</div>
        </div><!-- col-right -->
        <div class="col-left d-flex flex-column align-items-end gap-1">
          <div class="contarct-number fw-bold fs-6">رقم العقد : #4563</div>
          <div class="contarct-date d-block">تاريخ العقد : 12-12-2024</div>
          <div class="contarct-branch d-block">الفرع : فرع الواحة</div>
        </div><!-- col-left -->
      </div><!-- print-header -->
      <div class="print-page-title d-flex align-items-center justify-content-center my-1">
        <div class="d-flex align-items-center justify-content-center fw-bold px-4 py-2">عــقــد تآجــيــر سيـــارة</div>
      </div><!-- print-page-title -->
    </div><!-- page-header -->
    <div class="print-page-content flex-grow-1 d-flex flex-column gap-1">

<div class="print-card-title text-center fw-bold mb-3">الموضوع / تحويل مخالفات</div>

<div class="print-card-descrption d-flex flex-column gap-1 mb-4">
  <p class="m-0 text-center">بالإشارة الى اعلاه نتقدم اليكم بطلب تحويل مخالفات من مكتبنا ومرفق لكم الاثباتات المطلوبة</p>
  <p class="m-0 text-center">وان المكتب سوف يتحمل كافه المسؤولية عن صحه البيانات في العقد والكشف</p>
  <p class="m-0 text-center">بناءَ على تسلمها من المستأجر وتوقيعه على صحتها بالعقد المبرم .</p>
</div><!-- print-card-descrption -->

<div class="print-card-details d-flex flex-column gap-2 fw-bold mb-4">
  <p class="m-0">اسم المستأجر / نصار احمد بخيت المعشني</p>
  <p class="m-0">رقم رخصه القيادة / 15040599</p>
</div><!-- print-card-details -->

<div class="table-responsive text-nowrap mb-4">
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
    </tbody>
  </table>
</div><!-- table-responsive -->

<div class="print-card-thanks text-center fw-bold">ولكم جزيل الشكر ؛؛؛؛؛</div>

    </div><!-- print-page-content -->
    <div class="print-footer flex-shrink-0 d-flex flex-column gap-2 mt-2">
    </div><!-- print-footer -->
  </div><!-- contracts-print-page -->
@endsection

@push('scripts')
  <script type="text/javascript">
    // window.onload = function() {
    //   window.print(); // Automatically open the print dialog when the page is loaded
    // };
  </script>
@endpush
