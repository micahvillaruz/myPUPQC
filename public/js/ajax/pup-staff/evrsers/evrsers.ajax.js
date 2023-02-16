$(function() {
    viewAllPendingReservation()

    viewAllForEvaluation()

    viewAllApprovedReservation()
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
                // const venue = userData.facilities_assigned_to_reservation.facility_name
                // console.log(venue)

            $('#reserve_number').html(userData.reservation_number)

            let organization_name = userData.organization_assigned_to_reservations.display_name
            console.log(organization_name)
            let acadorg = ['CHRS', 'COMMITS', 'DOMT.CS', 'FBTO', 'JMS', 'SPAS', 'YES']
            let nonacadorg = ['KATAGA', 'MUSA', 'PSC', 'Vox Nova', 'Other']
            let studgov = ['SSC', 'COL']

            if (acadorg.includes(organization_name)) {
                console.log('True')
                $('#organization').html(
                    `<span class="fs-4 badge badge-outline-info fw-bold mb-0">${organization_name}</span>`,
                )
            } else if (nonacadorg.includes(organization_name)) {
                console.log('True')
                $('#organization').html(
                    `<h5 class="fs-4 badge badge-outline-danger fw-bold mb-0">${organization_name}</h5>`,
                )
            } else if (studgov.includes(organization_name)) {
                console.log('True')
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

            $('#approveBtn').on('click', function() {
                approveReservation(reservation_id)
            })
        },
    })
}

