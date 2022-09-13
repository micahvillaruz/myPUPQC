// Load datatables
loadStudentTable = () => {
    const dt = $('#students-datatable')

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
                url: apiURL + 'super_admin/student/',
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
            },
            columns: [
                // Customer No.
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
                        const fullName = data.user_profiles.full_name

                        return `${fullName}`
                    },
                },

                // Address
                {
                    data: null,
                    render: (data) => {
                        const address = data.user_profiles.full_address
                        return `${address}`
                    },
                },

                // Gender
                {
                    data: null,
                    render: (data) => {
                        const igender = data.user_profiles.gender
                        return `${igender}`
                    },
                },

                // Birthday
                {
                    data: null,
                    render: (data) => {
                        const birth_date = moment(data.user_profiles.birth_date).format('LL')

                        return `${birth_date}`
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
                        let activationBtn = data.is_blacklist ?
                            `<button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="activateStudent('${data.user_id}')"><i class="bx bxs-user-check fs-4"></i></button>` :
                            `<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deactivateStudent('${data.user_id}')"><i class="bx bxs-user-x fs-4"></i></button>`
                        return `
    <div class="dropdown d-inline-block">
    <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewStudentDetails('${data.user_id}')" data-bs-toggle="modal" data-bs-target="#viewStudentModal"><i class="ri-eye-fill fs-5"></i></button>
    <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateStudentModal" onclick = "editStudentDetails('${data.user_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
    ${activationBtn}
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