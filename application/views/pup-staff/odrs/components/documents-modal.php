<!-- ADD DOCUMENT MODAL -->
<div id="addDocumentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content px-4 border-0 overflow-hidden">
			<div class="modal-header">
				<h5 class="modal-title">
					<i class="ri-file-list-3-fill me-1"></i>
					Add Document
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-4">
				<form id="addDocumentForm" class="needs-validation" novalidate>
					<div class="mb-3">
						<label for="document_name" class="form-label">Document Name <span class="text-danger">*</span></label>
						<input type="text" id="document_name" name="document_name" class="form-control" placeholder="Enter the name of the Document" required>
						<div class="invalid-feedback">
							Please enter the Document's Name.
						</div>
					</div>
					<div class="mb-3">
						<label for="document_type" class="form-label">Document Type <span class="text-danger">*</span></label>
						<select id="document_type" name="document_type" class="form-select js-example-basic-single" required>
							<option value="" selected disabled>Select the Type of the Document</option>
							<option value="Transcript of Records">Transcript of Records</option>
							<option value="Certifications">Certifications</option>
							<option value="Unclaimed">Unclaimed</option>
							<option value="CAV">CAV (CHED/DFA/WES/CES)</option>
						</select>
						<div class="invalid-feedback">
							Please select the Document's Type.
						</div>
					</div>
					<div class="mb-3">
						<label for="document_details" class="form-label">Document Details <span class="text-danger">*</span></label>
						<textarea id="document_details" name="document_details" class="form-control" rows="3" placeholder="Enter additional details about the Document" required></textarea>
						<div class="invalid-feedback">
							Please enter the Document's Details.
						</div>
					</div>
					<div class="mb-3">
						<label for="select_signatories" class="form-label">Document Signatories <span class="text-danger">*</span></label>
						<div class="d-flex align-items-center signatories_div">
							<select id="select_signatories" name="select_signatories" class="form-select js-example-basic-single" required>
								<option value="" selected disabled>Select the signatories for this Document</option>
							</select>
							<button onclick="print_signatory()" type="button" class="btn btn-info btn-icon waves-effect"><i class="mdi mdi-file-sign fs-5"></i></button>
						</div>
						<small class="signatories_div text-danger">Click the button beside the option to add the selected signatory.</small>
					</div>
					<ul id="display_list" class="mt-2 list-unstyled">
					</ul>
					<div class="mt-4 mb-3">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<label class="form-label mb-0">Document Requirements</label>
							<button type="button" class="btn btn-success py-1 rounded-pill" id="addDocReq">Add New</button>
						</div>
						<div id="add_doc_req_container"></div>
					</div>
					<button type="submit" class="btn btn-primary w-100 mt-3 bg-gradient">Submit</button>
				</form>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- VIEW DOCUMENT MODAL -->
<div id="viewDocumentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
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
				<span class="badge badge-soft-dark fs-15 mb-3"> <i class="ri-pen-nib-line me-2"></i> Signatories</span>
				<ul id="view_document_signatories" class="mx-3"></ul>
				<span class="badge badge-soft-dark fs-15 mb-3 mt-1"> <i class="ri-suitcase-line me-2"></i> Requirements</span>
				<ul id="view_document_requirements" class="mx-3"></ul>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-animation waves-effect waves-light fs-13" data-text="Close" data-bs-dismiss="modal"><span>Close</span></button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- UPDATE DOCUMENT MODAL -->
<div id="updateDocumentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content px-4 border-0 overflow-hidden">
			<div class="modal-header">
				<h5 class="modal-title">
					<i class="ri-file-edit-fill me-1"></i>
					Update Document
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body py-4">
				<form id="editDocumentForm" class="needs-validation" novalidate>
					<div class="mb-3">
						<input type="hidden" id="edit_document_id" name="edit_document_id">
					</div>
					<div class="mb-3">
						<label for="edit_document_name" class="form-label">Document Name <span class="text-danger">*</span></label>
						<input type="text" id="edit_document_name" name="document_name" class="form-control" placeholder="Enter the name of the Document" value="" required>
						<div class="invalid-feedback">
							Please enter the Document's Name.
						</div>
					</div>
					<div class="mb-3">
						<label for="editdocument_type" class="form-label">Document Type <span class="text-danger">*</span></label>
						<select id="edit_document_type" name="document_type" class="form-control" required>
							<option value="" disabled>Select the Type of the Document</option>
							<option value="Transcript of Records">Transcript of Records</option>
							<option value="Certifications" selected>Certifications</option>
							<option value="Unclaimed">Unclaimed</option>
							<option value="CAV">CAV (CHED/DFA/WES/CES)</option>
						</select>
						<div class="invalid-feedback">
							Please select the Document's Type.
						</div>
					</div>
					<div class="mb-3">
						<label for="edit_document_details" class="form-label">Document Details <span class="text-danger">*</span></label>
						<textarea id="edit_document_details" name="document_details" class="form-control" rows="3" placeholder="Enter additional details about the Document" required></textarea>
						<div class="invalid-feedback">
							Please enter the Document's Details.
						</div>
					</div>
					<div class="mb-3">
						<label for="edit_signatories" class="form-label">Document Signatories <span class="text-danger">*</span></label>
						<div class="d-flex align-items-center signatories_div d-none">
							<select id="edit_signatories" name="edit_signatories" class="form-select js-example-basic-single" required>
								<option value="" selected disabled>Select the signatories for this Document</option>
							</select>
							<button onclick="edit_signatory()" type="button" class="btn btn-info btn-icon waves-effect"><i class="mdi mdi-file-sign fs-5"></i></button>
						</div>
						<small class="signatories_div text-danger d-none">Click the button beside the option to add the selected signatory.</small>
					</div>
					<ul id="signatories_list" class="mt-2 list-unstyled">
					</ul>
					<div class="mt-4 mb-3">
						<div class="d-flex justify-content-between align-items-center mb-3">
							<label class="form-label mb-0">Document Requirements</label>
							<a href="javascript:edit_new_link()" class="btn btn-success py-1 rounded-pill">Add New</a>
						</div>
						<div id="edit_document_requirements_list">
						</div>
						<div id="edit_newForm" style="display: none;">
						</div>
					</div>
					<button type="submit" class="btn btn-primary w-100 mt-3 bg-gradient">Submit</button>
				</form>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>