@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
@endpush

@section('content')

  <div id="settings-traffic-violations-print-page">

    <h4 class="mb-4">إعدادات طباعة المخالفات المرورية</h4>

      <a href="{{ url('/settings/print-settings') }}" class="btn btn-icon bg-white text-body waves-effect waves-light mb-4"><span class="ti ti-chevron-right"></span></a>

    <div class="row g-3">
      <div class="col-12 col-md-6">
        <div class="card h-100">
          <div class="card-body p-3">
            <form action="/upload" method="post">
              <div class="row align-items-center">
                <label class="col-sm-3 col-form-label" for="page_header">الهيدر</label>
                <div class="col-sm-9">
                  <label class="switch switch-square switch-lg">
                    <input type="checkbox" class="switch-input" id="page_header" checked>
                    <span class="switch-toggle-slider">
                      <span class="switch-on">
                        <i class="ti ti-check"></i>
                      </span>
                      <span class="switch-off">
                        <i class="ti ti-x"></i>
                      </span>
                    </span>
                  </label>
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-start">
                <label class="col-sm-3 col-form-label" for="content-head-field">الافتتاحية</label>
                <div class="col-sm-9">
                  <div id="snow-editor-1">
                    <p>شرطة عمان السلطانية</p>
                    <p>الفاضل / ظابط قسم السرعه</p>
                    <p>السلام عليكم ورحمة الله وبركاتة</p>
                  </div><!-- snow-editor-1 -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-start">
                <label class="col-sm-3 col-form-label" for="content-title-field">عنوان الموضوع</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="content-title-field" value="الموضوع / تحويل مخالفات">
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="row align-items-start">
                <label class="col-sm-3 col-form-label" for="content-head-field">وصف الموضوع</label>
                <div class="col-sm-9">
                  <div id="snow-editor-2">
                  <p>بالإشارة الى اعلاه نتقدم اليكم بطلب تحويل مخالفات من مكتبنا ومرفق لكم الاثباتات المطلوبة</p>
                  <p>وان المكتب سوف يتحمل كافه المسؤولية عن صحه البيانات في العقد والكشف</p>
                  <p>بناءَ على تسلمها من المستأجر وتوقيعه على صحتها بالعقد المبرم .</p>
                  </div><!-- snow-editor -->
                </div><!-- col-12 -->
              </div><!-- row -->
              <hr class="my-3">
              <div class="form-group">
                <label class="form-label" for="page_header"></label>
              </div><!-- form-group -->
              <hr class="my-3">
            </form>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col -->
      <div class="col-12 col-md-6">
        <div class="settings-traffic-violations-print-card card">
          <div id="page_header_element" class="print-page-header p-2 d-none justify-content-between mb-2">
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
          <div class="print-page-content d-flex flex-column gap-4 p-2">
            <div id="content-head-element-1"></div>
            <div class="print-page-title d-flex align-items-center justify-content-center">
              <div id="content-title-element" class="d-flex align-items-center justify-content-center fw-bold px-4 py-2"></div>
            </div><!-- print-page-title -->
            <div class="print-card-descrption text-center">
              <div id="content-head-element-2"></div>
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
        </div><!-- settings-traffic-violations-print-card -->
      </div><!-- col -->
    </div><!-- row -->

  </div><!-- Reservations-index-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
  <script>
    $(document).ready(function() {
      function toggleElement() {
        if ($('#page_header').is(':checked')) {
          $('#page_header_element').addClass('d-flex');
          $('#page_header_element').removeClass('d-none');
        } else {
          $('#page_header_element').removeClass('d-flex');
          $('#page_header_element').addClass('d-none');
        }
      }
      toggleElement();
      $('#page_header').change(function() {
        toggleElement();
      });
    });

    $(function () {
  // المحرر الأول
  var snowEditor1 = new Quill('#snow-editor-1', {
    bounds: '#snow-editor-1',
    modules: {
      formula: true,
      toolbar: false
    },
    theme: 'snow'
  });

  function copyEditorContent1() {
    var editorContent = snowEditor1.root.innerHTML;
    $('#content-head-element-1').html(editorContent);
  }

  copyEditorContent1();

  snowEditor1.on('text-change', function () {
    copyEditorContent1();
  });

  // المحرر الثاني
  var snowEditor2 = new Quill('#snow-editor-2', {
    bounds: '#snow-editor-2',
    modules: {
      formula: true,
      toolbar: false
    },
    theme: 'snow'
  });

  function copyEditorContent2() {
    var editorContent = snowEditor2.root.innerHTML;
    $('#content-head-element-2').html(editorContent);
  }

  copyEditorContent2();

  snowEditor2.on('text-change', function () {
    copyEditorContent2();
  });
});







    $(document).ready(function () {
      function toggleVisibility(element, value) {
        if (value.trim() === '') {
          element.addClass('d-none');
        } else {
          element.removeClass('d-none');
        }
      }
      // Initial values
      $('#content-title-element').text($('#content-title-field').val());
      toggleVisibility($('#content-title-element'), $('#content-title-field').val());

      // Text inputs
      $('#content-title-field').on('input', function () {
        const value = $(this).val();
        $('#content-title-element').text(value);
        toggleVisibility($('#content-title-element'), value);
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
