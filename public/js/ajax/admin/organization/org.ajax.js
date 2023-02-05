$(function() {
    organizationsTable()

    // on addFacility button click
    $('#addOrganizationBtn').on('click', function(e) {
        e.preventDefault() // prevent page refresh
        addNewOrganization()
    })
})

addNewOrganization = () => {
    console.log('addNewOrganization()')
    const organization_name = document.getElementById('organization_name')
    const orgname = organization_name.value
    const organization_abbreviation = document.getElementById('organization_abbreviation')
    const orgabb = organization_abbreviation.value
    const organization_description = document.getElementById('organization_description')
    const orgdesc = organization_description.value

    data = {
        organization_name: orgname,
        organization_abbreviation: orgabb,
        organization_description: orgdesc,
    }

    $.ajax({
        url: apiURL + `/super_admin/organization/add_organization/`,
        type: 'POST',
        data: data,
        dataType: 'json',
        headers: AJAX_HEADERS,
        success: (result) => {
            const data = result.data
            console.log(data)

            //  display success message using sweetalert2
            if (result) {
                $('#addOrganizationModal').modal('hide')
                Swal.fire({
                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a facility!</p></div></div>',
                    showCancelButton: !0,
                    showConfirmButton: !1,
                    cancelButtonClass: 'btn btn-success w-xs mb-1',
                    cancelButtonText: 'Ok',
                    buttonsStyling: !1,
                    showCloseButton: !0,
                }).then(function() {
                    organizationsTable()
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
}

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
                        if (data.organization_status == 'Active' || data.organization_status == 'Inactive') {
                            return `
                            <div class="hstack gap-1">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewOrganizationModal" onclick="viewOrganization('${data.organization_id}')"><i class="ri-eye-fill fs-5"></i></button>
                                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editOrganizationModal" onclick = "editOrganization('${data.organization_id}')"><i class="ri-edit-2-fill fs-5"></i></button>
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