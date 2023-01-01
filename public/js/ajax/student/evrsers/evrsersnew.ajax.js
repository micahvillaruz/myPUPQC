$(function() {
    loadFullName()

    loadFacilities()

    $('#addNewReservation').on('submit', function(e) {
        e.preventDefault() // prevent page refresh
        addNewReservation()
    })

    // $('#updateStudentForm').on('submit', function (e) {
    // 	e.preventDefault() // prevent page refresh

    // 	// pass data to API for updating of student's info
    // 	updateStudentAJAX($('#edit_user_id').val())
    // })
})

loadFullName = () => {
    $.ajax({
        type: 'GET',
        url: apiURL + `student/info`,
        headers: AJAX_HEADERS,
        success: (result) => {
            const data = result.data
            const full_name = data.full_name
            console.log(full_name)
            $('input[name="full_name"]').val(full_name)
        },
        error: function() {},
    })
}

loadFacilities = () => {
    // ajax generate facility in wizard using /student/view_all_facilities route
    //
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
        url: apiURL + `evrsers/student/view_all_facilities/`,
        dataType: 'json',
        success: (result) => {
            const facilities = result.data
            console.log(facilities)
            let facilitiesHTML = ''
            facilities.forEach((facility) => {
                facilitiesHTML += `
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input id="${facility.facility_id}" name="facility" type="radio" value="${facility.facility_name}" class="form-check-input"/>
                            <label class="form-check-label p-0 avatar-md w-100 h-50" for="${facility.facility_id}">
                                <img src="${facility.facility_picture}" class="card-img-top" alt="${facility.facility_name}">
                            </label>
                    </div>
                    <h5 class="fs-13 text-center mt-2">${facility.facility_name}</h5>
                </div>
                `
            })
            $('#facilities').html(facilitiesHTML)

            // enable next button upon selecting a facility
            $('input[name="facility"]').on('change', function() {
                $('#nextBtn').prop('disabled', false)
            })
        },
    })
}

addNewReservation = () => {
    // manually validate form before submitting
    // with the id's: orgfloatingInput, eventTitlefloatingInput, eventDetailsfloatingInput, 
    // reserveDatefloatingInput, timeFromfloatingInput, timeTofloatingInput
    // inputGroupFile01, inputGroupFile02, inputGroupFile03
    // if all are valid, then proceed to ajax call, else, display invalid feedback using custom bootstrap form validation

    // get all the values from the form
    const facility = $('input[name="facility"]:checked').val()
    const org = $('#orgfloatingInput').val()
    const event_title = $('#eventTitlefloatingInput').val()
    const event_details = $('#eventDetailsfloatingInput').val()
    const reserve_date = $('#reserveDatefloatingInput').val()
    const time_from = $('#timeFromfloatingInput').val()
    const time_to = $('#timeTofloatingInput').val()
    const file1 = $('#inputGroupFile01').val()
    const file2 = $('#inputGroupFile02').val()
    const file3 = $('#inputGroupFile03').val()

    // check if all the values are not empty
    if (
        facility &&
        org &&
        event_title &&
        event_details &&
        reserve_date &&
        time_from &&
        time_to &&
        file1 &&
        file2 &&
        file3
    ) {
        // all values are not empty, proceed to ajax call
        $.ajaxSetup({
            headers: {
                Accept: 'application/json',
                Authorization: 'Bearer ' + TOKEN,
                ContentType: 'application/x-www-form-urlencoded',
            },
        })

        $.ajax({
            type: 'POST',
            url: apiURL + `evrsers/student/add_reservation`,
            data: {
                facility: facility,
                org: org,
                event_title: event_title,
                event_details: event_details,
                reserve_date: reserve_date,
                time_from: time_from,
                time_to: time_to,
                file1: file1,
                file2: file2,
                file3: file3,
            },
            success: (result) => {
                const data = result.data
                console.log(data)

                //  display success message using sweetalert2
                Swal.fire({
                    icon: 'success',
                    title: 'Reservation Added',
                    text: 'Your reservation has been added successfully',
                    showConfirmButton: false,
                    timer: 1500,
                }).then(() => {
                    // redirect to view reservations page
                    window.location.href = '/student/evrsers/view'

                })
            },
            error: (error) => {
                console.log(error)
            }
        })
    }
}