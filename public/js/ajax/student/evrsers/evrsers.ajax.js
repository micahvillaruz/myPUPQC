$(function() {

    viewReservationDetails()

    $('#addNewReservation').on('submit', function(e) {
        e.preventDefault() // prevent page refresh
        addNewReservation()
    })

})

viewReservationDetails = () => {
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
        url: apiURL + `evrsers/student/view_reservations`,
        dataType: 'json',
        success: (result) => {
            console.log(result)
            const userData = result.data[0]
            console.log(userData)

            if (userData.length !== 0) {
                $('#existing_reservation').removeClass('d-none')
                $('#no_reservation').addClass('d-none')
            }
            // const venue = userData.facilities_assigned_to_reservation.facility_name
            // console.log(venue)

            $('#reserve_number').html(userData.reservation_number)
            let organization_name = userData.organization_name
            if (
                organization_name == 'CHRS' ||
                'COMMITS' ||
                'DOMT.CS' ||
                'FBTO' ||
                'JMS' ||
                'SPAS' ||
                'YES'
            ) {
                $('#organization').html(`<span>${organization_name}</span>`)
            } else if (organization_name == 'KATAGA' || 'MUSA' || 'PSC' || 'Vox Nova' || 'Other') {
                $('#organization').html(`<span>${organization_name}</span>`)
            } else if (organization_name == 'SSC' || 'COL') {
                $('#organization').html(`<span>${organization_name}</span>`)
            }
            $('#organization').html(userData.organization_name)
            event_title = userData.event_title
                // convert to all caps
            event_title = event_title.toUpperCase()
            $('#event_title').html(event_title)
                // $('#facility_name').html(venue)
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
            let reservation_status = userData.reserve_status
            if (reservation_status == 'Pending') {
                $('#reservation-status').html(
                    `<div class="card card-secondary">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="bx fs-1 bx-loader fw-medium me-3"></i>
                                <h3 class="card-text fw-medium text-white my-auto">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'Approved') {
                $('#reservation-status').html(
                    `<div class="card card-success">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="bx fs-1 bx-calendar-check fw-medium me-2"></i>
                                <h3 class="card-text fw-medium text-white my-auto">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'Done') {
                $('#reservation-status').html(
                    `<div class="card card-success">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="bx fs-1 bx-check fw-medium me-2"></i>
                                <h3 class="card-text fw-medium text-white my-auto">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'Cancelled by Student') {
                $('#reservation-status').html(
                    `<div class="card card-danger">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="bx fs-1 bx-x fw-medium me-2"></i>
                                <h3 class="card-text fw-medium text-white my-auto">Cancelled</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'Cancelled by Staff') {
                $('#reservation-status').html(
                    `<div class="card card-danger">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="bx fs-1 bx-x fw-medium me-2"></i>
                                <h3 class="card-text fw-medium text-white my-auto">Cancelled</h3>
                            </div>
                        </div>
                    </div>`,
                )
            }

            const reservation_id = userData.reservation_id

            $('#cancelBtn').on('click', function() {
                cancelReservation(reservation_id)
            })
        },
    })
}

// cancel reservation function
// cancelBtn clicked -> show cancelReservationModal -> if cancel-reservation clicked -> cancelReservation(reservation_id)
function cancelReservation(reservation_id) {
    $('#cancelReservationModal').modal('show')
    $('#cancel-reservation').on('click', function() {
        $.ajaxSetup({
            headers: {
                Accept: 'application/json',
                Authorization: 'Bearer ' + TOKEN,
                ContentType: 'application/x-www-form-urlencoded',
            },
        })
        $.ajax({
            url: apiURL + 'evrsers/student/cancel_reservation/' + reservation_id,
            type: 'DELETE',
            ContentType: 'application/x-www-form-urlencoded',
            success: (result) => {
                $('#cancelReservationModal').modal('hide')
                if (result) {
                    Swal.fire({
                        html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully cancelled a reservation!</p></div></div>',
                        showCancelButton: !0,
                        showConfirmButton: !1,
                        cancelButtonClass: 'btn btn-success w-xs mb-1',
                        cancelButtonText: 'Ok',
                        buttonsStyling: !1,
                        showCloseButton: !0,
                    }).then(function() {
                        window.location.href = `${baseURL}student/evrsers/reservation-history`
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
    })
}