$(function() {
    viewFacilities()
})

// View Facility details
viewFacilityDetails = (reservation_id) => {
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
        url: apiURL + `evrsers/super_admin/view_reservation/${reservation_id}`,
        dataType: 'json',
        success: (result) => {
            const userData = result.data
            const venue = userData.facilities_assigned_to_reservation.facility_name
            const venueimage = userData.facilities_assigned_to_reservation.facility_picture
            console.log(userData)
            console.log(venue)

            $('#reserve_number').html(userData.reservation_number)
            $('#organization').html(userData.organization_name)
            $('#event_title').html(userData.event_title)
            $('#facility_name').html(venue)
            $('#facility_image').html(
                `<embed src="${venueimage}" class="w-75"></embed>`,
            )
            $('#event_details').html(userData.event_details)
            $('#reserve_date').html(moment(userData.reserve_date).format('LL'))
            const time = `${userData.time_from} - ${userData.time_to}`
            $('#time').html(time)
            $('#remarks').html(userData.remarks)
            $('#attachment1').html(
                `<i class="ri-file-fill text-primary me-2"></i><a href="${userData.reserve_attachments_1}" target="_blank" class="link fw-bold">Event Request</a>`,
            )
            $('#attachment2').html(
                `<i class="ri-file-text-fill text-primary me-2"></i><a href="${userData.reserve_attachments_2}" target="_blank" class="link fw-bold">Concept Paper</a>`,
            )
            $('#attachment3').html(
                `<i class="ri-file-copy-2-fill text-primary me-2"></i><a href="${userData.reserve_attachments_2}" target="_blank" class="link fw-bold">Others</a>`,
            )
        },
    })
}

// View all of the facilities
viewFacilities = (reservation_id) => {
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
        url: apiURL + `evrsers/super_admin/view_reservation/${reservation_id}`,
        dataType: 'json',
        success: (result) => {
            const userData = result.data
            const venue = userData.facilities_assigned_to_reservation.facility_name
            const venueimage = userData.facilities_assigned_to_reservation.facility_picture
            console.log(userData)
            console.log(venue)

            $('#reserve_number').html(userData.reservation_number)
            $('#organization').html(userData.organization_name)
            $('#event_title').html(userData.event_title)
            $('#facility_name').html(venue)
            $('#facility_image').html(
                `<embed src="${venueimage}" class="w-75"></embed>`,
            )
            $('#event_details').html(userData.event_details)
            $('#reserve_date').html(moment(userData.reserve_date).format('LL'))
            const time = `${userData.time_from} - ${userData.time_to}`
            $('#time').html(time)
            $('#remarks').html(userData.remarks)
            $('#attachment1').html(
                `<i class="ri-file-fill text-primary me-2"></i><a href="${userData.reserve_attachments_1}" target="_blank" class="link fw-bold">Event Request</a>`,
            )
            $('#attachment2').html(
                `<i class="ri-file-text-fill text-primary me-2"></i><a href="${userData.reserve_attachments_2}" target="_blank" class="link fw-bold">Concept Paper</a>`,
            )
            $('#attachment3').html(
                `<i class="ri-file-copy-2-fill text-primary me-2"></i><a href="${userData.reserve_attachments_2}" target="_blank" class="link fw-bold">Others</a>`,
            )
        },
    })
}