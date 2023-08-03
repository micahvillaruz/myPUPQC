$(function () {
	$.ajax({
		type: 'GET',
		url: apiURL + 'student/view/dpa_agreement',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result.data.length == 0) {
				$('#dataPrivacy').modal('show')
				$('#addResearchButton').attr('disabled', true)
			} else {
				const signedDate = moment(result.data.is_signed).format('MMMM D, YYYY h:mm A')
				$('#dataPrivacy').modal('hide')
				$('#checkDataPrivacy').html(`
                <div class="alert alert-success" role="alert">
                <h4 class="alert-heading"><i class="mdi mdi-checkbox-marked-circle-outline"></i> You are DPA Compliant!</h4>
                <p class="mb-0">You can able to access all systems for myPUPQC. You have signed the Data Collection Policy and Warranty for Reporting Agreement on:
                    <span class="text-primary" id="dpaSignedDate">${signedDate}</span>
                </p>
                </div>`)
			}
		},
	})

	$('#dpaDisagreeButton').click(function () {
		$('#checkDataPrivacy').html(`
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading"><i class="mdi mdi-information"></i> Data Privacy Agreement</h4>
            <p>To use all of the systems in myPUPQC, you must agree to the Data Collection Policy and Warranty for Reporting Agreement. If you are seeing this message, that means you haven't agreed to the form.</p>
            <hr>
            <p class="mb-0">To access the form again,
                <span class="text-primary" data-bs-toggle="modal" data-bs-target="#dataPrivacy" role="button">click here.</span>
            </p>
        </div>`)
	})

	$('#dpaAgreeButton').click(function () {
		$.ajax({
			type: 'POST',
			url: apiURL + 'student/submit/dpa_agreement',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result.data.is_signed) {
					location.reload()
				}
			},
		})
	})

	getAuthor()

	$('#addResearchForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addResearch()
	})
})

const Toast = Swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 2000,
	timerProgressBar: true,
	didOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	},
})

// Get Author
getAuthor = (user_id) => {
	$.ajax({
		url: apiURL + `researchcop/my-submissions/info/${user_id}`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				const data = result.data

				$('#fkr_author').val(data.full_name)
				$('#r_author').val(data.full_name)
			}
		},
	}).fail(() => console.error('There was an error in retrieving student full name data'))
}

// Add Research
addResearch = () => {
	// Add Research
	if ($('#addResearchForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#addResearchForm')[0])

		//comparing authors
		var authorname = $('#fkr_author').val()
		var researchauthor = $('#r_author').val()

		data = {
			research_title: form.get('r_title'),
			user_full_name: form.get('fkr_author'),
			research_author: form.get('r_author'),
			research_co_author: form.get('r_co_author'),
			research_abstract: form.get('r_abstract'),
			research_date_accomplished: form.get('r_date_accomplished'),
			research_adviser: form.get('r_adviser'),
			research_program: form.get('r_program'),
			research_category: form.get('r_category'),
		}

		if (authorname != researchauthor) {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">Your Full Name and Author Name does not match. Please try again.</p></div></div>',
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-danger w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})
		} else {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15 mx-5">' +
					'<h4>Submitting Research Information</h4>' +
					'<p class="text-muted mx-4 mb-0">Make sure to check all your information before submitting to avoid problems.</p>' +
					'</div>' +
					'</div>',
				showCancelButton: true,
				confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
				confirmButtonText: 'Submit',
				cancelButtonClass: 'btn btn-light w-xs mb-1',
				buttonsStyling: false,
				showCloseButton: true,
			}).then((result) => {
				if (result.isConfirmed) {
					$.ajax({
						url: apiURL + 'researchcop/my-submissions/add',
						type: 'POST',
						data: data,
						dataType: 'json',
						headers: AJAX_HEADERS,
						success: (result) => {
							if (result) {
								Toast.fire({
									icon: 'success',
									title: 'Add Research Successfully!',
								}).then(function () {
									$('form#addResearchForm')[0].reset()
									window.location.href = `${baseURL}student/researchcop/my-submissions`
								})
							}
						},
					}).fail(() => {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a research. Please try again.</p></div></div>',
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
	}
}
