@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/rateyo/rateyo.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')

  <div id="clients-reviews-index-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تقييمات العملاء</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-3 flex-shrink-0">
        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#reviewCreateModal"><span class="ti-xs ti ti-plus me-2"></span> إضافة تقييم جديد</button>
      </div>
    </div><!-- d-flex -->

    <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap mb-4">
      <div class="tabs-area d-flex align-items-center justify-content-start gap-3 flex-wrap">
        <a href="{{ url('/clients') }}" title="العملاء" class="btn btn-label-dark waves-effect">العملاء</a>
        <div class="btn btn-primary waves-effect waves-light">تقييمات العملاء</div>
      </div><!-- tabs-area -->
      <div class="d-flex justify-content-end">
        <button class="btn btn-icon btn-secondary waves-effect waves-light" type="button" data-bs-toggle="collapse" data-bs-target="#employees-filter-collapse" aria-expanded="false" aria-controls="employees-filter-collapse"><span class="ti ti-filter"></span></button>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="collapse" id="employees-filter-collapse">
      <div class="card mb-4">
        <div class="card-body p-3">
          <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
              <div class="form-group">
                <label class="form-label" for="employee-name">اسم العميل</label>
                <input type="text" class="form-control" id="employee-name" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label class="form-label" for="employee-mobile">رقم الهاتف</label>
                <div class="input-group">
                  <input type="tel" inputmode="numeric" id="employee-mobile" dir="ltr" class="form-control" />
                  <span class="input-group-text" dir="ltr">+966</span>
                </div><!-- input-group -->
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label class="form-label" for="contract-return-location">رقم رخصة القيادة</label>
                <input type="text" id="contract-return-location" class="form-control" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col">
              <div class="form-group">
                <label class="form-label" for="customer-classification">تصنيف العميل</label>
                <select id="customer-classification" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر">
                  <option></option>
                  <option value="local-client-fields" selected>محلي</option>
                  <option value="gcc-client-fields">مجلس تعاون الخليج</option>
                  <option value="foreign-client-fields">اجنبي</option>
                </select>
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col toggle-element" id="local-client-fields">
              <div class="form-group">
                <label class="form-label" for="local-customer-national-id-number">رقم الهوية الوطنية</label>
                <input type="text" class="form-control" id="local-customer-national-id-number" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col toggle-element" id="gcc-client-fields" style="display: none;">
              <div class="form-group">
                <label class="form-label" for="gcc-customer-national-id-number">رقم الهوية الوطنية</label>
                <input type="text" class="form-control" id="gcc-customer-national-id-number" />
              </div><!-- form-group -->
            </div><!-- col -->
            <div class="col toggle-element" id="foreign-client-fields" style="display: none;">
              <div class="form-group">
                <label class="form-label" for="foreign-customer-passport-number">رقم جواز السفر</label>
                <input type="text" class="form-control" id="foreign-customer-passport-number">
              </div><!-- form-group -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card-body -->
        <div class="card-footer d-flex justify-content-end gap-2 flex-wrap p-3 pt-0">
          <button type="submit" class="btn btn-label-primary waves-effect px-5">بحث</button>
          <button type="reset" class="btn btn-icon btn-label-secondary waves-effect"><span class="ti ti-refresh"></span></button>
        </div><!-- card-footer -->
      </div><!-- card -->
    </div><!-- employees-filter-collapse -->

    <div class="card">
      <div class="table-responsive text-nowrap">
        <table class="table table-striped">
          <thead>
            <tr>
              <th width="5%" class="fw-bold">#</th>
              <th class="fw-bold">الاسم</th>
              <th class="fw-bold">التقييم</th>
              <th class="fw-bold">التعليق</th>
              <th width="5%"></th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
              <td>
                <a href="{{ url('/clients/reviews/{id}/view') }}" title="#">137</a>
              </td>
              <td>محمد احمد محمود</td>
              <td>
                <div class="Stars" style="--rating: 2;"></div>
              </td>
              <td>عميل محترم في التعامل من اول مره</td>
              <td><a href="{{ url('/clients/reviews/{id}/view') }}" class="btn btn-sm btn-icon btn-primary waves-effect waves-light"><span class="ti ti-eye"></span></a></td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/clients/reviews/{id}/view') }}" title="#">137</a>
              </td>
              <td>محمد احمد محمود</td>
              <td>
                <div class="Stars" style="--rating: 2.5;"></div>
              </td>
              <td>عميل محترم في التعامل من اول مره</td>
              <td><a href="{{ url('/clients/reviews/{id}/view') }}" class="btn btn-sm btn-icon btn-primary waves-effect waves-light"><span class="ti ti-eye"></span></a></td>
            </tr>
            <tr>
              <td>
                <a href="{{ url('/clients/reviews/{id}/view') }}" title="#">137</a>
              </td>
              <td>محمد احمد محمود</td>
              <td>
                <div class="Stars" style="--rating: 5;"></div>
              </td>
              <td>عميل محترم في التعامل من اول مره</td>
              <td><a href="{{ url('/clients/reviews/{id}/view') }}" class="btn btn-sm btn-icon btn-primary waves-effect waves-light"><span class="ti ti-eye"></span></a></td>
            </tr>
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->

    <!-- Review Create Modal -->
    <div class="modal fade" id="reviewCreateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="advanceCreateModalLabel1">إضافة تقييم جديد</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="client-name-1">العميل</label>
              <div class="col-12 col-sm-9">
                <select id="client-name-1" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر" data-dropdown-parent="#reviewCreateModal">
                  <option></option>
                  <option value="AK">احمد محمود</option>
                  <option value="HI">مصطفي محمد</option>
                  <option value="ew">عبدالرحمن عمر</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-advance-amount">التقييم</label>
              <div class="col-12 col-sm-9">
                <ul id="stars-rating" class="d-flex align-items-center justify-content-start gap-1 m-0 p-0 list-unstyled">
                  <li class="star" data-value='1'><i class='ti ti-star-filled'></i></li>
                  <li class="star" data-value="2"><i class='ti ti-star-filled'></i></li>
                  <li class="star" data-value='3'><i class='ti ti-star-filled'></i></li>
                  <li class="star" data-value='4'><i class='ti ti-star-filled'></i></li>
                  <li class="star" data-value='5'><i class='ti ti-star-filled'></i></li>
                </ul><!-- stars-rating -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-start">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-advance-date">التعليق</label>
              <div class="col-12 col-sm-9">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div><!-- col-12 -->
            </div><!-- row -->
          </div><!-- modal-body -->
          <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
            <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
            <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Review Create Modal -->


  </div><!-- clients-reviews-index-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/rateyo/rateyo.js') }}"></script>
  <script>
    // --------------------------------------------------------------------
    // Show Classification Options
    // --------------------------------------------------------------------
    $(document).ready(function () {
      $('#customer-classification').on('change', function () {
        const selectedValue = $(this).val();
        // Hide all elements with the class 'toggle-element'
        $('.toggle-element').hide();
        // Show the selected element if it's not "none"
        if (selectedValue !== 'none') {
          $(`#${selectedValue}`).show();
        }
      });
    });


    // --------------------------------------------------------------------
    // Select2
    // --------------------------------------------------------------------
    $(".select2").select2();


    $(document).ready(function(){

  /* 1. Visualizing things on Hover - See next part for action on click */
  $('#stars-rating li').on('mouseover', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

    // Now highlight all the stars that's not after the current hovered star
    $(this).parent().children('li.star').each(function(e){
      if (e < onStar) {
        $(this).addClass('hover');
      }
      else {
        $(this).removeClass('hover');
      }
    });

  }).on('mouseout', function(){
    $(this).parent().children('li.star').each(function(e){
      $(this).removeClass('hover');
    });
  });


  /* 2. Action to perform on click */
  $('#stars-rating li').on('click', function(){
    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
    var stars = $(this).parent().children('li.star');

    for (i = 0; i < stars.length; i++) {
      $(stars[i]).removeClass('selected');
    }

    for (i = 0; i < onStar; i++) {
      $(stars[i]).addClass('selected');
    }

  });


});

  </script>
@endpush
