$(function() {
    checkCreatePermission()
})

// Check if student has existing request. If yes, he cannot create a new request. If no, he can access the new request form.
checkCreatePermission = () => {
    $.ajax({
        type: 'GET',
        url: `${apiURL}evrsers/student/view_reservations`,
        dataType: 'json',
        headers: AJAX_HEADERS,
        success: (result) => {
            const data = result.data

            if (data.length !== 0) {
                $('#decline_create_reservation').removeClass('d-none')
            } else {
                $('#decline_create_reservation').addClass('d-none')
                $('#allow_create_reservation').removeClass('d-none')

                loadFullName()

                loadHolidays()

                dateAndTimeSelectFunctions()

                loadFacilities()

                loadOrganizations()

                $('#addNewReservation').on('submit', function(e) {
                    e.preventDefault() // prevent page refresh
                    addNewReservation()
                })

                const attachmentsFileTypes = [
                    'file/pdf',
                    'file/docx',
                    'application/msword',
                    'application/pdf',
                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                ]

                pond = FilePond.create(document.querySelector('#attachments'), {
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
            }
        },
    })
}

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
                                <img src="${facility.facility_picture}" class="card-img-top" alt="${facility.facility_name}" style="height:200px;">
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
    if ($('#addNewReservation')[0].checkValidity()) {
        // no validation error
        const form = new FormData($('#addNewReservation')[0])

        //* Date and Time Selection
        const date = document.getElementById('reserveDatefloatingInput')
        const reserve_date = date.value
        const timefrom = document.getElementById('timeFromfloatingInput')
        const time_from = timefrom.value
        const timeto = document.getElementById('timeTofloatingInput')
        const time_to = timeto.value
        console.log(reserve_date, time_from + ' - ' + time_to)

        // * Facility Selection
        const facility_id = $('input[name="facility"]:checked').attr('id')

        // * Event Details
        const org = document.getElementById('orgfloatingInput')
        const organization = org.value
        const title = document.getElementById('eventTitlefloatingInput')
        const event_title = title.value
        const details = document.getElementById('eventDetailsfloatingInput')
        const event_details = details.value
        const objectives = document.getElementById('objectivesfloatingInput')
        const event_objectives = objectives.value
        const pillars = document.getElementById('pillarsfloatingInput')
            // get inner html of the selected option
        const event_pillars = pillars.options[pillars.selectedIndex].innerHTML

        pondFiles = pond.getFiles()

        const formData = new FormData()

        // * Append Date and Time Selection
        formData.append('reserve_date', reserve_date)
        formData.append('time_from', time_from)
        formData.append('time_to', time_to)

        // * Append Facility Selection
        formData.append('facility_id', facility_id)

        // * Append Event Details
        formData.append('organization_id', organization)
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
        formData.append('remarks', 'Please wait for admin approval.')

        // all values are not empty, proceed to ajax call
        $.ajaxSetup({
            headers: {
                Accept: 'application/json',
                Authorization: 'Bearer ' + TOKEN,
            },
        })

        $.ajax({
            type: 'POST',
            url: apiURL + `evrsers/student/add_reservation/`,
            data: formData,
            processData: false,
            contentType: false,
            cache: false,
            success: (result) => {
                const data = result.data
                console.log(data)

                //  display success message using sweetalert2
                if (result) {
                    Swal.fire({
                        html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully created a reservation!</p></div></div>',
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
}

// Calendar functions for new reservation
// Disable sundays for flatpickr reserveDatefloatingInput using disable option

loadHolidays = () => {
    let completeHolidayDetails
    let holidayDates = []
    $.ajax({
        url: apiURL + 'student/holidays',
        type: 'GET',
        headers: AJAX_HEADERS,
        async: false,
        success: (data) => {
            completeHolidayDetails = data.data
        },
    })
<<<<<<< Updated upstream
    completeHolidayDetails.forEach((holiday) => {
        // push holidaay.holiday_date to holidayDates and parrse it to Date.parse(date)
        holidayDates.push(Date.parse(holiday.holiday_date))
    })


=======

    console.log(completeHolidayDetails)

    completeHolidayDetails.forEach((holiday) => {
        // push holidaay.holiday_date to holidayDates and parrse it to Date.parse(date)
        holidayDates.push(Date.parse(holiday.holiday_date))
    })

>>>>>>> Stashed changes
    flatpickr('#reserveDatefloatingInput', {
        dateFormat: 'd M, Y',
        defaultDate: 'today',
        minDate: 'today',
        inline: true,
        disable: [
            function(date) {
                return date.getDay() === 0
            },
            ...holidayDates,
        ],
<<<<<<< Updated upstream

    })

    dateAndTimeSelectFunctions = () => {
        // enable #nextBtn1 upon selecting date, time from and time to in one line
        const reserveDateInput = document.querySelector('#reserveDatefloatingInput')
        const timeFromInput = document.querySelector('#timeFromfloatingInput')
        const timeToInput = document.querySelector('#timeTofloatingInput')
        const nextBtn1 = document.querySelector('#nextBtn1')

        let inputsFilled = 0

        reserveDateInput.addEventListener('change', checkInputs)
        timeFromInput.addEventListener('change', checkInputs)
        timeToInput.addEventListener('change', checkInputs)

        function checkInputs() {
            inputsFilled += 1

            if (inputsFilled === 3) {
                nextBtn1.removeAttribute('disabled')
            }
        }

        // disable previous options if time from is greater than time to
        const timeFrom = document.getElementById('timeFromfloatingInput')
        const timeTo = document.getElementById('timeTofloatingInput')

        timeFrom.addEventListener('change', function() {
            const selectedTimeFrom = timeFrom.value
            console.log(selectedTimeFrom)

            if (selectedTimeFrom != '8:00 AM') {
                updateTimeToOptions(selectedTimeFrom)
            }
        })

        updateTimeToOptions = (selectedTimeFrom) => {
            const timeToOptions = ["9:00AM", "10:00AM", "11:00AM", "1:00PM", "2:00PM", "3:00PM", "4:00PM", "5:00PM", "6:00PM", "7:00PM", "8:00PM", "9:00PM"]

            // Get the index of the selected time from and remove previous values from array
            const index = timeToOptions.indexOf(selectedTimeFrom)
            console.log(index)
            timeToOptions.splice(0, index + 1)
            console.log(timeToOptions)

            // append the values in the timeTofloatingInput
            timeTo.innerHTML = ''
            timeToOptions.forEach((timeToOption) => {
                timeTo.innerHTML += `<option value="${timeToOption}">${timeToOption}</option>`
            })
        }
    }
=======
    })
}

dateAndTimeSelectFunctions = () => {
	flatpickr('#reserveDatefloatingInput', {
		dateFormat: 'd M, Y',
		defaultDate: 'today',
		minDate: 'today',
		inline: true,
		disable: [
			function (date) {
				return date.getDay() === 0
			},
			// ...holidayDates,
		],
})
	

	// enable #nextBtn1 upon selecting date, time from and time to in one line
	const reserveDateInput = document.querySelector('#reserveDatefloatingInput')
	const timeFromInput = document.querySelector('#timeFromfloatingInput')
	const timeToInput = document.querySelector('#timeTofloatingInput')
	const nextBtn1 = document.querySelector('#nextBtn1')

	let inputsFilled = 0

	reserveDateInput.addEventListener('change', checkInputs)
	timeFromInput.addEventListener('change', checkInputs)
	timeToInput.addEventListener('change', checkInputs)

	function checkInputs() {
		inputsFilled += 1

		if (inputsFilled === 3) {
			nextBtn1.removeAttribute('disabled')
		}
	}

	// disable previous options if time from is greater than time to
	const timeFrom = document.getElementById('timeFromfloatingInput')
	const timeTo = document.getElementById('timeTofloatingInput')

	timeFrom.addEventListener('change', function () {
		const selectedTimeFrom = timeFrom.value
		console.log(selectedTimeFrom)

		if (selectedTimeFrom != '8:00 AM') {
			updateTimeToOptions(selectedTimeFrom)
		}
	})

	updateTimeToOptions = (selectedTimeFrom) => {
		const timeToOptions = [
			'9:00AM',
			'10:00AM',
			'11:00AM',
			'1:00PM',
			'2:00PM',
			'3:00PM',
			'4:00PM',
			'5:00PM',
			'6:00PM',
			'7:00PM',
			'8:00PM',
			'9:00PM',
		]

		// Get the index of the selected time from and remove previous values from array
		const index = timeToOptions.indexOf(selectedTimeFrom)
		console.log(index)
		timeToOptions.splice(0, index + 1)
		console.log(timeToOptions)

		// append the values in the timeTofloatingInput
		timeTo.innerHTML = ''
		timeToOptions.forEach((timeToOption) => {
			timeTo.innerHTML += `<option value="${timeToOption}">${timeToOption}</option>`
		})
	}
>>>>>>> Stashed changes
}

// load organizations as options in orgfloatingInput using ajax /student/view_organization
loadOrganizations = () => {
    $.ajaxSetup({
        headers: {
            Accept: 'application/json',
            Authorization: 'Bearer ' + TOKEN,
        },
    })

    $.ajax({
        type: 'GET',
        url: apiURL + `evrsers/student/view_organization`,
        // filter by organization status == active using dataSrc
        dataSrc: (data) => {
            let filterData = data.data.filter((item) => {
                return item.reserve_status == 'Active'
            })
            return filterData
        },
        success: (result) => {
            const data = result.data
            console.log(data)

            if (result) {
                data.forEach((organization) => {
                    if (organization.organization_abbreviation === '') {
                        $('#orgfloatingInput').append(
                            `<option value="${organization.organization_id}">${organization.organization_name}</option>
                            `,
                        )
                    } else {
                        $('#orgfloatingInput').append(
                            `<option value="${organization.organization_id}">${organization.organization_abbreviation}</option>
                            `,
                        )
                    }
                })
                $('#orgfloatingInput').append(`<option>Other</option>`)
            }
        },
    })
}