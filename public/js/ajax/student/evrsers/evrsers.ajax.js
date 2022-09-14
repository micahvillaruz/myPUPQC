$(function() {
    ownReservationsTable()

    // $('#enrollStudentForm').on('submit', function (e) {
    // 	e.preventDefault() // prevent page refresh
    // 	enrollStudent()
    // })

    // $('#updateStudentForm').on('submit', function (e) {
    // 	e.preventDefault() // prevent page refresh

    // 	// pass data to API for updating of student's info
    // 	updateStudentAJAX($('#edit_user_id').val())
    // })
})

// Load datatables (individual reservations)

ownReservationsTable = () => {
    const dt = $('#reservations-datatable')

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
                url: apiURL + 'evrsers/student/view_reservations',
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
            },
            columns: [
                // Reservation ID
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

                // Event Details
                {
                    data: null,
                    render: (data) => {
                        const event_details = data.event_details
                        return `${event_details}`
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
                            // return `${reserve_status}`
                        if (reserve_status == 'Pending') {
                            return `<span class="badge rounded-pill bg-warning">${reserve_status}</span>`
                        } else if (reserve_status == 'Approved') {
                            return `<span class="badge rounded-pill bg-success">${reserve_status}</span>`
                        } else if (reserve_status == 'Declined') {
                            return `<span class="badge rounded-pill bg-danger">${reserve_status}</span>`
                        } else if (reserve_status == 'Cancelled') {
                            return `<span class="badge rounded-pill bg-info">${reserve_status}</span>`
                        }
                    },
                },

            ],
            order: [
                [0, 'asc']
            ],
        })
    }
}