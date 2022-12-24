$(function() {
    viewStudentNoOrganizerStaff()
})

// Load datatables
viewStudentNoOrganizerStaff = () => {
    const dt = $('#students-no-organizer-table')

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
                url: apiURL + 'evrsers/pup_staff/view_student_no_organizer/',
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
            },
            columns: [
                // Student No.
                {
                    data: null,
                    render: (data) => {
                        const userNo = data.user_no
                        return `${userNo}`
                    },
                },

                // Full Name
                {
                    data: null,
                    render: (data) => {
                        console.log(data)
                        const fullName = data.user_profiles.full_name
                        return `${fullName}`
                    },
                },

                // Email Address
                {
                    data: null,
                    render: (data) => {
                        const email_address = data.user_profiles.email
                        return `${email_address}`
                    },
                },

                // Contact Number
                {
                    data: null,
                    render: (data) => {
                        const contact_number = data.user_profiles.contact_number
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
                        return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#" onclick="viewReservationDetails('${data.user_id}')"><i class="ri-eye-fill fs-5"></i></button>
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#" onclick = "editReservation('${data.user_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#" onclick="cancelReservation('${data.user_id}')"><i class="ri-close-fill fs-5"></i></button> 
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