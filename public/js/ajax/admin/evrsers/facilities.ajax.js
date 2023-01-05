$(function() {
    viewFacilities()

    // on addFacility button click
    $('#addFacilityBtn').on('click', function(e) {
        e.preventDefault() // prevent page refresh
        addNewFacility()
    })
})

// View Facility details
// viewFacilityDetails = (reservation_id) => {
//     $.ajaxSetup({
//         headers: {
//             Accept: 'application/json',
//             Authorization: 'Bearer ' + TOKEN,
//             ContentType: 'application/x-www-form-urlencoded',
//         },
//     })

//     $.ajax({
//         type: 'GET',
//         cache: false,
//         url: apiURL + `evrsers/super_admin/view_reservation/${reservation_id}`,
//         dataType: 'json',
//         success: (result) => {
//             const userData = result.data
//             const venue = userData.facilities_assigned_to_reservation.facility_name
//             const venueimage = userData.facilities_assigned_to_reservation.facility_picture
//             console.log(userData)
//             console.log(venue)

//             $('#reserve_number').html(userData.reservation_number)
//             $('#organization').html(userData.organization_name)
//             $('#event_title').html(userData.event_title)
//             $('#facility_name').html(venue)
//             $('#facility_image').html(
//                 `<embed src="${venueimage}" class="w-75"></embed>`,
//             )
//             $('#event_details').html(userData.event_details)
//             $('#reserve_date').html(moment(userData.reserve_date).format('LL'))
//             const time = `${userData.time_from} - ${userData.time_to}`
//             $('#time').html(time)
//             $('#remarks').html(userData.remarks)
//             $('#attachment1').html(
//                 `<i class="ri-file-fill text-primary me-2"></i><a href="${userData.reserve_attachments_1}" target="_blank" class="link fw-bold">Event Request</a>`,
//             )
//             $('#attachment2').html(
//                 `<i class="ri-file-text-fill text-primary me-2"></i><a href="${userData.reserve_attachments_2}" target="_blank" class="link fw-bold">Concept Paper</a>`,
//             )
//             $('#attachment3').html(
//                 `<i class="ri-file-copy-2-fill text-primary me-2"></i><a href="${userData.reserve_attachments_2}" target="_blank" class="link fw-bold">Others</a>`,
//             )
//         },
//     })
// }

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
                } else if (facility.facility_status == 'Deleted') {
                    facilitiesHTML += `<h4><span class="badge badge-soft-danger badge-border mt-2">${facility.facility_status}</span></h3></div>`
                }
                facilitiesHTML += `
                                    <div class="col-6">
                                        <button type = "button" class = "btn btn-primary waves-effect waves-light float-end fs-5" onclick = "editFacilityDetails('${facility.facility_id}')" data-bs-toggle = "modal" data-bs-target = "#editFacilityModal"><i class = "ri-edit-fill me-2 mt-2 fs-6"></i>Edit Facility</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                `
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