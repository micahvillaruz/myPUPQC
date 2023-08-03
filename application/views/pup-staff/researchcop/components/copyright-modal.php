<!-- Modal for Copyright Document Preview -->
<div id="copyright_document_preview" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="philhealth_id" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" id="philhealth_id_label"> <i class="ri-information-line fs-3 text-info me-2"></i>Copyright Document Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="hid_research_id" name="hid_research_id" />
                <h5 class="fs-15 text-primary">
                    This is the Copyright Document that uploaded in ResearchCop.
                </h5>
                <h5 class="fs-15 text-info">
                    Research Title: <span id="hid_research_title"></span>
                </h5>
                <div id="philhealth_id_content">
                    <div class="d-flex justify-content-center">
                        <embed src="" id="document_preview" type="application/pdf" width="100%" height="500px" alt="Copyright Document">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reject Copyright modal -->
<div id="rejectCopyrightModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 overflow-hidden">
            <div class="modal-header p-3">
                <h4 class="card-title mb-0">Reject Copyright Document</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="rejectCopyrightForm" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <input type="hidden" id="edit_research_id" name="edit_research_id">
                        <input type="hidden" id="r_checked_by" name="r_checked_by">
                        <h4 class="fs-15">Research Title:</h4>
                        <div class="text-muted" id="r_title2" name="r_title2"></div>
                    </div>
                    <div class="mb-3">
                        <h4 class="fs-15">Checked by:</h4>
                        <div class="text-muted" id="r_checked_by2" name="r_checked_by2"></div>
                    </div>
                    <div class="mb-3">
                        <label for="r_remarks" class="form-label">Remarks<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="r_remarks" name="r_remarks" placeholder="State the Remarks." required />
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Reject</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>