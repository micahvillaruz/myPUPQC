<p align="right">
  <input type="button" class="btn btn-primary" value="New Immunization Record">
</p>
<div class="row text-muted">
    <div>
      <div class="card">
      <h5 class="card-header mb-3 text-white p-3 bg-primary">Immunization: Protection Against Various Diseases</h5>
        <div class="card-body">
        <div class="">
        <ul class="mx-4">
            <li> Listed below are immunization record that you can add. This can be used by the doctor/ dentist/ guidance as a reference.</li>
            <li> Please <span class="fw-bold"> upload</span> your vaccination by clicking  <i class ="ri-upload-2-line"></i> <span class="fw-bold">upload vaccination card, </span> you may <span class="fw-bold">upload photo </span> instead if it contains all the doses you have taken for a vaccine.</li>
            <li> You can edit/delete the records you added.</li>
        </ul>
          <h5 class="text-primary"> <span class="fw-bold"> COVID-19</h5>
          <ul class="mx-4">
            <li> For 1st dose vaccine (ie. J&J / Jansen) please update your immunization record and your 1-dose-only instead.</li>
            <li> If you have primary series vaccination (1st, 2nd, or 1st dose only) and booster series vaccination, encode the individual dosage and upload your vaccination card.</li>
        </ul>
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Dosage</th>
              <th scope="col">Date Administered</th>
              <th scope="col">Vaccination Card</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          <tr>
              <td>1st</td>
              <td>
              <div>
              <input type="date" class="form-control" id="exampleInputdate">
              </div></td>
              <td>
              <div>
              <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div></td>
              <td>
                <div class="dropdown d-inline-block">
                      <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editImmunizationModal"><i class="ri-edit-2-fill"></i></button>
                      <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteImmunizationModal"><i class="ri-delete-bin-5-fill"></i></button>
                </div>
              </td>
            </tr>
          <tr>
            <td>2nd</td>
                <td>
                <div>
                <input type="date" class="form-control" id="exampleInputdate">
                </div></td>
                <td>
                <div>
                <input class="form-control form-control-sm" id="formFileSm" type="file">
                </div></td>
                <td>
                <div class="dropdown d-inline-block">
                      <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editImmunizationModal"><i class="ri-edit-2-fill"></i></button>
                      <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteImmunizationModal"><i class="ri-delete-bin-5-fill"></i></button>
                    </div>
                </td>
            </tr>
          <tr>
        <td>1st Booster</td>
          <td>
            <div>
              <input type="date" class="form-control" id="exampleInputdate">
            </div></td>
            <td>
            <div>
              <input class="form-control form-control-sm" id="formFileSm" type="file">
            </div></td>
            <td>
            <div class="dropdown d-inline-block">
                  <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editImmunizationModal"><i class="ri-edit-2-fill"></i></button>
                  <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteImmunizationModal"><i class="ri-delete-bin-5-fill"></i></button>
              </div>
              </td>
            </tr>
          <tr>
              <td>2nd Booster</td>
              <td>
              <div>
              <input type="date" class="form-control" id="exampleInputdate">
              </div></td>
              <td>
              <div>
              <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div></td>
              <td>
              <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editImmunizationModal"><i class="ri-edit-2-fill"></i></button>
                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteImmunizationModal"><i class="ri-delete-bin-5-fill"></i></button>
                 </div>
              </td>
          </tr>
        </div>
      </tbody>
    </table>
    <div class="row text-muted">
  <div class="col-lg-12">
    <div>
      <div class="card">
        <div class="card-body">
        <div class="">
          <h5 class="text-primary"> <span class="fw-bold"> FLU</h5>
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Dosage</th>
              <th scope="col">Date Administered</th>
              <th scope="col">Vaccination Card</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <td></td>
              <td>
              <div>
              <input type="date" class="form-control" id="exampleInputdate">
              </div></td>
              <td>
              <div>
              <input class="form-control form-control-sm" id="formFileSm" type="file">
              </div></td>
              <td>
              <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editImmunizationModal"><i class="ri-edit-2-fill"></i></button>
                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteImmunizationModal"><i class="ri-delete-bin-5-fill"></i></button>
                  </div>
              </td>
            </tr>
          </div>
        </tbody>
      </table>

                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!--end card-body-->
      </div>
      <!-- end card -->
    </div>
  </div>
  <!--end col-->
</div>
<!--end row-->
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
        <!--end card-body-->
      </div>
      <!-- end card -->
    </div>
  </div>
  <!--end col-->
</div>
<!--end row-->