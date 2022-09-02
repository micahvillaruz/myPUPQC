<div class="row">
  <div class="col-4">
    <!-- card -->
    <div class="card card-animate">
      <div class="card-body bg-soft-primary p-3">
        <h4 class="text-uppercase text-center">Advisory to our Clients</h4>
        <p class="mt-3">
          As part of our monitoring and evaluation, and to improve the quality of our system and services, all requests in the <span class="fw-bold">Online Document Request System (ODRS)</span> with incomplete and invalid requirements shall be automatically deleted after <span class="fw-bold">90 days</span> of noncompliance. Please be advised that the deletion from the system may be done without prior notice or approval from the requesting client.
        </p>
        <p>Please be guided accordingly.</p>
      </div>
      <!-- end card body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->

  <div class="col-4">
    <!-- card -->
    <div class="card card-animate">
      <div class="card-body bg-soft-success p-3">
        <h4 class="text-uppercase text-center">YOU CAN NOW PAY ONLINE VIA LINK.BIZ PORTAL PAYMENT</h4>
        <p class="mt-3">
          Watch this video to know the steps on how to pay online via Link.Biz Portal Payment
        </p>
        <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FThePUPOfficial%2Fvideos%2F385774630279503%2F&show_text=0&width=560" width="100%" height="270" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
      </div>
      <!-- end card body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->

  <div class="col-4">
    <!-- card -->
    <div class="card card-animate">
      <div class="card-body bg-soft-warning p-3">
        <h4 class="text-uppercase text-center">For payments settled through:</h4>
        <p class="mt-3">
          a.PUPMIS account name with an account number 0682 - 2221 - 23: Kindly wait for the payment verification from the <span class="fw-bold">Fund Management Office (FMO)</span>, and for the payment to be reflected in the ODRS.The payment verification will be sent to the email address you have registered.
        </p>
        <p>Kindly check your ODRS account from time to time for updates regarding your requested documents.ODRS will alert you if your documents are ready for pick - up.Thank you!</p>
      </div>
      <!-- end card body -->
    </div>
    <!-- end card -->
  </div>
  <!-- end col -->
</div>
<!-- end row-->

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Requests</h5>
      </div>
      <div class="card-body">
        <table id="model-datatables" class="table nowrap align-middle" style="width: 100%">
          <thead class="bg-light">
            <tr>
              <th>Control Number</th>
              <th>Date Filed</th>
              <th>Details</th>
              <th>Documents Requested</th>
              <th>Payment Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <span class="text-primary fw-medium">20220829-0067</span>
              </td>
              <td>
                12 Oct, 2021<small class="text-muted ms-1">10:05 AM</small>
              </td>
              <td>
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <span class="fw-medium badge bg-dark me-1">Clearance: </span>
                      </td>
                      <td>Undergraduate Student</td>
                    </tr>
                    <tr>
                      <td>
                        <span class="fw-medium badge bg-dark me-1">Course: </span>
                      </td>
                      <td>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</td>
                    </tr>
                    <tr>
                      <td>
                        <span class="fw-medium badge bg-dark me-1">Purpose: </span>
                      </td>
                      <td>Scholarship</td>
                    </tr>
                  </tbody>
                </table>
                <div class="mt-3 d-flex flex-column justify-content-end">
                  <button type="button" class="btn btn-sm btn-secondary bg-gradient waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">View Details</button>
                  <small class="d-block fst-italic text-center">Always "View Details" for more information</small>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center mb-2">
                  <span class="fs-11 badge badge-soft-dark badge-border">
                    <i class="ri-file-list-3-fill text-warning me-1"></i>
                    Informative Copy of Grades / Certified Copy of Grades
                  </span>
                </div>
                <div class="my-3 d-flex justify-content-end">
                  <button class="btn btn-sm btn-outline-primary btn-border" data-bs-toggle="modal" data-bs-target="#addRequirements">Requirements</button>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <span class="fs-11 badge badge-soft-dark badge-border">
                    <i class="ri-file-list-3-fill text-warning me-1"></i>
                    Transcript of Records - For evaluation/reference (Undergraduate) 1st Year
                  </span>
                </div>
                <div class="my-3 d-flex justify-content-end">
                  <button class="btn btn-sm btn-outline-primary btn-border" data-bs-toggle="modal" data-bs-target="#addRequirements">Requirements</button>
                </div>
              </td>
              <td>
                <div class="d-block badge badge-soft-info align-items-center">
                  <i class="me-2 mdi mdi-cash-fast fs-13"></i>
                  <span class="text-uppercase">Pending</span>
                </div>
              </td>
              <td>
                <div class="vstack gap-2">
                  <a role="button" href="https://odrs.pup.edu.ph/Customer/PaymentVoucher.aspx?a=177059&b=773CEE8CDAA1F6969EAE2C287C1174C725F65D18" class="d-block btn btn-sm btn-primary text-start waves-effect waves-light"><i class="mdi mdi-file-download-outline label-icon align-middle me-2"></i> Claiming/Payment Voucher</a>
                  <button type="button" id="pay-warning" class="btn btn-sm btn-success text-start waves-effect waves-light"><i class="mdi mdi-credit-card-outline label-icon align-middle me-2"></i> Pay Online (Link.BizPortal)</button>
                  <button type="button" class="btn btn-sm btn-warning text-start waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewPaymentOptions"><i class="mdi mdi-cash-multiple label-icon align-middle me-2"></i> Payment Options</button>
                </div>
                <div class="mt-4 d-grid">
                  <button type="button" id="cancel-warning" class="btn btn-sm btn-light waves-effect waves-light fw-medium"><i class="ri-close-fill label-icon align-middle me-2 fs-16"></i> Cancel</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--end row-->