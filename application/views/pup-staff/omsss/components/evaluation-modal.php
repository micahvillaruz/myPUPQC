<div id="aboutEvaluationModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="aboutEvaluationModal" aria-hidden="true" style="display: none;">
    <div class="modal-dialog  modal-dialog-centered dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="ri-information-line fs-3 text-info me-2"></i>
                <h3 class="modal-title d-flex align-items-center" id="evaluation_title">Evaluation Details</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body w-100">
                <h3 class="text-primary text-center">CLIENT EVALUATION DETAILS</h3>
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0 ">Case Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center mb-4">
                            <h5 id="control_no_details" class="fs-4 badge badge-outline-primary fw-bold mb-0"></h5>
                        </div>
                        <div class="mt-4 mx-3">
                            <span class="badge rounded-pill bg-primary fs-12">Personnel Assigned</span>
                            <div class="bg-soft-secondary ms-1 text-wrap">
                                <p id="view_physician_details" class="p-2 fw-medium"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header bg-soft-primary text-dark">
                        <h4 class="mb-0 ">Evaluation</h4>
                    </div>
                    <div class="card-body">
                        <table class="table mb-0">
                            <tbody>
                                <tr>
                                    <td class="align-middle fw-medium">Quality of Service</td>
                                    <td>
                                        <div id="quality_rating_stars">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle fw-medium">Timeliness of Service</td>
                                    <td>
                                        <div id="timeliness_rating_stars">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle fw-medium">Courtesy of Staff</td>
                                    <td>
                                        <div id="courtesy_rating_stars">

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle fw-medium">Comments/Suggestions/Recommendations</td>
                                    <td>
                                        <div id="evaluation_comments_details">

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>