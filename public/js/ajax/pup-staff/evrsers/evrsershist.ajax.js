$(function() {

    viewAllReservationHistoryStaff()

    viewAllCancelledByStaff()

    viewAllCancelledByStudent()

})

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
            if (reservation_status == 'Done') {
                $('#reservation-status').html(
                    `<div class="card card-success">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                                <i class="ri-2x ri-check-line fw-medium me-2"></i>
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
                                <i class="ri-2x ri-close-line fw-medium me-2"></i>
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
                                <i class="ri-2x ri-close-line fw-medium me-2"></i>
                                <h3 class="card-text fw-medium text-white my-auto">Cancelled</h3>
                            </div>
                        </div>
                    </div>`,
                )
            }
        },
    })
}

//View All Reservation History
viewAllReservationHistoryStaff = () => {
    const dt = $('#done-reservations-table')

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
                url: apiURL + `evrsers/pup_staff/view_done/`,
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
                        if (reserve_status == "Done") {
                            return `<span class="badge rounded-pill bg-success">Done</span>`
                        } else if (reserve_status == "Cancelled by Staff") {
                            return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Staff</span>`
                        } else if (reserve_status == "Cancelled by Student") {
                            return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Student</span>`
                        }
                    },
                },
                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        // console.log(data.reservation_id)
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

//View All Cancelled By Staff
viewAllCancelledByStaff = () => {
    const dt = $('#cancelled-staff-table')

    if (dt.length) {
        dt.DataTable({
            bDestroy: true,
            ajax: {
                url: apiURL + `evrsers/pup_staff/view_cancelled/`,
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
                dataSrc: (data) => {
                    let filterData = data.data.filter((item) => {
                        return item.reserve_status == 'Cancelled by Staff'
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
                        if (reserve_status == "Done") {
                            return `<span class="badge rounded-pill bg-success">Done</span>`
                        } else if (reserve_status == "Cancelled by Staff") {
                            return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Staff</span>`
                        } else if (reserve_status == "Cancelled by Student") {
                            return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Student</span>`
                        }
                    },
                },
                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        // console.log(data.reservation_id)
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

//View All Cancelled By Student
viewAllCancelledByStudent = () => {
    const dt = $('#cancelled-student-table')

    if (dt.length) {
        dt.DataTable({
            bDestroy: true,
            ajax: {
                url: apiURL + `evrsers/pup_staff/view_cancelled/`,
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
                dataSrc: (data) => {
                    let filterData = data.data.filter((item) => {
                        return item.reserve_status == 'Cancelled by Student'
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
                        if (reserve_status == "Done") {
                            return `<span class="badge rounded-pill bg-success">Done</span>`
                        } else if (reserve_status == "Cancelled by Staff") {
                            return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Staff</span>`
                        } else if (reserve_status == "Cancelled by Student") {
                            return `<span class="badge rounded-pill badge-soft-danger">Cancelled by Student</span>`
                        }
                    },
                },
                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        // console.log(data.reservation_id)
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