<div class="modal fade" id="trafficViolationEditModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-3">
        <h5 class="modal-title" id="trafficViolationEditModalLabel1">تعديل مخالفة مرورية</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><!-- modal-header -->
      <div class="modal-body p-3">
        <div class="row align-items-center">
          <label class="col-sm-4 col-form-label" for="car-number">رقم المخالفة</label>
          <div class="col-12 col-sm-8">
            <input type="number" inputmode="numeric" id="oil-status" class="form-control" value="8519324404">
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-4 col-form-label" for="car-number">تاريخ المخالفة</label>
          <div class="col-12 col-sm-8">
            <input type="text" class="form-control" placeholder="YYYY-MM-DD HH:MM" id="flatpickr-datetime" value="2025-03-13 12:00" />
          </div><!-- col-12 -->
        </div><!-- row -->
        <hr class="my-3">
        <div class="row align-items-center">
          <label class="col-sm-4 col-form-label fw-medium" for="reservation-status">حالة الحجز</label>
          <div class="col-12 col-sm-8">
            <select id="traffic-violation-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر" data-dropdown-parent="#trafficViolationEditModal">
              <option></option>
              <option value="Completed">قيد المراجعه</option>
              <option value="Confirmed">تم التحويل</option>
              <option value="Unconfirmed" selected>مرفوضه</option>
              <option value="Cancelled">مقبوله</option>
            </select>
          </div><!-- col-12 -->
        </div><!-- row -->
        <div id="reason-cancellation" style="display: none;">
          <hr class="my-3">
          <div class="row align-items-start">
            <label class="col-sm-3 col-form-label fw-medium" for="reservation-reason-cancellation">سبب الإلغاء</label>
            <div class="col-12 col-sm-9">
              <textarea class="form-control p-2" id="reservation-reason-cancellation" rows="3"></textarea>
            </div><!-- col-12 -->
          </div><!-- row -->
        </div><!-- reason-cancellation -->
      </div><!-- modal-body -->
      <div class="modal-footer p-3 d-flex align-items-center justify-content-end gap-3">
        <button type="button" class="btn text-secondary waves-effect m-0" data-bs-dismiss="modal">إلغاء</button>
        <button type="button" class="btn btn-primary px-5 m-0">حفظ</button>
      </div>
    </div>
  </div>
</div>
