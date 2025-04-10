@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="settings-traffic-violations-print-page">

    <h4 class="mb-4">إعدادات طباعة المخالفات المرورية</h4>

      <a href="{{ url('/settings') }}" class="btn btn-icon bg-white text-body waves-effect waves-light mb-4"><span class="ti ti-chevron-right"></span></a>

    <div class="row g-4">
      <div class="col-12 col-md-6">
        <div class="card h-100">
          <div class="card-body p-3">
            <form action="/upload" method="post">
              <div class="row align-items-center">
                <label class="col-sm-4 col-form-label" for="company_logo">الشعار</label>
                <div class="col-sm-8">
                  <input class="form-control" type="file" id="company_logo" accept="image/*" />
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-center">
                <label class="col-sm-4 col-form-label" for="company_name">اسم الشركة</label>
                <div class="col-sm-8">
                <input type="text" class="form-control" value="هنا يكتب اسم الشركة" id="company_name" />
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
            </form>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-12 col-md-6">
        <div class="settings-traffic-violations-print-card card">
          <table id="traffic-violations-print-page" class="w-100">
            <thead>
              <tr>
                <th>
                  <div class="print-page-header p-2 d-flex justify-content-between">
                    <div class="col-right d-flex align-items-start justify-content-center  flex-column gap-3">
                      <img src="{{ asset('assets/images/logo-default.png') }}" alt="شركة الآمانة لتآجير السيارات" class="mw-100 h-auto w-auto" id="company_logo_value">
                      <div class="d-block fw-bold m-0 text-center text-nowrap" id="company_name_value">شركة الآمانة لتآجير السيارات</div>
                    </div>
                    <div class="col-left d-flex flex-column gap-1">
                      <div class="d-block">شركة الرؤية المتكاملة للإستثمار ش.م.م</div>
                      <div class="d-block">س.ت : 335346</div>
                      <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-phone"></i> 99887766 - 99887766</div>
                      <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-mailbox"></i> 1984</div>
                      <div class="d-flex align-items-center justify-content-start gap-1"><i class="ti ti-xs ti-map-pin"></i> صلاله - 211 - سلطنة عمان</div>
                    </div>
                  </div><!-- print-page-header -->
                  <div class="print-page-header-space"></div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="print-page-content px-2 pb-2">
                    <div class="d-flex flex-column gap-2">
                      <span>شرطة عمان السلطانية</span>
                      <span>الفاضل / ظابط قسم السرعه</span>
                      <span>السلام عليكم ورحمة الله وبركاتة</span>
                    </div>
                    <div class="print-page-title d-flex align-items-center justify-content-center my-1">
                      <div class="d-flex align-items-center justify-content-center fw-bold px-4 py-2">الموضوع / تحويل مخالفات</div>
                    </div><!-- print-page-title -->
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

                    <div class="print-card-thanks text-center fw-bold mb-4">ولكم جزيل الشكر ؛؛؛؛؛</div>

                    <div class="images">
                      <div class="row row-cols-2 g-3">
                        <div class="col">
                          <img src="https://i.ytimg.com/vi/Gdy8zWF-obU/maxresdefault.jpg" alt="" class="img-fluid">
                        </div><!-- col -->
                        <div class="col">
                          <img src="https://i.ytimg.com/vi/Gdy8zWF-obU/maxresdefault.jpg" alt="" class="img-fluid">
                        </div><!-- col -->
                      </div><!-- row -->
                    </div><!-- images -->


                    <div class="print-page-content-space"></div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div><!-- settings-traffic-violations-print-card -->
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- Reservations-index-page -->

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
      function toggleVisibility(element, value) {
        if (value.trim() === '') {
          element.addClass('d-none');
        } else {
          element.removeClass('d-none');
        }
      }
      // Initial values
      $('#company_name_value').text($('#company_name').val());
      toggleVisibility($('#company_name_value'), $('#company_name').val());

      // Text inputs
      $('#company_name').on('input', function () {
        const value = $(this).val();
        $('#company_name_value').text(value);
        toggleVisibility($('#company_name_value'), value);
      });

      // Image input
  $('#company_logo').on('change', function (e) {
    const file = e.target.files[0];
    const imgElement = $('#company_logo_value');

    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        // لو العنصر مش موجود نضيفه
        if (imgElement.length === 0) {
          $('<img>', {
            id: 'company_logo_value',
            src: e.target.result,
            alt: 'Company Logo',
          }).appendTo('#preview_container'); // تأكد تحط الصورة في الحاوية اللي انت عايزها
        } else {
          imgElement.attr('src', e.target.result);
        }
      };
      reader.readAsDataURL(file);
    } else {
      imgElement.remove(); // لو مفيش صورة امسح العنصر نفسه
    }
  });
    });
  </script>
@endpush
