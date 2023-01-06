$(function() {
    viewFacilities()

    // on addFacility button click
    $('#addFacilityBtn').on('click', function(e) {
        e.preventDefault() // prevent page refresh
        addNewFacility()
    })
})

// View all of the facilities
viewFacilities = () => {
    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
            ContentType: 'application/x-www-form-urlencoded',
        },
    })

    $.ajax({
        type: 'GET',
        cache: false,
        url: apiURL + `evrsers/super_admin/view_facility/`,
        dataType: 'json',
        success: (result) => {
            //Generate card through the data
            // where it should display the following:
            // - facility-image
            // - facility-name
            // - facility-description
            // - facility-status
            // - edit-facility button
            //  and display badge for the status using conditional statements:
            //  - if status is Available, display badge-soft-success
            //  - if status is Unavailable, display badge-soft-warning
            //  - if status is Deleted, display badge-soft-danger

            const facilities = result.data
            console.log(facilities)
            let facilitiesHTML = ''
            facilities.forEach((facility) => {
                if (facility.facility_status !== 'Deleted') {
                    let venue = facility.facility_name
                    let venue_name = venue.toUpperCase()
                    facilitiesHTML += `
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mb-3">
                        <div class="card border card-border-primary h-100">
                            <img src="${facility.facility_picture}" class="card-img-top" alt="" style="height: 260px;">
                                <div class="card-body">
                                    <h1 class="fs-5 card-title text-dark fw-bold">${venue_name}</h1>
                                    <p class="card-text">${facility.facility_description}</p>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-6">`
                        // display badge for the status using conditional statements:
                        // - if status is Available, display badge-soft-success
                        // - if status is Unavailable, display badge-soft-warning
                        // - if status is Deleted, display badge-soft-danger
                    if (facility.facility_status == 'Available') {
                        facilitiesHTML += `<h4><span class="badge badge-soft-success badge-border mt-2">${facility.facility_status}</span></h4></div>`
                    } else if (facility.facility_status == 'Unavailable') {
                        facilitiesHTML += `<h4><span class="badge badge-soft-warning badge-border mt-2">${facility.facility_status}</span></h4></div>`
                    }
                    facilitiesHTML += `
                                        <div class="col-6">
                                            <button type = "button" class = "btn btn-primary waves-effect waves-light float-end fs-5" onclick="viewSpecificFacility('${facility.facility_id}')" data-bs-toggle = "modal" data-bs-target = "#editFacilityModal" id="viewFacility"><i class = "ri-edit-fill me-2 mt-2 fs-6"></i>Edit Facility</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    `

                    // set the value of the input fields with the id's: facility-name-edit, facility-description-edit, facility-status-edit
                }
            })

            $('#facilities').html(facilitiesHTML)
        },
    })
}

