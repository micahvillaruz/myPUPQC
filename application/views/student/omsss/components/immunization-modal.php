<!-- View Immunization modal -->
<div class="modal fade" id="viewImmunizationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Vaccine Information
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <figure class="figure">
      <img src="<?= base_url() ?>" alt="" class="img-thumbnail" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- Edit Immunization modal -->
<div id="editImmunizationModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Edit</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="row">
							<div class="col-lg-18">
								</div>
								<div class="row">
									<div class="col-lg-18">
										<div class="card">
											<div class="card-header">
											</div>
											end card header
											<div class="card-body">
												<p class="text-muted">
												</p>
												<input
													type="file"
													class="filepond filepond-input-multiple"
													multiple
													name="filepond"
													data-allow-reorder="true"
													data-max-file-size="3MB"
													data-max-files="3" />
											</div>
											end card body
										</div>
										end card
									</div>
									end col
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="submit" class="btn btn-light">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    /.modal-content
  </div>
  /.modal-dialog
</div>

<!-- Delete Immunization modal
<div class="modal fade zoomIn" id="deleteImmunizationModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
      </div>
      <div class="modal-body p-5 text-center">
        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
        <div class="mt-4 text-center">
          <h4 class="fs-semibold">You are about to delete a record ?</h4>
          <p class="text-muted fs-14 mb-4 pt-1">Deleting your record will remove all of your information from our database.</p>
          <div class="hstack gap-2 justify-content-center remove">
            <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->