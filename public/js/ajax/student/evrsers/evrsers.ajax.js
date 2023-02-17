$(function() {
    viewReservationDetails()

    checkPubmat()

    // register Image Preview plugin
    FilePond.registerPlugin(FilePondPluginImagePreview)

    const pubmatFileTypes = ['image/jpeg', 'image/png']

    pond = FilePond.create(document.querySelector('#pubmat-file'), {
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
            // const venue = userData.facilities_assigned_to_reservation.facility_name
            // console.log(venue)

            $('#reserve_number').html(userData.reservation_number)
            let organization_name =
                userData.organization_assigned_to_reservations.organization_abbreviation
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
            $('#remarks').html(userData.remarks)
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
                $('#reservation-status').html(
                    `<div class="card card-secondary">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/zncllhmn.json"
                                trigger="hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h2 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h2>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'For Evaluation' || 'For Revision') {
                $('#reservation-status').html(
                    `<div class="card card-info">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/frjgvxce.json"
                                trigger="hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h3 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            } else if (reservation_status == 'Approved & Released') {
                $('#reservation-status').html(
                    `<div class="card card-success">
                        <div class="card-body">
                            <div class="d-flex position-relative">
                            <lord-icon
                                class="lord-icon me-4"
                                colors="primary:#ffffff"
                                src="https://cdn.lordicon.com/yqzmiobz.json"
                                trigger="hover"
                                style="width:50px;height:50px;">
                            </lord-icon>
                                <h3 class="card-text fw-medium text-white my-auto" style="font-size:30px;">${reservation_status}</h3>
                            </div>
                        </div>
                    </div>`,
                )
            }

            const reservation_id = userData.reservation_id

            $('#cancelBtn').on('click', function() {
                cancelReservation(reservation_id)
            })
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