//View All Pending / For Review Reservations
viewAllPendingReservation = () => {
    const dt = $('#for-review-table')

    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
            ContentType: 'application/x-www-form-urlencoded',
        },
    })
    if (dt.length) {
        dt.DataTable({
            bDestroy: true,
            ajax: {
                url: apiURL + 'evrsers/pup_staff/view_pending_list_reservation/',
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
            },
            columns: [
                // Reservation Control Number
                {
                    data: null,
                    render: (data) => {
                        const reservation_number = data.reservation_number
                        return `${reservation_number}`
                    },
                },
                // Event Title
                {
                    data: null,
                    render: (data) => {
                        const event_title = data.event_title
                        return `${event_title}`
                    },
                },

                // Venue
                {
                    data: null,
                    render: (data) => {
                        const facility_name = data.facilities_assigned_to_reservation.facility_name
                        return `${facility_name}`
                    },
                },

                // Date
                {
                    data: null,
                    render: (data) => {
                        const reserve_date = moment(data.reserve_date).format('LL')
                        return `${reserve_date}`
                    },
                },

                // Time
                {
                    data: null,
                    render: (data) => {
                        const time_from = data.time_from
                        const time_to = data.time_to
                        return `${time_from + ' - ' + time_to}`
                    },
                },

                // Status
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        const reserve_status = data.reserve_status
                        return `<span class="badge rounded-pill bg-secondary">${reserve_status}</span>`
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
                                <button type="button" class="btn btn-success waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#addSignModal" onclick="fetchAllStaff('${data.reservation_id}'); loadSignatories('${data.reservation_id}')"><i class=" ri-quill-pen-fill fs-6 me-2 align-middle"></i>Add Signatories</button>
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

//View All For Evaluation Reservations
viewAllForEvaluation = () => {
    const dt = $('#for-evaluation-table')

    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
            ContentType: 'application/x-www-form-urlencoded',
        },
    })
    if (dt.length) {
        dt.DataTable({
            bDestroy: true,
            ajax: {
                url: apiURL + 'evrsers/pup_staff/view_for_evaluation/',
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
            },
            columns: [
                // Reservation Control Number
                {
                    data: null,
                    render: (data) => {
                        const reservation_number = data.reservation_number
                        return `${reservation_number}`
                    },
                },
                // Event Title
                {
                    data: null,
                    render: (data) => {
                        const event_title = data.event_title
                        return `${event_title}`
                    },
                },

                // Venue
                {
                    data: null,
                    render: (data) => {
                        const facility_name = data.facilities_assigned_to_reservation.facility_name
                        return `${facility_name}`
                    },
                },

                // Date
                {
                    data: null,
                    render: (data) => {
                        const reserve_date = moment(data.reserve_date).format('LL')

                        return `${reserve_date}`
                    },
                },

                // Time
                {
                    data: null,
                    render: (data) => {
                        const time_from = data.time_from
                        const time_to = data.time_to
                        return `${time_from + ' - ' + time_to}`
                    },
                },

                // Status
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        const reserve_status = data.reserve_status
                        return `<span class="badge rounded-pill bg-info">${reserve_status}</span>`
                    },
                },

                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationStaff('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
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

//View All Approved Reservations
viewAllApprovedReservation = () => {
    const dt = $('#approved-and-released-table')

    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
            ContentType: 'application/x-www-form-urlencoded',
        },
    })
    if (dt.length) {
        dt.DataTable({
            bDestroy: true,
            ajax: {
                url: apiURL + 'evrsers/pup_staff/approved_reservation/',
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
            },
            columns: [
                // Reservation Control Number
                {
                    data: null,
                    render: (data) => {
                        const reservation_number = data.reservation_number
                        return `${reservation_number}`
                    },
                },
                // Event Title
                {
                    data: null,
                    render: (data) => {
                        const event_title = data.event_title
                        return `${event_title}`
                    },
                },

                // Venue
                {
                    data: null,
                    render: (data) => {
                        const facility_name = data.facilities_assigned_to_reservation.facility_name
                        return `${facility_name}`
                    },
                },

                // Date
                {
                    data: null,
                    render: (data) => {
                        const reserve_date = moment(data.reserve_date).format('LL')

                        return `${reserve_date}`
                    },
                },

                // Time
                {
                    data: null,
                    render: (data) => {
                        const time_from = data.time_from
                        const time_to = data.time_to
                        return `${time_from + ' - ' + time_to}`
                    },
                },

                // Status
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        const reserve_status = data.reserve_status
                        return `<span class="badge rounded-pill bg-success">${reserve_status}</span>`
                    },
                },

                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationStaff('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
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

cancelReservation = (reservation_id) => {
    console.log('Reservation ID:', reservation_id)
    $('#viewReservationModal').modal('hide')
    $('#cancelReservationModal').modal('show')
    $('#cancel-reservation').on('click', function() {
        // change reservation status through ajax
        $.ajaxSetup({
            headers: {
                Accept: 'application/json',
                Authorization: 'Bearer ' + TOKEN,
                contentType: 'application/x-www-form-urlencoded',
            },
        })
        $.ajax({
            url: apiURL + `evrsers/pup_staff/edit_status/${reservation_id}`,
            type: 'PUT',
            data: {
                reserve_status: 'Cancelled by Staff',
                remarks: 'Event not approved by the Director',
            },
            success: (result) => {
                $('#cancelReservationModal').modal('hide')
                if (result) {
                    Swal.fire({
                        html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have cancelled a reservation!</p></div></div>',
                        showCancelButton: !0,
                        showConfirmButton: !1,
                        cancelButtonClass: 'btn btn-success w-xs mb-1',
                        cancelButtonText: 'Ok',
                        buttonsStyling: !1,
                        showCloseButton: !0,
                    }).then(function() {
                        // reload Pending Reservations table
                        viewAllPendingReservation()
                    })
                }
            },
        }).fail((xhr) => {
            $('#cancelReservationModal').modal('hide')
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
        })
    })
}

// Get All signatories and populate signatory_names select
fetchAllStaff = (reservation_id) => {
    console.log('Reservation ID:', reservation_id)

    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
            'Content-Type': 'application/x-www-form-urlencoded',
        },
    })

    $.ajax({
        url: apiURL + 'evrsers/pup_staff/signatory/view_all_staff/',
        type: 'GET',
        ContentType: 'application/x-www-form-urlencoded',
        success: (data) => {
            const staffs = data.data
            const select2 = $('#signatory-names')
            staffs.forEach((staff) => {
                console.log(staff)
                const userNo = staff.user_no
                const fullName = staff.user_profiles[0].full_name
                const option = new Option(`${fullName} - ${userNo}`, staff.user_no, false, false)
                select2.append(option)
            })

            // Set select2 dropdownParent to modal
            select2.select2({
                dropdownParent: $('#addSignModal'),
            })

            // Console log selection value on change
            select2.on('change', function() {
                console.log(select2.find(':selected').val())
            })

            let signatoryList = []
            var count = 1

            // if option is selected and add-student-organizer button is clicked, get student.user_id
            // and pass it to addStudentOrganizer function and prevent page from reloading

            $('#add-as-signatory').on('click', function(e) {
                // get selected option user_id
                const selectedOption = select2.find(':selected')
                let staff = staffs.find((staff) => staff.user_no === selectedOption.val())
                let staffName = staff.user_profiles[0].full_name
                let user_id = staff.user_id

                // push user_id to signatoryList
                signatoryList.push(user_id)

                // Show result using dynamic html element that could be removed if removeSignatory is clicked
                $('#reservation-signatories').append(`
                <div class="mb-4">
                  <div class="hstack gap-1">
                    <input type="text" class="form-control" id="signatory${count}" name="signatory${count}" placeholder="${staffName}" disabled>
                    <button id="${user_id}" type="button" class="btn btn-info btn-danger waves-effect waves-light" onclick="removeStaffArray('${user_id}')"><i class="ri-subtract-line fs-5"></i></button>
                  </div>
                </div>
                `)

                // Remove d-none class from reservation-signatories
                $('#reservation-signatories').removeClass('d-none')
                $('#ConfirmButton').removeClass('d-none')

                console.log(count + ' - ' + staffName)
                console.log(signatoryList)

                count++

                removeStaffArray = (user_id) => {
                    // remove user_id from signatoryList
                    signatoryList = signatoryList.filter((id) => id !== user_id)

                    // remove element from html
                    $(`#${user_id}`).parent().parent().remove()

                    count--
                }

                // Do code once showConfirmButton is clicked
                $('#ConfirmButton').on('click', function(e) {
                    e.preventDefault()
                    addSignatory(signatoryList, reservation_id)
                })
            })
        },
    })
}

// Add Signatory
addSignatory = (signatoryList, reservation_id) => {
    console.log("Adding signatories for reservation_id: " + reservation_id)
    console.log(signatoryList)

    // hide modal
    $('#addSignModal').modal('hide')

    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
        },
    })

    $.ajax({
        url: apiURL + `evrsers/pup_staff/signatory/add_signatories/${reservation_id}`,
        type: 'PUT',
        ContentType: 'application/x-www-form-urlencoded',
        data: {
            signatories: signatoryList,
        },
        success: (data) => {
            console.log(data)
            Swal.fire({
                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added signatory to this event!</p></div></div>',
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
        }
    })

}

// Load signatories through function
loadSignatories = (reservation_id) => {
    console.log('Reservation ID:', reservation_id)
        // Check if reservation_id has reservation_signatories
}