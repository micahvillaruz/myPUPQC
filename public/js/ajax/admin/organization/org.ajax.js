$(function() {
    organizationsTable()

    // on addOrg button click
    $('#addOrganizationBtn').on('click', function(e) {
        e.preventDefault() // prevent page refresh
        addNewOrganization()
    })

})

editOrganization = (organization_id) => {
    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
        },
    })

    $.ajax({
        type: 'GET',
        url: apiURL + `super_admin/organization/${organization_id}`,
        success: (result) => {
            data = result.data

            // show modal
            $('#organization_name_edit').val(data.organization_name)
            $('#organization_abbreviation_edit').val(data.organization_abbreviation)
            $('#organization_description_edit').val(data.organization_description)
            const status = data.organization_status
            if (status == 'Active') {
                $('#organization_status_edit').html(
                    `<option value="Active" selected>Active</option>
                    <option value="Inactive">Inactive</option>
                    `,
                )
            } else {
                $('#organization_status_edit').html(
                    `<option value="Active">Active</option>
                    <option value="Inactive" selected>Inactive</option>
                    `,
                )
            }

            // check if the previous values were changed on submit
            $('#editOrganizationBtn').on('click', function(e) {
                e.preventDefault()
                const organization_name = $('#organization_name_edit').val()
                const organization_abbreviation = $('#organization_abbreviation_edit').val()
                const organization_description = $('#organization_description_edit').val()
                const organization_status = $('#organization_status_edit').val()

                if (
                    organization_name == data.organization_name &&
                    organization_abbreviation == data.organization_abbreviation &&
                    organization_description == data.organization_description &&
                    organization_status == data.organization_status
                ) {
                    Swal.fire({
                        html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>No Changes Were Made!</h4><p class="text-muted mx-4 mb-0">There were no changes made to the organization.\nPlease try again.</p></div></div>`,
                        showCancelButton: !0,
                        showConfirmButton: !1,
                        cancelButtonClass: 'btn btn-danger w-xs mb-1',
                        cancelButtonText: 'Dismiss',
                        buttonsStyling: !1,
                        showCloseButton: !0,
                    })
                } else {
                    // update the values
                    $.ajax({
                        type: 'PUT',
                        url: apiURL + `super_admin/organization/edit_organization/${organization_id}`,
                        data: {
                            organization_name: organization_name,
                            organization_abbreviation: organization_abbreviation,
                            organization_description: organization_description,
                            organization_status: organization_status,
                        },
                        success: () => {
                            Swal.fire({
                                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully edited an organization!</p></div></div>',
                                showCancelButton: !0,
                                showConfirmButton: !1,
                                cancelButtonClass: 'btn btn-success w-xs mb-1',
                                cancelButtonText: 'Ok',
                                buttonsStyling: !1,
                                showCloseButton: !0,
                            }).then(function() {
                                $('#editOrganizationModal').modal('hide')
                                organizationsTable()
                            })
                        },
                        error: () => {
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
                        },
                    })
                }
            })
        },
    })
}

deleteOrganization = (organization_id) => {
    $('#deleteOrganizationModal').modal('show')
    $('#delete-org').on('click', function() {
        $.ajaxSetup({
            headers: {
                Accept: 'application/json',
                Authorization: 'Bearer ' + TOKEN,
                ContentType: 'application/x-www-form-urlencoded',
            },
        })
        $.ajax({
            url: apiURL + `super_admin/organization/delete/${organization_id}`,
            type: 'DELETE',
            ContentType: 'application/x-www-form-urlencoded',
            success: (result) => {
                $('#deleteOrganizationModal').modal('hide')
                if (result) {
                    Swal.fire({
                        html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully deleted an organization!</p></div></div>',
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
    })
}

viewOrganization = (organization_id) => {
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
        url: apiURL + `super_admin/organization/${organization_id}`,
        dataType: 'json',
        success: (result) => {
            const userData = result.data

            $('#organization_id').html(userData.organization_id)
            $('#organization_name').html(userData.organization_name)
            $('#organization_abbreviation').html(userData.organization_abbreviation)
            $('#organization_description').html(userData.organization_description)
            let status = userData.organization_status
            if (status == 'Inactive') {
                $('#organization_status').html(
                    `<span class="badge rounded-pill bg-danger">${status}</span>`,
                )
            } else if (status == 'Active') {
                $('#organization_status').html(
                    `<span class="badge rounded-pill bg-success">${status}</span>`,
                )
            } else if (status == 'Deleted') {
                $('#organization_status').html(
                    `<span class="badge rounded-pill bg-danger">${status}</span>`,
                )
            }
        },
    })
}

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
                                <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#deleteOrganizationModal" onclick = "deleteOrganization('${data.organization_id}')"><i class="ri-delete-bin-fill fs-5"></i></button>
                            </div>
                                `
                        }
                    },
                },
            ],
            // order: [
            //     [1, 'asc']
            // ],
        })
    }
}