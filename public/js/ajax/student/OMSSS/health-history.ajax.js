$(function () {
	editMedicalHistory()

	$('#medicalHistoryForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		// pass data to API for updating of student's info
		editMedicalHistoryAJAX()
	})
})

// Edit Medical History
editMedicalHistory = () => {
	$.ajax({
		url: apiURL + `omsss/student/medical_history`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				$('#medical_history').val(data.medical_history)
				$('#social_history').val(data.social_history)
				$('allergy').val(data.allergy)
				$('#family_history').val(data.family_history)
				$('#medications').val(data.medications)
			}
		},
	}).fail(() => console.error('There was an error in retrieving health history data'))
}

// Edit Admin AJAX
editMedicalHistoryAJAX = () => {
	// Get data from form
	if ($('#medicalHistoryForm')[0]) {
		// no validation error
		const form = new FormData($('#medicalHistoryForm')[0])
		data = {
			medical_history: form.get('#medical_history'),
			social_history: form.get('social_history'),
			allergy: form.get('allergy'),
			family_history: form.get('family_history'),
			medications: form.get('medications'),
		}

		$.ajax({
			url: apiURL + `omsss/student/medical_history`,
			type: 'PUT',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully updated your information!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						loadProfile()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while updating your details. Please try again.</p></div></div>',
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-primary w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})
		})
	}
}
