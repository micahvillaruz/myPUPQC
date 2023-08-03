<!-- Edit Co Author Modal -->
<div id="editCoAuthorModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content border-0 overflow-hidden">
			<div class="modal-header p-3">
				<h4 class="card-title mb-0">Edit Co-Authors</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>

			<div class="modal-body">
				<form id="editCoAuthorsForm" class="needs-validation" novalidate>
					<div class="mb-3">
						<input type="hidden" id="re_id" name="re_id" />
					</div>
                    <div class="mb-3">
                        <label for="re_title" class="form-label">Research Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="re_title" name="re_title" placeholder="Enter Research Title" required>
                    </div>
					<div class="mb-3">
                        <label for="re_author" class="form-label">Research Author<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="re_author" name="re_author" placeholder="Enter Research Author" required />
                    </div>
                    <div class="mb-3">
                        <label for="re_co_author" class="form-label">Research Co-Author</label>
                        <input type="text" class="form-control" id="re_co_author" name="re_co_author" placeholder="Enter Research Co-Author">
                    </div>               
					<div class="text-end">
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>