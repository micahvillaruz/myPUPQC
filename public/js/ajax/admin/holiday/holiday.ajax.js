$(function () {
	viewAllHolidays()

	// get the values in the form
	$('#addHolidayForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		addHolidayAJAX()
	})
})

viewAllHolidays = () => {
	const dt = $('#holiday-table')

	$.ajaxSetup({
		headers: AJAX_HEADERS,
	})

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'super_admin/holiday',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Holiday Name
				{
					data: null,
					class: 'text-wrap',
					render: (data) => {
						const holidayName = data.holiday_name
						return `${holidayName}`
					},
				},

				// Holiday Description
				{
					data: null,
					width: '30%',
					class: 'text-wrap',
					render: (data) => {
						const holidayDescription = data.holiday_description
						return `${holidayDescription}`
					},
				},

				// Holiday Type
				{
					data: null,
					class: 'text-wrap',
					render: (data) => {
						const holidayType = data.holiday_type
						return `${holidayType}`
					},
				},

				// Holiday Date
				{
					data: null,
					class: 'text-wrap',
					render: (data) => {
						let holidayDate

						if (data.holiday_date == null) {
							let dateRange = [data.holiday_start_date, data.holiday_end_date]
							dateRange = dateRange.map((date) => {
								let newDate = new Date(date)
								return newDate.toLocaleDateString('en-US', {
									year: 'numeric',
									month: 'long',
									day: 'numeric',
								})
							})
							holidayDate = `${dateRange[0]} to ${dateRange[1]}`
						} else {
							let date = new Date(data.holiday_date)
							holidayDate = date.toLocaleDateString('en-US', {
								year: 'numeric',
								month: 'long',
								day: 'numeric',
							})
						}
						return `${holidayDate}`
					},
				},

				// Holiday Recurrence
				{
					data: null,
					class: 'text-wrap',
					render: (data) => {
						const holidayRecurrence = data.holiday_recurrence
						return holidayRecurrence == true
							? `<span class="badge rounded-pill bg-success">Recurring Holiday</span>`
							: `<span class="badge rounded-pill bg-danger">Non Recurring Holiday</span>`
					},
				},

				// Holiday Status
				{
					data: null,
					class: 'text-wrap',
					render: (data) => {
						return data.holiday_status == 'Active'
							? `<span class="badge rounded-pill bg-success">Active</span>`
							: `<span class="badge rounded-pill bg-danger">Inactive</span>`
					},
				},

				// Actions
				{
					data: null,
					class: 'text-wrap',
					render: (data) => {
						const buttonColor = data.holiday_status == 'Active' ? 'btn-danger' : 'btn-success'
						const buttonLogo = data.holiday_status == 'Active' ? 'ri-close-fill' : 'ri-check-fill'
						return `
                            <div class="dropdown d-inline-block">
                                <button class="btn ${buttonColor} btn-icon waves-effect waves-light" onclick="changeHolidayStatus('${data.holiday_id}', '${data.holiday_status}')"><i class="${buttonLogo} fs-5"></i></button>
                                <button class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editHolidayModal" data-id="${data.holiday_id}"><i class="fas fa-edit"></i></button>
                                <button type="button" class="btn btn-dark bg-gradient btn-icon waves-effect waves-light" onclick="deleteHoliday('${data.holiday_id}')"><i class="bx bxs-trash fs-5"></i></button> 
                            </div>
                        `
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

addHolidayAJAX = () => {
	if ($('#addHolidayForm')[0].checkValidity()) {
		const form = new FormData($('#addHolidayForm')[0])
		// Display the key/value pairs
		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}

		data = {
			holiday_name: form.get('holiday_name'),
			holiday_type: form.get('holiday_type'),
			holiday_date: form.get('holiday_date'),
			holiday_recurrence: form.get('holiday_recurrence') === 'true' ? true : false,
			holiday_description: form.get('holiday_description'),
		}

		$.ajax({
			url: apiURL + 'super_admin/holiday/add',
			type: 'POST',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a new holiday!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						setTimeout(() => {
							location.reload()
						}, 1000)
					})
				}
			},
		}).fail((xhr) => {
			console.log(xhr.responseJSON.message)
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a new holiday. Please try again.</p></div></div>',
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

changeHolidayStatus = (holiday_id, holiday_status) => {
	let icon, title, text
	if (holiday_status == 'Active') {
		icon = `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px">
        </lord-icon>`
		title = `Are you sure you want to deactivate this holiday?`
		text = `By deactivating this holiday, users can able to set schedule on the systems using the calendar on this holiday.`
		confirmButtonColor = '#f06548'
		cancelButtonColor = '#6c757d'
		confirmButtonText = 'Deactivate'
	} else {
		icon = `<lord-icon src="https://cdn.lordicon.com/ivayzoru.json" trigger="loop" colors="outline:#ffffff,primary:#ffffff,secondary:#0ab39c" style="width:100px;height:100px">
        </lord-icon>`
		title = `Are you sure you want to activate this role?`
		text = `By activating this holiday, users can't able to set schedule on the systems using the calendar on this holiday.`
		confirmButtonColor = '#0ab39c'
		cancelButtonColor = '#6c757d'
		confirmButtonText = 'Activate'
	}
	Swal.fire({
		title: title,
		text: text,
		iconHtml: icon,
		customClass: {
			icon: 'border-white',
		},
		showCancelButton: true,
		confirmButtonColor: confirmButtonColor,
		cancelButtonColor: cancelButtonColor,
		confirmButtonText: confirmButtonText,
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: apiURL + 'super_admin/holiday/status/' + holiday_id,
				type: 'PUT',
				dataType: 'json',
				headers: AJAX_HEADERS,
				success: (response) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully changed the holiday status!</p></div></div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							setTimeout(() => {
								location.reload()
							}, 1000)
						})
					}
				},
			})
		}
	})
}

deleteHoliday = (holiday_id) => {
	Swal.fire({
		title: 'Are you sure you want to delete this holiday?',
		text: 'By deleting this holiday, the users can now able to set a schedule in the calendar used by these systems.',
		iconHtml: `<lord-icon
        src="https://cdn.lordicon.com/gsqxdxog.json"
        trigger="loop"
        colors="primary:#121331,secondary:#c71f16"
        style="width:100px;height:100px">
    </lord-icon>`,
		customClass: {
			icon: 'border-white',
		},
		showCancelButton: true,
		confirmButtonColor: '#f06548',
		cancelButtonColor: '#6c757d',
		confirmButtonText: 'Delete',
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: apiURL + 'super_admin/holiday/delete/' + holiday_id,
				type: 'DELETE',
				dataType: 'json',
				headers: AJAX_HEADERS,
				success: (result) => {
					if (result) {
						Swal.fire({
							html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">${result.message}</p></div></div>`,
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							setTimeout(() => {
								location.reload()
							}, 1000)
						})
					}
				},
			}).fail((xhr) => {
				Swal.fire({
					html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">${xhr.responseJSON.message}</p></div></div>`,
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-danger w-xs mb-1',
					cancelButtonText: 'Dismiss',
					buttonsStyling: !1,
					showCloseButton: !0,
				})
			})
		}
	})
}
