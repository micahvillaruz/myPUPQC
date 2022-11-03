<!-- <p align="right">
  <input type="button" class="btn btn-primary" value="New Immunization Record">
</p> -->
<div class="row text-muted">
  <div class="card">
    <h5 class="card-header mb-3 text-white p-3 bg-primary">Immunization: Protection Against Various Diseases</h5>
    <div class="card-body">
      <h5 class="text-primary"> <span class="fw-bold"> COVID-19</h5>
      <ul class="mx-4">
        <li> Listed below are immunization record that you can add. This can be used by the doctor/ dentist/ guidance as a reference.</li>
        <li> Please <span class="fw-bold"> upload</span> your vaccination by clicking <i class="ri-upload-2-line"></i> <span class="fw-bold">upload vaccination card, </span> you may <span class="fw-bold">upload photo </span> instead if it contains all the doses you have taken for a vaccine.</li>
        <li> You can edit/delete the records you added.</li>
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