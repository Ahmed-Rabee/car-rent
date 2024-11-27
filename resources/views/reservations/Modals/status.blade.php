<div class="modal fade" id="reservationStatusModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header p-3">
        <h5 class="modal-title" id="reservationStatusModalLabel1">تغيير حالة الحجز : 4574</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div><!-- modal-header -->
      <div class="modal-body p-3">
        <div class="row align-items-center">
          <label class="col-sm-3 col-form-label fw-medium" for="reservation-status">حالة الحجز</label>
          <div class="col-12 col-sm-9">
            <select id="reservation-status" class="select2 form-select" data-allow-clear="false" data-minimum-results-for-search="Infinity" data-placeholder="اختر" data-dropdown-parent="#reservationStatusModal">
              <option></option>
              <option value="Completed">مكتمل</option>
              <option value="Confirmed">مؤكد</option>
              <option value="Unconfirmed" selected>غير مؤكد</option>
              <option value="Cancelled">ملغي</option>
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
