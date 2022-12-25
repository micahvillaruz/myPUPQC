$(function() {
    viewFacilities()
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
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="card border card-border-primary h-100">
                        <img src="${facility.facility_picture}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h1 class="card-title text-dark fw-bold">${venue_name}</h1>
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
                    facilitiesHTML += `<h5><span class="badge bg-soft-success text-success mt-2">${facility.facility_status}</span></h4></div>`
                } else if (facility.facility_status == 'Unavailable') {
                    facilitiesHTML += `<h5><span class="badge bg-soft-warning text-warning mt-2">${facility.facility_status}</span></h4></div>`
                } else if (facility.facility_status == 'Deleted') {
                    facilitiesHTML += `<h5><span class="badge bg-soft-danger text-danger mt-2">${facility.facility_status}</span></h3></div>`
                }
                facilitiesHTML += `
                                    <div class="col-6">
                                        <button type = "button" class = "btn btn-primary waves-effect waves-light float-end" onclick = "editFacilityDetails('${facility.facility_id}')" data-bs-toggle = "modal" data-bs-target = "#editFacilityModal"><i class = "ri-edit-fill me-2 mt-2 fs-6"></i>Edit Facility</button>
                                    </div>
                            </div>
                    </div>
                `
            })
            $('#facilities').html(facilitiesHTML)
        },
    })
}