addNewFacility = () => {
    // with the id's: orgfloatingInput, eventTitlefloatingInput, eventDetailsfloatingInput,
    // reserveDatefloatingInput, timeFromfloatingInput, timeTofloatingInput
    // inputGroupFile01, inputGroupFile02, inputGroupFile03
    const facility_name = document.getElementById('facility-name')
    const facility = facility_name.value
    const facility_description = document.getElementById('facility-description')
    const description = facility_description.value
    const facility_picture = document.getElementById('facility-pic').files[0]
    const facility_pic = new Blob([facility_picture], { type: facility_picture.type })
        // const facility_picture = form.get('facility-pic')

    const formData = new FormData()
    formData.append('facility_name', facility)
    formData.append('facility_description', description)
    formData.append('facility_picture', facility_pic)
    formData.append('reserve_status', 'Pending')

    // all values are not empty, proceed to ajax call
    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
        },
    })

    $.ajax({
        type: 'POST',
        url: apiURL + `evrsers/super_admin/add_facility/`,
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: (result) => {
            const data = result.data
            console.log(data)

            //  display success message using sweetalert2
            if (result) {
                $('#add-facility-modal').modal('hide')
                Swal.fire({
                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a facility!</p></div></div>',
                    showCancelButton: !0,
                    showConfirmButton: !1,
                    cancelButtonClass: 'btn btn-success w-xs mb-1',
                    cancelButtonText: 'Ok',
                    buttonsStyling: !1,
                    showCloseButton: !0,
                }).then(function() {
                    viewFacilities()
                })
            }
        },
    }).fail((xhr) => {
        Swal.fire({
            html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">${
				JSON.parse(xhr.responseText).message
			}</p></div></div>`,
            showCancelButton: !0,
            showConfirmButton: !1,
            cancelButtonClass: 'btn btn-danger w-xs mb-1',
            cancelButtonText: 'Dismiss',
            buttonsStyling: !1,
            showCloseButton: !0,
        })
    })
}

viewSpecificFacility = (facility_id) => {
    //    do function after viewFacility is clicked
    // console.log(facility_id)

    $('#deactFacilityBtn').on('click', function(e) {
        e.preventDefault() // prevent page refresh
        deactFacility(facility_id)
    })

    $('#editFacilityBtn').on('click', function(e) {
        e.preventDefault() // prevent page refresh
        editFacilityDetails(facility_id)
    })

    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
        },
    })

    $.ajax({
        type: 'GET',
        url: apiURL + `evrsers/super_admin/view_specific_facility/${facility_id}`,
        success: (result) => {
            data = result.data
                // show modal
            console.log(facility_id, data)
            $('#facility-name-edit').val(data.facility_name)
            $('#facility-description-edit').val(data.facility_description)
            facility_status = data.facility_status
            if (facility_status == 'Available') {
                $('#facility-status-edit').html(
                    `<option value="Available" selected>Available</option>
                                <option value="Unavailable">Unavailable</option>
                                `,
                )
            } else {
                $('#facility-status-edit').html(
                    `<option value="Available">Available</option>
                                <option value="Unavailable" selected>Unavailable</option>
                                `,
                )
            }
        },
    })
}

// edit facility details
editFacilityDetails = (facility_id) => {
    //    do function after editFacilityBtn clicked

    // with the id's: facility-name-edit, facility-description-edit, facility-status-edit
    const facility_name = document.getElementById('facility-name-edit')
    const facility = facility_name.value
    const facility_description = document.getElementById('facility-description-edit')
    const description = facility_description.value
    const facility_status = document.getElementById('facility-status-edit')
    const status = facility_status.value

    const formData = new FormData()
    formData.append('facility_name', facility)
    formData.append('facility_description', description)
    formData.append('facility_status', status)

    // all values are not empty, proceed to ajax call
    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
        },
    })

    $.ajax({
        type: 'PUT',
        url: apiURL + `evrsers/super_admin/edit/${facility_id}`,
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: (result) => {
            const data = result.data
            console.log(data)

            //  display success message using sweetalert2
            if (result) {
                Swal.fire({
                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully edited a facility!</p></div></div>',
                    showCancelButton: !0,
                    showConfirmButton: !1,
                    cancelButtonClass: 'btn btn-success w-xs mb-1',
                    cancelButtonText: 'Ok',
                    buttonsStyling: !1,
                    showCloseButton: !0,
                }).then(function() {
                    viewFacilities()
                })
            } else {
                Swal.fire({
                    html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">${
							JSON.parse(xhr.responseText).message
						}</p></div></div>`,
                    showCancelButton: !0,
                    showConfirmButton: !1,
                    cancelButtonClass: 'btn btn-danger w-xs mb-1',
                    cancelButtonText: 'Dismiss',
                    buttonsStyling: !1,
                    showCloseButton: !0,
                })
            }
        },
    })
}

// Deactivate facility
deactFacility = (facility_id) => {
    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
            ContentType: 'application/x-www-form-urlencoded',
        },
    })
    $.ajax({
        url: apiURL + `evrsers/super_admin/delete/${facility_id}`,
        type: 'DELETE',
        ContentType: 'application/x-www-form-urlencoded',
        success: (result) => {
            $('#editFacilityModal').modal('hide')
            if (result) {
                Swal.fire({
                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully deactivated a facility!</p></div></div>',
                    showCancelButton: !0,
                    showConfirmButton: !1,
                    cancelButtonClass: 'btn btn-success w-xs mb-1',
                    cancelButtonText: 'Ok',
                    buttonsStyling: !1,
                    showCloseButton: !0,
                }).then(function() {
                    // reload page
                    window.location.reload()
                })
            }
        },
    }).fail((xhr) => {
        Swal.fire({
            html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">${
				JSON.parse(xhr.responseText).message
			}</p></div></div>`,
            showCancelButton: !0,
            showConfirmButton: !1,
            cancelButtonClass: 'btn btn-danger w-xs mb-1',
            cancelButtonText: 'Dismiss',
            buttonsStyling: !1,
            showCloseButton: !0,
        })
    })
}