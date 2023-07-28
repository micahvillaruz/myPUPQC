<!--View Research Record Modal-->
<div class="modal fade" id="viewResearchInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
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
                                    <h5 class="fs-13 mb-1">Research Co-Author</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_co_author"></div>
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
                                    <h5 class="fs-13 mb-1">Category</h5>
                                </div>
                                <div class="d-flex fs-13 fw-medium">
                                    <div class="d-flex fs-13 fw-medium" id="view_research_category"></div>
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

<!-- Modal for Research Document Preview -->
<div id="research_document_preview" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="philhealth_id" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center" id="philhealth_id_label"> <i class="ri-information-line fs-3 text-info me-2"></i>Research Document Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
            <input type="hidden" id="hid_research_id" name="hid_research_id" />
                <h5 class="fs-15 text-primary">
                    This is the Research Document uploaded in ResearchCop.
                </h5>
                <h5 class="fs-15 text-info">
                    Research Title: <span id="hid_research_title"></span>
                </h5>
                <div id="philhealth_id_content">
                    <div class="d-flex justify-content-center">
                        <embed src="" id="document_preview" type="application/pdf" width="100%" height="800px" alt="Research Document">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>