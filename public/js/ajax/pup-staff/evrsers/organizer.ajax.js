$(function() {
    studentNoOrganizer()

    viewStudentOrganizerStaff()
})

viewStudentDetails = () => {
    console.log('hatdog')
}

// Load datatables
viewStudentOrganizerStaff = () => {
    const dt = $('#students-no-organizer-table')

    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
            'Content-Type': 'application/x-www-form-urlencoded',
        },
    })

    if (dt.length) {
        dt.DataTable({
            bDestroy: true,
            ajax: {
                url: apiURL + 'evrsers/pup_staff/view_organizers/',
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
            },
            columns: [
                // Student No.
                {
                    data: null,
                    render: (data) => {
                        const userNo = data.user_assigned_to_role.user_no
                        return `${userNo}`
                    },
                },

                // Full Name
                {
                    data: null,
                    render: (data) => {
                        const fullName = data.user_assigned_to_role.user_profiles[0].full_name
                        return `${fullName}`
                    },
                },

                // Email Address
                {
                    data: null,
                    render: (data) => {
                        const email_address = data.user_assigned_to_role.user_profiles[0].email_address
                        return `${email_address}`
                    },
                },

                // Contact Number
                {
                    data: null,
                    render: (data) => {
                        const contact_number = data.user_assigned_to_role.user_profiles[0].contact_number
                        return `${contact_number}`
                    },
                },

                // Status
                {
                    data: null,
                    render: (data) => {
                        return data.is_blacklist ?
                            `<span class="badge rounded-pill bg-danger">Inactive</span>` :
                            `<span class="badge rounded-pill bg-success">Active</span>`
                    },
                },

                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        console.log(data)
                        return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewStudentInfoModal" onclick="viewStudentDetails('${data.user_id}')"><i class="ri-eye-fill fs-5"></i></button>
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#removeStudentOrganizerModal" onclick="removeOrganizerStatus('${data.user_id}')"><i class="ri-close-fill fs-5"></i></button> 
                            </div>
                                `
                    },
                },
            ],
            order: [
                [0, 'asc']
            ],
        })
    }
}

// Populate select2 option with id student-no-organizer names of the students
studentNoOrganizer = () => {
    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
            'Content-Type': 'application/x-www-form-urlencoded',
        },
    })

    $.ajax({
        url: apiURL + 'evrsers/pup_staff/view_student_no_organizer/',
        type: 'GET',
        ContentType: 'application/x-www-form-urlencoded',
        success: (data) => {
            const students = data.data
            const select2 = $('#student-no-organizer')
            students.forEach((student) => {
                // console.log(student)
                const userNo = student.user_no
                const fullName = student.user_profiles[0].full_name
                const option = new Option(`${userNo} - ${fullName}`, student.user_no, false, false)
                select2.append(option)
            })

            // if option is selected and add-student-organizer button is clicked, get student.user_id
            // and pass it to addStudentOrganizer function
            $('#add-student-organizer').on('click', function() {
                // get selected option user_id
                const selectedOption = select2.find(':selected')
                const student = students.find((student) => student.user_no === selectedOption.val())
                    // console.log(student)
                addStudentOrganizer(student.user_id)
            })
        },
    })
}

addStudentOrganizer = (reservation_id) => {
    $('#addStudentOrganizerModal').modal('show')
    $('#add-organizer').on('click', function() {
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