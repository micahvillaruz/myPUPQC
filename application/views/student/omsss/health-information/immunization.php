<!-- <p align="right">
  <input type="button" class="btn btn-primary" value="New Immunization Record">
</p> -->
<div class="row ">
    <div class="card">
        <h5 class="card-header mb-3 text-white p-3 bg-primary">Immunization: Protection Against Various Diseases</h5>
        <div class="card-body">
            <h5 class="text-primary"> <span class="fw-bold"> COVID-19</h5>
            <ul class="mx-4">
                <li> Listed below are immunization record that you can add. This can be used by the doctor/ dentist/ guidance as a reference.</li>
                <li> Please <span class="fw-bold"> upload</span> your vaccination by clicking <i class="ri-upload-2-line"></i> <span class="fw-bold">upload vaccination card, </span> you may view/edit the records you added if it contains all the doses you have taken for a vaccine.</li>
                <li> I understood and agree to PUP Online Medical Service System's
                    <a href="" data-bs-toggle="modal" data-bs-target="#dataPrivacy"><span class="fw-bold"> Privacy Statement </span></a>.
                    </label>
                    <div id="dataPrivacy" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="dataPrivacyStatement" aria-hidden="true" style="display: none;">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title d-flex align-items-center" id="myModalLabel"> <i class="ri-information-line fs-3 text-info me-2"></i> Data Privacy Act of 2012</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="fs-15 text-primary">
                                        Use of Personal Data
                                    </h5>
                                    <p class="">PUP uses the data we collect for three (3) fundamental purposes:</p>
                                    <ol class="">
                                        <li>To operate as a higher education institution (HEI) and provide (including improving and customizing) the services we offer,</li>
                                        <li>To send communication, including informative communication, and</li>
                                        <li>Promote the University, whether in our Services or in third-party services supported by advertising.</li>
                                    </ol>
                                    <p class="">In carrying out these purposes, we combine data we collect to give you a more seamless, consistent and customized experience. However, to enhance privacy, we have safety measures designed to prevent certain data combinations. For example, when you are not yet authenticated (or not signed in), we store data we collect from you separately from any account information that directly identifies you (such as your name, email address or contact number).</p>

                                    <h5 class="fs-15 text-primary">
                                        Security of Personal Data
                                    </h5>
                                    <p class="">PUP is committed to protecting the security of your personal data. We use a variety of security technologies and procedures to help protect your personal data from unauthorized access, use or disclosure. For example, we store the personal data you provide on computer systems that have limited access and are in controlled facilities. When we transmit highly confidential data (such as your name or password) over the Internet, we protect it through the use of encryption.</p>

                                    <h5 class="fs-15 text-primary">
                                        Retention of Personal Data
                                    </h5>
                                    <p class="">The University retains personal data for as long as necessary to provide the services and fulfill the transactions you have requested or may request in the future, or for other essential purposes such as complying with our commitments, legal obligations, resolving disputes, and enforcing our agreements. Because these needs can vary for different data types in the context of different products, actual retention periods can vary significantly. The criteria used to determine the retention periods include:</p>
                                    <ul class="">
                                        <li>
                                            <b>How long is the personal data needed to provide the services operated by the University?</b>
                                            This includes such things as maintaining and improving the performance of those services, keeping our systems secure, and maintaining appropriate academic, student, and financial records. This is the general rule that establishes the baseline for most data retention periods
                                        </li>
                                        <li>
                                            <b>Is PUP subject to a legal, contractual, or similar obligation to retain the data?</b>
                                            Examples can include mandatory data retention laws in the Philippines (or applicable jurisdiction for third-party providers), Government orders to preserve data relevant to an investigation, or data that must be retained for the purposes of due process.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        You must read and acknowledge the Data Privacy Statement as declared above.
                    </div>

        </div>
        </li>
        </ul>
        <table class="table table-striped">
            <thead>
                <tr>
                    <!-- <th scope="col">Dosage</th>-->
                    <!--<th scope="col">Date Administered</th> -->
                    <th scope="col">Vaccination Card</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <td><div>
                  <input type="date" class="form-control" id="exampleInputdate">
                </div></td> -->
                    <td>
                        <div>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                    </td>
                    <td>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewImmunizationModal"><i class="ri-eye-fill"></i></button>
                            <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editImmunizationModal"><i class="ri-edit-2-fill"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>