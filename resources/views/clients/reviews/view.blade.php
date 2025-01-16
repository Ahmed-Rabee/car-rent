@extends('layouts.app')

@push('styles')
@endpush

@section('content')

  <div id="clients-reviews-view-page">

    <div class="d-flex flex-wrap gap-3 justify-content-between align-items-start align-items-md-center mb-3">
      <div class="d-flex flex-column justify-content-center flex-grow-1">
        <h4 class="m-0">تقييم عميل : احمد محمد محمود</h4>
      </div>
      <div class="d-flex align-content-center flex-wrap gap-2 flex-shrink-0">
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#reviewEditModal" class="btn btn-icon btn-label-info waves-effect"><span class="ti ti-pencil"></span></a>
      </div><!-- d-flex -->
    </div><!-- d-flex -->

    <div class="card">
      <div class="card-body">
        <ul class="timeline mb-0">
          <li class="timeline-item timeline-item-transparent">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
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
            <div class="timeline-event">
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
            <div class="timeline-event">
              <div class="timeline-header border-bottom mb-3 pb-2">
                <h6 class="mb-0">الفرع : الواحة</h6>
                <span class="text-muted">18 / 11 / 2024</span>
              </div>
              <div class="Stars m-0 mb-3" style="--rating: 2;"></div>
              <p>عميل محترم في التعامل من اول مره</p>
              <small class="d-flex align-items-center justify-content-start text-muted">الموظف : محمد احمد محمود</small>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <!-- Review Edit Modal -->
    <div class="modal fade" id="reviewEditModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header p-3">
            <h5 class="modal-title" id="advanceCreateModalLabel1">إضافة تقييم جديد</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div><!-- modal-header -->
          <div class="modal-body p-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="client-name-2">العميل</label>
              <div class="col-12 col-sm-9">
                <select id="client-name-2" class="select2 form-select" data-allow-clear="false" data-placeholder="اختر" data-dropdown-parent="#reviewEditModal">
                  <option></option>
                  <option value="AK">احمد محمود</option>
                  <option value="HI" selected>مصطفي محمد</option>
                  <option value="ew">عبدالرحمن عمر</option>
                </select>
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-center">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-advance-amount">التقييم</label>
              <div class="col-12 col-sm-9">
                <ul id="stars-rating" class="d-flex align-items-center justify-content-start gap-1 m-0 p-0 list-unstyled">
                  <li class="star selected" data-value='1'><i class='ti ti-star-filled'></i></li>
                  <li class="star selected" data-value="2"><i class='ti ti-star-filled'></i></li>
                  <li class="star selected" data-value='3'><i class='ti ti-star-filled'></i></li>
                  <li class="star" data-value='4'><i class='ti ti-star-filled'></i></li>
                  <li class="star" data-value='5'><i class='ti ti-star-filled'></i></li>
                </ul><!-- stars-rating -->
              </div><!-- col-12 -->
            </div><!-- row -->
            <hr class="my-3">
            <div class="row align-items-start">
              <label class="col-sm-3 col-form-label fw-medium" for="employee-advance-date">التعليق</label>
              <div class="col-12 col-sm-9">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">عميل محترم في التعامل من اول مره
                </textarea>
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
    <!-- Review Edit Modal -->

  </div><!-- clients-reviews-view-page -->

@endsection

@push('scripts')
@endpush
