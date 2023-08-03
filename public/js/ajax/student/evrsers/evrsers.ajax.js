$(function() {
    viewReservationDetails()

    checkPubmat()

    // register Image Preview plugin
    FilePond.registerPlugin(FilePondPluginImagePreview)

    const pubmatFileTypes = ['image/jpeg', 'image/png']

    pond1 = FilePond.create(document.querySelector('#pubmat-file'), {
        allowImagePreview: true,
        allowFileEncode: true,
        imagePreviewMaxHeight: 200,
        instantUpload: false,
        allowProcess: false,
        acceptedFileTypes: pubmatFileTypes,
        beforeAddFile: (file) => {
            if (!pubmatFileTypes.includes(file.fileType)) {
                Swal.fire({
                    iconHtml: `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop-on-hover" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px"></lord-icon>`,
                    customClass: {
                        icon: 'border-white',
                    },
                    title: 'Oops...',
                    text: `Only JPG and PNG files are allowed! The one you are uploading is a: ${file.fileType}`,
                    showCancelButton: !0,
                    showConfirmButton: !1,
                    cancelButtonClass: 'btn btn-danger w-xs mb-1',
                    cancelButtonText: 'Dismiss',
                    buttonsStyling: !1,
                    showCloseButton: !0,
                })
                return false
            }
            return true
        },
    })

    const attachmentsFileTypes = [
        'file/pdf',
        'file/docx',
        'application/msword',
        'application/pdf',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    ]

    pond = FilePond.create(document.querySelector('#edit-attachments'), {
        instantUpload: false,
        allowProcess: false,
        acceptedFileTypes: attachmentsFileTypes,
        beforeAddFile: (file) => {
            if (!attachmentsFileTypes.includes(file.fileType)) {
                Swal.fire({
                    iconHtml: `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop-on-hover" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px"></lord-icon>`,
                    customClass: {
                        icon: 'border-white',
                    },
                    title: 'Oops...',
                    text: `Only PDF and Document files are allowed! The one you are uploading is a: ${file.fileType}`,
                    showCancelButton: !0,
                    showConfirmButton: !1,
                    cancelButtonClass: 'btn btn-danger w-xs mb-1',
                    cancelButtonText: 'Dismiss',
                    buttonsStyling: !1,
                    showCloseButton: !0,
                })
                return false
            }
            return true
        },
    })
})

