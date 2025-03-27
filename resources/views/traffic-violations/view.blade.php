@extends('layouts.app')

@section('content')

  <div id="traffic-violations-view-page">

    <div class="d-flex justify-content-end align-items-center mb-3">
      <a href="{{ url('/traffic-violations/12/print') }}" class="btn btn-dark waves-effect waves-light">
        <span class="ti-xs ti ti-printer me-1"></span> طباعة المخالفة
      </a>
    </div><!-- d-flex -->

    <div class="row justify-content-center">
      <div class="col-12 col-md-10">

        <div class="traffic-violations-print-card card">
          <div class="card-body">

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

          </div><!-- card-body -->
        </div><!-- traffic-violations-print-card -->


      </div><!-- col -->
    </div><!-- row -->

  </div><!-- traffic-violations-view-page -->

@endsection

@push('scripts')
  <script type="module">
    $('#traffic-violations-print-button').click(function () {
        window.print();
        return false;
    });
  </script>
@endpush
