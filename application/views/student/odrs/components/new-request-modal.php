<!-- VIEW DOCUMENT MODAL -->
<div id="viewDocumentDetails" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden" style="background: url('<?= base_url() ?>public/images/chat-bg-pattern.png') rgb(255, 255, 255);">
      <div class="modal-body login-modal p-5">
        <h5 class="text-white text-center fs-20" id="view_document_name">
        </h5>
      </div>
      <div class="modal-body px-5 pt-5">
        <span class="badge badge-soft-dark fs-15 mb-3"> <i class="ri-folder-4-line me-2"></i> Type</span>
        <mark class="mb-4 mx-3 fw-bold d-block text-center" id="view_document_type"></mark>
        <span class="badge badge-soft-dark fs-15 mb-3"> <i class="ri-file-list-3-line me-2"></i> Details</span>
        <p class="mb-4 mx-3" id="view_document_details"></p>
        <span class="badge badge-soft-dark fs-15 mb-3"> <i class="ri-suitcase-line me-2"></i> Requirements</span>
        <p id="view_document_requirements" class="mx-3"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-animation waves-effect waves-light fs-13" data-text="Close" data-bs-dismiss="modal"><span>Close</span></button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>