viewReservationDetails = () => {
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
        url: apiURL + `evrsers/student/view_reservations`,
        dataType: 'json',
        success: (result) => {
            console.log(result)
            const userData = result.data[0]
            console.log(userData)

            if (userData.length !== 0) {
                $('#existing_reservation').removeClass('d-none')
                $('#no_reservation').addClass('d-none')
            }

            // var pubmatimg = userData.ReservationPubmats.pubmatimg[0]
            // console.log(pubmatimg)

            // if (pubmatimg != null || pubmatimg != '') {
            //     $('#no-pubmat').addClass('d-none')
            //     $('#has-pubmat').removeClass('d-none')
            //         // set pubmat-img src to pubmatimg
            //     $('#pubmat-img').attr('src', pubmatimg)
            //         // $('#pubmat-img').val(pubmatimg)
            // } else {
            //     $('#no-pubmat').removeClass('d-none')
            //     $('#has-pubmat').addClass('d-none')
            // }

            // load details in the editReservationModal
            $('#reserve_number_edit').val(userData.reservation_number)
            $('#edit-title').val(userData.event_title)
            $('#edit-details').val(userData.event_details)
            $('#edit-objectives').val(userData.pup_objectives)

            // select option in edit-pillars where the innerHTML is equal to userData.pup_pillars
            $('#edit-pillars option').each(function() {
                if ($(this).html() == userData.pup_pillars) {
                    $(this).attr('selected', 'selected')
                }
            })

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
                // $('#facility_name').html(venue)
            $('#event_details').html(userData.event_details)
                // format objectives text
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
            $('#reserve_date').html(moment(userData.reserve_date).format('LL'))
            const time = `${userData.time_from} - ${userData.time_to}`
            $('#time').html(time)
            if (userData.remarks == null || userData.remarks == '') {
                $('#remarks-container').addClass('d-none')
            } else {
                $('#remarks').html(userData.remarks)
            }
            $('#attachment1').html(
                `<i class="ri-file-fill text-primary me-2"></i><a href="${userData.event_request}" target="_blank" class="link fw-bold">Event Request</a>`,
            )
            $('#attachment2').html(
                `<i class="ri-file-text-fill text-primary me-2"></i><a href="${userData.concept_paper}" target="_blank" class="link fw-bold">Concept Paper</a>`,
            )
            $('#attachment3').html(
                `<i class="ri-file-copy-2-fill text-primary me-2"></i><a href="${userData.others}" target="_blank" class="link fw-bold">Others</a>`,
            )
            let reservation_status = userData.reserve_status
            if (reservation_status == 'For Review') {
                $('#signatories-container').addClass('d-none')
                $('#editBtn').addClass('d-none')
                $('#reservation-status').html(
                    `<div class="card card-secondary">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/zncllhmn.json"
                                trigger="loop-on-hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h2 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h2>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'For Evaluation / Processing') {
                $('#cancelBtn').addClass('d-none')
                $('#editBtn').addClass('d-none')
                $('#reservation-status').html(
                    `<div class="card card-info">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/frjgvxce.json"
                                trigger="loop-on-hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h3 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'For Revision') {
                $('#cancelBtn').addClass('d-none')
                $('#reservation-status').html(
                    `<div class="card card-danger">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/frjgvxce.json"
                                trigger="loop-on-hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h3 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'Approved & Released') {
                $('#cancelBtn').addClass('d-none')
                $('#editBtn').addClass('d-none')
                $('#reservation-status').html(
                    `<div class="card card-success">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/yqzmiobz.json"
                                trigger="loop-on-hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h3 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            }

            const reservation_id = userData.reservation_id

            loadSignatory(reservation_id)

            $('#upload-pubmat').on('click', function() {
                pondFiles1 = pond1.getFiles()

                const formData = new FormData()
                formData.append('pubmats_images', pondFiles1[0].file)

                $.ajax({
                    type: 'PUT',
                    cache: false,
                    url: apiURL + `evrsers/student/add_pubmats/${reservation_id}`,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (result) => {
                        if (result) {
                            Swal.fire({
                                html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have uploaded a pubmat for your event!</p></div></div>',
                                showCancelButton: !0,
                                showConfirmButton: !1,
                                cancelButtonClass: 'btn btn-success w-xs mb-1',
                                cancelButtonText: 'Ok',
                                buttonsStyling: !1,
                                showCloseButton: !0,
                            }).then(function() {
                                window.location.href = `${baseURL}student/evrsers/view-reservation`
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

            $('#cancelBtn').on('click', function() {
                cancelReservation(reservation_id)
            })

            // on edit-reservation-form submit
            $('#edit-reservation-form').on('submit', function(e) {
                e.preventDefault()

                const title = document.getElementById('edit-title')
                const event_title = title.value
                const details = document.getElementById('edit-details')
                const event_details = details.value
                const objectives = document.getElementById('edit-objectives')
                const event_objectives = objectives.value
                const pillars = document.getElementById('edit-pillars')
                    // get inner html of the selected option
                const event_pillars = pillars.options[pillars.selectedIndex].innerHTML

                pondFiles = pond.getFiles()

                const formData = new FormData()
                formData.append('reservation_id', reservation_id)

                // * Append Event Details
                formData.append('event_title', event_title)
                formData.append('event_details', event_details)
                formData.append('pup_objectives', event_objectives)
                formData.append('pup_pillars', event_pillars)

                // for files in pondFiles
                for (let i = 0; i < pondFiles.length; i++) {
                    formData.append('event_request', pondFiles[0].file)
                    formData.append('concept_paper', pondFiles[1].file)
                    formData.append('others', pondFiles[2].file)
                }

                formData.append('reserve_status', 'For Review')

                updateReservation(reservation_id, formData)
            })
        },
    })
}

updateReservation = (reservation_id, formData) => {
    $.ajax({
        type: 'PUT',
        cache: false,
        url: apiURL + `evrsers/student/edit_reservation/${reservation_id}`,
        data: formData,
        contentType: false,
        processData: false,
        success: (result) => {
            if (result) {
                Swal.fire({
                    html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully edited a reservation!</p></div></div>',
                    showCancelButton: !0,
                    showConfirmButton: !1,
                    cancelButtonClass: 'btn btn-success w-xs mb-1',
                    cancelButtonText: 'Ok',
                    buttonsStyling: !1,
                    showCloseButton: !0,
                }).then(function() {
                    window.location.href = `${baseURL}student/evrsers/view-reservation`
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

// Load signatory in reservation details modal
loadSignatory = (reservation_id) => {
    // $('#show-signatories').removeClass('d-none')
    let signatoriesHTML = ''
    $.ajax({
        type: 'GET',
        cache: false,
        url: apiURL + `evrsers/student/view_signatories/${reservation_id}`,
        dataType: 'json',
        success: (result) => {
            const userData = result.data
            signatoriesHTML += `
            <h6 class="text-medium mb-4 mt-3">EVENT SIGNATORIES</h6>
            <div class="profile-timeline mb-3 mt-2">
                    <div class="accordion accordion-flush" id="todayExample">`

            console.log(userData.length)
                // for each user in userData, append to reservation-signatories
            userData.forEach((user) => {
                const user_info = user.user_assigned_to_reservation_signatory.user_profiles[0]
                    // append in the div with id todayExample
                signatoriesHTML += `<div class="accordion-item border-0">
                            <div class="accordion-header" id="heading${user.hierarchy_number}">
                                <a class="accordion-button ps-3 pt-0 pb-0 shadow-none" data-bs-toggle="collapse" href="#collapse${user.hierarchy_number}" aria-expanded="true">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0" id="icon-sign-status${user.hierarchy_number}">`
                if (user.is_signed === false) {
                    signatoriesHTML += `<i class="h5 ri-checkbox-blank-circle-line text-warning"></i>`
                } else {
                    signatoriesHTML += `<i class="h5 ri-checkbox-blank-circle-fill text-success"></i>`
                }
                signatoriesHTML += `</div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="fs-14 mb-1" id="signatory-name">${user_info.full_name}</h6>
                                                <small class="text-muted">Signatory ${user.hierarchy_number}</small> <br>`
                if (user.is_onhold === true) {
                    signatoriesHTML += `<span class="mt-1 badge badge-soft-danger text-uppercase" id="sign-status${user.hierarchy_number}">For Revision</span><br>`
                } else if (user.is_signed === false) {
                    signatoriesHTML += `<span class="mt-1 badge badge-soft-info text-uppercase" id="sign-status${user.hierarchy_number}">Evaluating</span>`
                } else {
                    signatoriesHTML += `<span class="mt-1 badge badge-soft-success text-uppercase" id="sign-status${user.hierarchy_number}">Approved</span>`
                }

                signatoriesHTML += ` </div> 
                </div> 
                </div> 
                </a> 
                </div>`
                if (user.remarks != null && user.remarks != '') {
                    signatoriesHTML += `<hr>
                    <h6 class="text-medium mb-2 mt-4">SIGNATORY REMARKS</h6>
                    <p class="text-muted fw-medium">${user.remarks}</p>`
                    $('#remarks').html(user.remarks)
                }
            })

            signatoriesHTML += `</div></div>`
            $('#signatories-container').html(signatoriesHTML)
        },
    })
}

// Check if reservation has pubmat, if none, display filepond input for pubmat
// If pubmat exists, display pubmat
checkPubmat = (reservation_id) => {}

// cancel reservation function
// cancelBtn clicked -> show cancelReservationModal -> if cancel-reservation clicked -> cancelReservation(reservation_id)
cancelReservation = (reservation_id) => {
    $('#cancelReservationModal').modal('show')
    $('#cancel-reservation').on('click', function() {
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