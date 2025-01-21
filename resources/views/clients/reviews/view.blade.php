@extends('layouts.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
@endpush

@section('content')

  <div id="clients-reviews-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تقييم عميل : احمد محمد محمود</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#reviewCreateModal"><span class="ti-xs ti ti-plus me-2"></span> إضافة تقييم جديد</button>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="card">
      <div class="card-body">
        <ul class="timeline mb-0">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event px-0">
              <div class="timeline-header border-bottom mb-3 pb-2">
                <h6 class="mb-0">الفرع : الواحة</h6>
                <span class="text-muted">18 / 11 / 2024</span>
              </div>
              <div class="Stars m-0 mb-3" style="--rating: 2;"></div>
              <p>عميل محترم في التعامل من اول مره</p>
              <small class="d-flex align-items-center justify-content-start text-muted">الموظف : محمد احمد محمود</small>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event px-0">
              <div class="timeline-header border-bottom mb-3 pb-2">
                <h6 class="mb-0">الفرع : جدة</h6>
                <span class="text-muted">11 / 11 / 2024</span>
              </div>
              <div class="Stars m-0 mb-3" style="--rating: 2;"></div>
              <p>عميل محترم في التعامل من اول مره</p>
              <small class="d-flex align-items-center justify-content-start text-muted">الموظف : محمد احمد محمود</small>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event px-0">
              <div class="timeline-header border-bottom mb-3 pb-2">
                <h6 class="mb-0">الفرع : الرياض</h6>
                <span class="text-muted">02 / 11 / 2024</span>
              </div>
              <div class="Stars m-0 mb-3" style="--rating: 2;"></div>
              <p>عميل محترم في التعامل من اول مره</p>
              <small class="d-flex align-items-center justify-content-start text-muted">الموظف : محمد احمد محمود</small>
            </div>
          </li>
        </ul>
      </div>
    </div>

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

  </div><!-- clients-reviews-view-page -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
  <script src="{{ asset('assets/vendor/libs/rateyo/rateyo.js') }}"></script>
  <script>
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
