<!--View Research Record Modal-->
<div class="modal fade" id="viewResearchRecord" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Research Information
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div data-simplebar class="mx-n3">
                    <ul class="list list-group list-group-flush mb-0">
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Research Title</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_title"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Research Author</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_author"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Date Accomplished</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_date_accomplished"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Adviser</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_adviser"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Program</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_program"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Type</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_type"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Abstract</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_abstract"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                    </ul>
                    <!-- end ul list -->
                </div>
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

<!--Status Info Modal-->
<div class="modal fade" id="statusInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Research Statuses
                </h5>
            </div>
            <div class="modal-body">
                <div data-simplebar class="mx-n3">
                    <ul class="list list-group list-group-flush mb-0">

                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1 fw-medium"><span class="badge rounded-pill bg-success">Approved</span></h5>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex fs-13 fw-medium">
                                        <div class="d-flex fs-13 fw-medium">Your Research is Approved.</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                <h5 class="fs-13 mb-1 fw-medium"><span class="badge rounded-pill bg-warning">Pending</span></h5>
                                </div>
                                <div class="col-8">
                                    <div class="d-flex fs-13 fw-medium">
                                        <div class="d-flex fs-13 fw-medium">Your Research is in the queue and pending to review.</div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1"><span class="badge rounded-pill bg-danger">Rejected</span></h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                <div class="d-flex fs-13 fw-medium">Your Research is Rejected.</div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1"><span class="badge rounded-pill bg-dark">Archieved</span></h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                <div class="d-flex fs-13 fw-medium">Your Research is moved and mark as Archived.</div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                    </ul>
                    <!-- end ul list -->
                </div>
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

<!--View Research Record Modal-->
<div class="modal fade" id="viewResearchRemarks" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">
                    Research Information
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div data-simplebar class="mx-n3">
                    <ul class="list list-group list-group-flush mb-0">
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Research Title</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view2_research_title"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Checked by</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_checked_by"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <div class="col-4">
                                    <h5 class="fs-13 mb-1">Remarks</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_remarks"></div>
                                </div>
                            </div>
                        </li>
                        <!-- end list item -->
                    </ul>
                    <!-- end ul list -->
                </div>
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

<!-- Upload Research Model -->
<div id="uploadResearchModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="updateEducationProfile" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content border-0 overflow-hidden">
			<div class="modal-header p-3">
				<i class="ri-information-line fs-3 text-info me-2"></i>
				<h4 class="modal-title d-flex align-items-center" id="overall_information_title">Upload Research Document</h4>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
			</div>
			<div class="modal-body">
				<form id="uploadResearchForm" class="needs-validation" novalidate>
                    <input type="hidden" id="research_id" name="research_id" />
					<p class="fs-5">Research Title: <span class="fs-5 text-info" id="display_research_title"></span></p>
					<p class="fs-5">Upload your Research Document here, file format must be at <span class="text-danger">PDF File only. </span>Other document format will not accepted.</p>
					<table class="table mb-0">
						<tbody>
							<tr>
                                <div class="row mb-3">
                                    <div class="col-lg-12" id="research_upload">
                                        <div class="row">
                                            <input type="file" class="filepond filepond-input-multiple" id="research_pdf" multiple data-allow-reorder="true" data-max-files="1">
                                        </div>
                                    </div>
                                </div>
							</tr>
						</tbody>
					</table>
					<div class="mt-4 justify-content-center">
						<button type="submit" id="upload_submit" class="w-100 btn btn-primary bg-gradient fw-medium waves-effect waves-light">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>