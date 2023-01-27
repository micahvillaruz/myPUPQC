$(function() {
    organizationsTable()
})

organizationsTable = () => {
    const dt = $('#organizations-datatable')

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
                url: apiURL + '/super_admin/organization/',
                type: 'GET',
                ContentType: 'application/x-www-form-urlencoded',
            },
            columns: [
                // Datatable display the current row count
                {
                    data: null,
                    render: (data, type, row, meta) => {
                        return meta.row + meta.settings._iDisplayStart + 1
                    },
                },


                // Organization Name
                {
                    data: null,
                    render: (data) => {
                        console.log(data)
                        const organization_name = data.organization_name
                        return `${organization_name}`
                    },
                },

                // Organization Abbreviation
                {
                    data: null,
                    render: (data) => {
                        const organization_abbreviation = data.organization_abbreviation
                        return `${organization_abbreviation}`
                    },
                },

                // Organization Description
                {
                    data: null,
                    render: (data) => {
                        const organization_description = data.organization_description
                        return `${organization_description}`
                    },
                },

                // Status
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        const status = data.organization_status
                        if (status == 'Inactive') {
                            return `<span class="badge rounded-pill bg-danger">${status}</span>`
                        } else if (status == 'Active') {
                            return `<span class="badge rounded-pill bg-success">${status}</span>`
                        } else if (status == 'Deleted') {
                            return `<span class="badge rounded-pill bg-danger">${status}</span>`
                        }
                    },
                },

                //Action
                {
                    data: null,
                    class: 'text-center',
                    render: (data) => {
                        if (data.reserve_status == 'Pending') {
                            return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationAdmin('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editReservationModal" onclick = "editReservation('${data.reservation_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#cancelReservationModal" onclick="deleteReservation('${data.reservation_id}')"><i class="ri-delete-bin-fill fs-5"></i></button> 
                            </div>
                                `
                        } else if (data.reserve_status == 'Deleted') {
                            return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewReservationModal" onclick="viewDetailsReservationAdmin('${data.reservation_id}')"><i class="ri-eye-fill fs-5"></i></button>
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editReservationModal" onclick = "editReservation('${data.reservation_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
                            </div>
                                `
                        }
                    },
                },
            ],
            order: [
                [5, 'desc']
            ],
        })
    }
}