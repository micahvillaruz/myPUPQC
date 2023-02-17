$(function() {
    viewSignatoryRequests()
})

// View Own Reservation details
viewDetailsReservationStaff = (reservation_id) => {
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
        url: apiURL + `evrsers/pup_staff/view_details_reservation/${reservation_id}`,
        dataType: 'json',
        success: (result) => {
            console.log(result)
            const userData = result.data

            $('#reserve_number').html(userData.reservation_number)

            let organization_name = userData.organization_assigned_to_reservations.display_name
            let acadorg = ['CHRS', 'COMMITS', 'DOMT.CS', 'FBTO', 'JMS', 'SPAS', 'YES']
            let nonacadorg = ['KATAGA', 'MUSA', 'PSC', 'Vox Nova', 'Other']
            let studgov = ['SSC', 'COL']

            if (acadorg.includes(organization_name)) {
                $('#organization').html(
                    `<span class="fs-4 badge badge-outline-info fw-bold mb-0">${organization_name}</span>`,
                )
            } else if (nonacadorg.includes(organization_name)) {
                $('#organization').html(
                    `<h5 class="fs-4 badge badge-outline-danger fw-bold mb-0">${organization_name}</h5>`,
                )
            } else if (studgov.includes(organization_name)) {
                $('#organization').html(
                    `<h5 class="fs-4 badge badge-outline-dark fw-bold mb-0">${organization_name}</h5>`,
                )
            }

            event_title = userData.event_title
                // convert to all caps
            event_title = event_title.toUpperCase()
            $('#event_title').html(event_title)
            $('#event_details').html(userData.event_details)
            $('#reserve_date').html(moment(userData.reserve_date).format('LL'))
            const time = `${userData.time_from} - ${userData.time_to}`
            $('#time').html(time)
            $('#remarks').html(userData.remarks)
            var objectives = userData.pup_objectives
                // check if there is a hyphen in the middle of the string
            if (objectives.includes('-')) {
                // split the string into an array
                objectives = objectives.split('-')
                    // loop through the array
                objectives.forEach((objective, index) => {
                    // display the array elements as list items
                    objectives[index] = `<li>${objective}</li>`
                })
                objectives.splice(0, 1)
                objectives = objectives.join('')
            }

            $('#objectives').html(objectives)
            $('#pillar').html(userData.pup_pillars)
            $('#event_request').html(
                `<i class="ri-file-fill text-primary me-2"></i><a href="${userData.event_request}" target="_blank" class="link fw-bold">Event Request</a>`,
            )
            $('#concept_paper').html(
                `<i class="ri-file-text-fill text-primary me-2"></i><a href="${userData.concept_paper}" target="_blank" class="link fw-bold">Concept Paper</a>`,
            )
            $('#others').html(
                `<i class="ri-file-copy-2-fill text-primary me-2"></i><a href="${userData.others}" target="_blank" class="link fw-bold">Others</a>`,
            )
            let reservation_status = userData.reserve_status
            if (reservation_status == 'For Review') {
                $('#reservation-status').html(
                    `<div class="card card-secondary">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon my-auto me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/zncllhmn.json"
                                trigger="hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h2 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h2>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'Approved & Released') {
                $('#change-status').addClass('d-none')
                $('#reservation-status').html(
                    `<div class="card card-success">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon my-auto me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/egiwmiit.json"
                                trigger="hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h3 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'For Evaluation / Processing' || 'For Revision') {
                $('#reservation-status').html(
                    `<div class="card card-info">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon my-auto me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/frjgvxce.json"
                                trigger="hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h3 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (
                reservation_status == 'Cancelled by Student' ||
                reservation_status == 'Cancelled by Staff'
            ) {
                // add class for div change-status
                $('#change-status').addClass('d-none')
                $('#reservation-status').html(
                    `<div class="card card-danger">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon my-auto me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/nhfyhmlt.json"
                                trigger="hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h3 class="card-text fw-medium text-white my-auto">Cancelled</h3>
                            </div>
                        </div>
                    </div>`,
                )
            }
            const reservation_id = userData.reservation_id


            $('#cancelBtn').on('click', function() {
                console.log(reservation_id)
                cancelReservation(reservation_id)
            })
        },
    })
}

//  Check if user has sinatory requests
viewSignatoryRequests = () => {
    // get currently logged in user_id
    const dt = $('#reservations-approval-table')

    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
        },
    })
    if (dt.length) {
        dt.DataTable({
            bDestroy: true,
            ajax: {
                url: apiURL + `evrsers/pup_staff/signatory/view_user_to_be_signed_reservations/`,
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
                dataSrc: (data) => {
                    let filterData = data.data.filter((item) => {
                        return item.assigned_reservation.reserve_status != 'Cancelled by Staff'
                    })
                    return filterData
                },
            },
            columns: [
                // Reservation Control Number
                {
                    data: null,
                    render: (data) => {
                        console.log(data)
                        const reservation_number = data.assigned_reservation.reservation_number
                        return `${reservation_number}`
                    },
                },
                // Event Title
                {
                    data: null,
                    render: (data) => {
                        const event_title = data.assigned_reservation.event_title
                        return `${event_title}`
                    },
                },

                // Date
                {
                    data: null,
                    render: (data) => {
                        const reserve_date = moment(data.assigned_reservation.reserve_date).format('LL')
                        return `${reserve_date}`
                    },
                },

                // Time
                {
                    data: null,
                    render: (data) => {
                        const time_from = data.assigned_reservation.time_from
                        const time_to = data.assigned_reservation.time_to
                        return `${time_from + ' - ' + time_to}`
                    },
                },

                // Status
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        const reserve_status = data.assigned_reservation.reserve_status
                        return `<span class="badge rounded-pill bg-info">${reserve_status}</span>`
                    },
                },

                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        return `
                                <div class="dropdown d-inline-block mt-2">
                                    <button type="button" class="btn btn-info btn-icon waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationStaff('${data.reservation_id}')"><i class=" ri-eye-fill fs-6 align-middle"></i></button>
                                    <button type="button" class="btn btn-success btn-icon waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#approveReservationModal" onclick="loadSignatory('${data.reservation_id}','${data.reservation_signatory_id}')"><i class="ri-check-fill fs-6 align-middle"></i></button>
                                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#cancelReservationModal" onclick="loadSignatoryCancel('${data.reservation_id}', '${data.reservation_signatory_id}')"><i class="ri-close-fill fs-6 align-middle"></i></button>
                                </div>
                                    `
                    },
                },
            ],
            order: [
                [4, 'desc']
            ],
        })
    }
}

// Load signatory in reservation details modal
loadSignatory = (reservation_id, reservation_signatory_id) => {
    $('#approve_request_id').val(reservation_id)

    let signatoriesHTML = ''
    $.ajax({
        type: 'GET',
        cache: false,
        url: apiURL +
            `evrsers/pup_staff/signatory/view_specific_reservation_and_signatories/${reservation_id}`,
        dataType: 'json',
        success: (result) => {
            signatoriesHTML += `<div class="profile-timeline mb-3 mt-2">
                    <div class="accordion accordion-flush" id="todayExample">`

            const userData = result.data
            console.log(userData.length)
                // for each user in userData, append to reservation-signatories
            userData.forEach((user) => {
                const user_info = user.user_assigned_to_reservation_signatory.user_profiles[0]
                    // append in the div with id todayExample
                signatoriesHTML += `<div class="accordion-item border-0">
                            <div class="accordion-header" id="heading${user.hierarchy_number}">
                                <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapse${user.hierarchy_number}" aria-expanded="true">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0" id="icon-sign-status${user.hierarchy_number}">`
                if (user.is_signed === false) {
                    signatoriesHTML += `<i class="fs-5 ri-checkbox-blank-circle-line text-warning"></i>`
                } else {
                    signatoriesHTML += `<i class="fs-5 ri-checkbox-blank-circle-fill text-success"></i>`
                }
                signatoriesHTML += `</div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1" id="signatory-name">${user_info.full_name}</h6>
                                                <small class="text-muted">Signatory ${user.hierarchy_number}</small> <br>`
                if (user.is_signed === false) {
                    signatoriesHTML += `<span class="mt-1 badge badge-soft-info text-uppercase" id="sign-status${user.hierarchy_number}">Evaluating</span>`
                } else {
                    signatoriesHTML += `<span class="mt-1 badge badge-soft-success text-uppercase" id="sign-status${user.hierarchy_number}">Approved</span>`
                }
                signatoriesHTML += `
                                        </div>
                                        </div>
                                        </div>
                                        </a>
                                        </div>`
            })

            signatoriesHTML += `</div></div>`
            $('#signatories-container').html(signatoriesHTML)
        },
    })

    // On cancelRequestForm submit, do cancelRequest function
    $('#approveRequestForm').submit((e) => {
        e.preventDefault()
        approveRequest(reservation_id, reservation_signatory_id)
    })
}

// Load signatory in reservation details modal
loadSignatoryCancel = (reservation_id, reservation_signatory_id) => {
    $('#cancel_request_id').val(reservation_id)

    let signatoriesHTML = ''
    $.ajax({
        type: 'GET',
        cache: false,
        url: apiURL +
            `evrsers/pup_staff/signatory/view_specific_reservation_and_signatories/${reservation_id}`,
        dataType: 'json',
        success: (result) => {
            signatoriesHTML += `<div class="profile-timeline mb-3 mt-2">
                    <div class="accordion accordion-flush" id="todayExample">`

            const userData = result.data
            console.log(userData.length)
                // for each user in userData, append to reservation-signatories
            userData.forEach((user) => {
                const user_info = user.user_assigned_to_reservation_signatory.user_profiles[0]
                    // append in the div with id todayExample
                signatoriesHTML += `<div class="accordion-item border-0">
                            <div class="accordion-header" id="heading${user.hierarchy_number}">
                                <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapse${user.hierarchy_number}" aria-expanded="true">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0" id="icon-sign-status${user.hierarchy_number}">`
                if (user.is_signed === false) {
                    signatoriesHTML += `<i class="fs-5 ri-checkbox-blank-circle-line text-warning"></i>`
                } else {
                    signatoriesHTML += `<i class="fs-5 ri-checkbox-blank-circle-fill text-success"></i>`
                }
                signatoriesHTML += `</div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1" id="signatory-name">${user_info.full_name}</h6>
                                                <small class="text-muted">Signatory ${user.hierarchy_number}</small> <br>`
                if (user.is_signed === false) {
                    signatoriesHTML += `<span class="mt-1 badge badge-soft-info text-uppercase" id="sign-status${user.hierarchy_number}">Evaluating</span>`
                } else {
                    signatoriesHTML += `<span class="mt-1 badge badge-soft-success text-uppercase" id="sign-status${user.hierarchy_number}">Approved</span>`
                }
                signatoriesHTML += `
                                        </div>
                                        </div>
                                        </div>
                                        </a>
                                        </div>`
            })

            signatoriesHTML += `</div></div>`
            $('#signatories-container1').html(signatoriesHTML)
        },
    })

    // On cancelRequestForm submit, do cancelRequest function
    $('#cancelRequestForm').submit((e) => {
        e.preventDefault()
        cancelRequest(reservation_id, reservation_signatory_id)
    })

}

cancelRequest = (reservation_id, reservation_signatory_id) => {
    console.log(reservation_id, reservation_signatory_id)

    const remarks = $('#cancel-remarks').val()

    $.ajax({
        type: 'PUT',
        url: apiURL + `evrsers/pup_staff/signatory/onhold_reservation/${reservation_signatory_id}`,
        dataType: 'json',
        data: {
            remarks: remarks,
        },
        success: (data) => {
            console.log(data)
            Swal.fire({
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have disapproved an event!</p></div></div>',
                showCancelButton: !0,
                showConfirmButton: !1,
                cancelButtonClass: 'btn btn-success w-xs mb-1',
                cancelButtonText: 'Ok',
                buttonsStyling: !1,
                showCloseButton: !0,
            }).then(function() {
                location.reload()
            })
        },
        error: (xhr) => {
            console.log(xhr)
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
        },
    })

}

approveRequest = (reservation_id, reservation_signatory_id) => {
    console.log(reservation_id, reservation_signatory_id)

    const remarks = $('#remarks').val()
        // console.log(remarks)

    $.ajax({
        type: 'PUT',
        url: apiURL + `evrsers/pup_staff/signatory/approve_reservation/${reservation_id}`,
        dataType: 'json',
        data: {
            remarks: remarks,
        },
        success: (data) => {
            console.log(data)
            Swal.fire({
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have approved an event!</p></div></div>',
                showCancelButton: !0,
                showConfirmButton: !1,
                cancelButtonClass: 'btn btn-success w-xs mb-1',
                cancelButtonText: 'Ok',
                buttonsStyling: !1,
                showCloseButton: !0,
            }).then(function() {
                location.reload()
            })
        },
        error: (xhr) => {
            console.log(xhr)
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
        },
    })
}