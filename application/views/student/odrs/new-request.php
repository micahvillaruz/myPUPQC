<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">New Request</h5>
      </div>
      <div class="card-body">
        <form>
          <div class="row g-3">
            <div class="col-lg-12">
              <label for="course_when_admitted" class="form-label">Program / Course</label>
              <div class="input-group">
                <select class="form-select" id="course_when_admitted" name="course_when_admitted" disabled>
                  <option value="" disabled>Select Program / Course</option>
                  <option value="1">Bachelor of Science in Business Administration Major in Marketing Management</option>
                  <option value="2" selected>Bachelor of Science in Information Technology</option>
                  <option value="3">Bachelor of Science in Business Teacher's Education</option>
                  <option value="4">Bachelor of Science in Business Administration Major in Human Resource Development Management</option>
                  <option value="5">Bachelor of Science in Business Administration Major in Entrepreneurship</option>
                  <option value="6">Bachelor of Public Administration Major in Public Financial Management</option>
                </select>
                <button class="btn btn-outline-primary" type="button">Update</button>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <label for="education_status" class="form-label">Documents for</label>
              <div class="input-group">
                <select class="form-select" id="education_status" name="education_status" disabled>
                  <option value="" disabled>Select Status</option>
                  <option value="1" selected>Undergraduate Student</option>
                  <option value="2">Graduate Student</option>
                </select>
                <button class="btn btn-outline-primary" type="button">Update</button>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12 mt-4">
              <label for="document_type" class="form-label">Type of Document: (Choose at least 1)</label>
              <!-- Nav tabs -->
              <ul class="nav nav-pills nav-custom-outline nav-primary mb-1" role="tablist">
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link active" data-bs-toggle="tab" href="#tor" role="tab">Transcript of Records</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-bs-toggle="tab" href="#certificates" role="tab">Certifications</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-bs-toggle="tab" href="#unclaimed" role="tab">Unclaimed</a>
                </li>
                <li class="nav-item waves-effect waves-light">
                  <a class="nav-link" data-bs-toggle="tab" href="#cav" role="tab">CAV (CHED/DFA/WES/CES)</a>
                </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content text-muted">
                <div class="tab-pane active" id="tor" role="tabpanel">
                  <table class="table dt-responsive nowrap align-middle" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 10px">
                        </th>
                        <th data-ordering="false" class="col-12">
                          Document (Click the document/s you want to request)</th>
                        <th class="col-12">Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certified True Copy of Transcript of Records
                          </div>
                          <small class="d-flex">
                            (Photocopy of your Original TOR is REQUIRED - Must capture the whole page including the signatories)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Transcript of Records - Copy for (Undergraduate) 1st Year
                          </div>
                          <small class="d-flex">
                            (Must already have Cert. of Transfer Credential or Honorable Dismissal)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Transcript of Records - Copy for (Undergraduate) 2nd Year
                          </div>
                          <small class="d-flex">
                            (Must already have Cert. of Transfer Credential or Honorable Dismissal)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Transcript of Records - Copy for (Undergraduate) 3rd and 4th Year
                          </div>
                          <small class="d-flex">
                            (Must already have Cert. of Transfer Credential or Honorable Dismissal)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Transcript of Records - Copy for (Undergraduate) 5th Year
                          </div>
                          <small class="d-flex">
                            (Must already have Cert. of Transfer Credential or Honorable Dismissal)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Transcript of Records - For evaluation/reference (Undergraduate) 1st Year
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Transcript of Records - For evaluation/reference (Undergraduate) 2nd Year
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Transcript of Records - For evaluation/reference (Undergraduate) 3rd and 4th Year
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Transcript of Records - For evaluation/reference (Undergraduate) 5th Year
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td class="py-0">
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="certificates" role="tabpanel">
                  <table class="table dt-responsive nowrap align-middle" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 10px">
                        </th>
                        <th data-ordering="false" class="col-12">
                          Document (Click the document/s you want to request)</th>
                        <th class="col-12">Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certificate of Grades (For Cross Enrollee)
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certificate of Transfer Credential (Honorable Dismissal)
                          </div>
                          <small class="d-flex">
                            (LETTER OF REQUEST TO TRANSFER is required)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certificate of Units Earned
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certification for NSTP Serial Number
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certification of English as Medium Of instruction
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certification of English as Medium Of instruction for Australia
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certification of English as Medium Of instruction for Japan
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certification of Enrollment/Attendance
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certification of Non-Issuance of Special Order (S.O.)
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td class="py-0">
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Certification of Subject Description
                          </div>
                          <small class="d-flex">
                            (150 pesos per subject)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Informative Copy of Grades / Certified Copy of Grades
                          </div>
                          <small class="d-flex">
                            (For transfer to other school or scholarship)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Re-print Credentials / Counter Checking
                          </div>
                          <small class="d-flex">
                            (DON'T CHOOSE - Unless suggested by the Registrar's Staff)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Special Certification required by Agency/gov't Offices
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td class="py-0">
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="unclaimed" role="tabpanel">
                  <table class="table dt-responsive nowrap align-middle" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 10px">
                        </th>
                        <th data-ordering="false" class="col-12">
                          Document (Click the document/s you want to request)</th>
                        <th class="col-12">Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            Retrieval of Unclaimed Request
                          </div>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane" id="cav" role="tabpanel">
                  <table class="table dt-responsive nowrap align-middle" style="width: 100%">
                    <thead>
                      <tr>
                        <th scope="col" style="width: 10px">
                        </th>
                        <th data-ordering="false" class="col-12">
                          Document (Click the document/s you want to request)</th>
                        <th class="col-12">Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            CAV-CHED (Commission on Higher Education)
                          </div>
                          <small class="d-flex">
                            (The documents will be prepared by the Registrar in a sealed envelope, and the client will forward to CHED)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            CAV-DFA/Apostille - Red Ribbon (For Undergrad)
                          </div>
                          <small class="d-flex">
                            ([TOR+Cert of Non SO+Cert of English Medium of Instruction] - The documents will be prepared by the Registrar in a sealed envelope, <br> and the client will forward to DFA for CAV authentication (Red Ribbon). The client must provide photocopy of TOR & Diploma)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <div class="form-check">
                            <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1" />
                          </div>
                        </th>
                        <td>
                          <div class="d-flex">
                            WES Form, ICES Form, IQAS Form
                          </div>
                          <small class="d-flex">
                            (Form ONLY. Please request for other credentials to be included in WES/ICES/IQAS)
                          </small>
                          <div class="mt-1">
                            <button type="button" class="btn btn-sm btn-secondary btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails"><i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> View Details</button>
                          </div>
                        </td>
                        <td>
                          <div class="input-step step-primary">
                            <button type="button" class="minus">–</button>
                            <input type="number" class="product-quantity" value="1" min="0" max="100" readonly />
                            <button type="button" class="plus">+</button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <label for="discription" class="form-label">Purpose of Request</label>
              <select class="js-example-basic-single" name="purpose">
                <option value="" selected disabled>Select Purpose</option>
                <option value="1">Readmission</option>
                <option value="2">Employment</option>
                <option value="3">Transfer to other school</option>
                <option value="4">Board / Licensure Examination</option>
                <option value="5">Further Studies</option>
                <option value="6">Scholarship</option>
                <option value="7">Others</option>
              </select>
              <textarea class="form-control mt-3" id="purpose" rows="3" placeholder="Other Purpose"></textarea>
            </div>
            <!--end col-->
            <div class="col-lg-12">
              <div>
                <div class="form-check form-check-block">
                  <input class="form-check-input" type="checkbox" value="option1" />
                  <p class="form-check-label" for="inlineCheckbox2">I agree to the Office of the University Registrar's <a href="" class="link-primary fw-medium">Terms and Conditions</a></p>
                </div>
                <div class="form-check form-check-block">
                  <input class="form-check-input" type="checkbox" value="option2" />
                  <p class="form-check-label" for="inlineCheckbox3">I checked ALL the documents I need to request <small>(Kindly check ALL the documents you need before clicking "Submit")</small></p>
                </div>
              </div>
            </div>
            <!--end col-->
            <div class="col-lg-12 mt-4">
              <div class="text-center d-grid">
                <button class="btn btn-primary bg-gradient">Submit</button>
              </div>
            </div>
          </div>
          <!--end row-->
        </form>
      </div>
    </div>
  </div>
  <!--end col-->
</div>
<!--end row-->
</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->