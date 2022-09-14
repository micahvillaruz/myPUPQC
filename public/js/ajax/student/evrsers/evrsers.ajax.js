$(function() {
    ownReservationsTable()
        // ownReservationsHistory()

    $('#addNewReservation').on('submit', function(e) {
        e.preventDefault() // prevent page refresh
            // loadFullName()
        addNewReservation()
    })

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

                // Venue
                {
                    data: null,
                    render: (data) => {
                        const number_attendees = data.number_attendees
                        return `${number_attendees}`
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
                            return `<span class="badge rounded-pill bg-secondary">${reserve_status}</span>`
                        } else if (reserve_status == 'Approved') {
                            return `<span class="badge rounded-pill bg-success">${reserve_status}</span>`
                        } else if (reserve_status == 'Declined') {
                            return `<span class="badge rounded-pill bg-danger">${reserve_status}</span>`
                        } else if (reserve_status == 'Cancelled') {
                            return `<span class="badge rounded-pill bg-info">${reserve_status}</span>`
                        }
                    },
                },

                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        let reserve_status = data.reserve_status
                        if (reserve_status == 'Pending') {
                            return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewOwnReservation('${data.reservation_id}')" data-bs-toggle="modal" data-bs-target="#viewOwnReservation"><i class="ri-eye-fill fs-5"></i></button>
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editReservationModal" onclick = "editReservation('${data.reservation_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="cancelReservation('${data.reservation_id}')"><i class="ri-close-fill fs-5"></i></button> 
                            </div>
                                `
                        } else if (reserve_status == 'Declined') {
                            return `<div class = "dropdown d-inline-block">
                                        <button type = "button" class = "btn btn-info btn-icon waves-effect waves-light" onclick = "viewReserveDetails('${data.reservation_id}')" data-bs-toggle = "modal" data-bs-target = "#viewOwnReservation" > <i class = "ri-eye-fill fs-5" > </i></button>
                                    </div>`
                        } else if (reserve_status == 'Cancelled') {
                            return `<div class = "dropdown d-inline-block">
                                        <button type = "button" class = "btn btn-info btn-icon waves-effect waves-light" onclick = "viewReserveDetails('${data.reservation_id}')" data-bs-toggle = "modal" data-bs-target = "#viewOwnReservation" > <i class = "ri-eye-fill fs-5" > </i></button>
                                    </div>`
                        } else {
                            return `<button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewReserveDetails('${data.reservation_id}')" data-bs-toggle="modal" data-bs-target="#viewOwnReservation"><i class="ri-eye-fill fs-5"></i></button>`
                        }
                    },
                },
            ],
            order: [
                [4, 'desc']
            ],
        })
    }
}

// loadFullName = () => {
//     $.ajax({
//         type: 'GET',
//         url: apiURL + `student/info`,
//         headers: AJAX_HEADERS,
//         success: (result) => {
//             const data = result.data
//             document.getElementById('full_name').value = data.full_name
//         },
//     })
// }

// addNewReservation = () => {
//     // Create New Reservation
//     if ($('#addNewReservation')[0].checkValidity()) {
//         // no validation error
//         Swal.fire({
//             html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Reservation Success !</h4><p class="text-muted mx-4 mb-0">Please wait for your reservation to be approved.</p></div></div>',
//             showCancelButton: !0,
//             showConfirmButton: !1,
//             cancelButtonClass: 'btn btn-primary w-xs mb-1',
//             cancelButtonText: 'Ok',
//             buttonsStyling: !1,
//             showCloseButton: !0,
//         }).then(function() {
//             window.location = '/view-reservations';
//         })
//     }
// }

addNewReservation = () => {
    // Create New Reservation
    // no validation error
    Swal.fire({
        html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Reservation Success !</h4><p class="text-muted mx-4 mb-0">Please wait for your reservation to be approved.</p></div></div>',
        showCancelButton: !0,
        showConfirmButton: !1,
        cancelButtonClass: 'btn btn-primary w-xs mb-1',
        cancelButtonText: 'Ok',
        buttonsStyling: !1,
        showCloseButton: !0,
    }).then(function() {
        window.location = 'view-reservations';
    })
}

//         const form = new FormData($('#addNewReservation')[0])

//         data = {
//             user_no: form.get('user_no'),
//             password: form.get('password'),
//             first_name: form.get('first_name'),
//             middle_name: form.get('middle_name'),
//             last_name: form.get('last_name'),
//             extension_name: form.get('extension_name'),
//             contact_number: form.get('contact_number'),
//             birth_date: form.get('birth_date'),
//             gender: form.get('gender'),
//             house_street: form.get('house_street'),
//             barangay: form.get('barangay'),
//             municipality: form.get('municipality'),
//             province: form.get('province'),
//             region: form.get('region'),
//             email_address: form.get('email_address'),
//             civil_status: form.get('civil_status'),
//             citizenship: form.get('citizenship'),
//             religion: form.get('religion'),
//         }

//         $.ajax({
//             url: apiURL + 'super_admin/student/add',
//             type: 'POST',
//             data: data,
//             dataType: 'json',
//             headers: AJAX_HEADERS,
//             success: (result) => {
//                 if (result) {
//                     Swal.fire({
//                         html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully enrolled a student!</p></div></div>',
//                         showCancelButton: !0,
//                         showConfirmButton: !1,
//                         cancelButtonClass: 'btn btn-primary w-xs mb-1',
//                         cancelButtonText: 'Ok',
//                         buttonsStyling: !1,
//                         showCloseButton: !0,
//                     }).then(function() {
//                         $('#addStudentModal').modal('hide')
//                         $('form#enrollStudentForm')[0].reset()

//                         // Reload Student Datatable
//                         loadStudentTable()
//                     })
//                 }
//             },
//         }).fail(() => {
//             Swal.fire({
//                 html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while enrolling a student. Please try again.</p></div></div>',
//                 showCancelButton: !0,
//                 showConfirmButton: !1,
//                 cancelButtonClass: 'btn btn-primary w-xs mb-1',
//                 cancelButtonText: 'Dismiss',
//                 buttonsStyling: !1,
//                 showCloseButton: !0,
//             })
//         })