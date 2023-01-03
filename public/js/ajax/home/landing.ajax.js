$(function () {
	$('#contact_form').on('submit', function (e) {
		e.preventDefault()
		if ($('#contact_form')[0].checkValidity()) {
			sendMessageToAdmin()
		}
	})
})

sendMessageToAdmin = () => {
	const formData = new FormData($('#contact_form')[0])
	const data = {}
	// loop through form data and its values using .entries()
	for (const [key, value] of formData.entries()) {
		data[key] = value
	}

	$.ajax({
		url: apiURL + 'get-in-touch',
		type: 'POST',
		data: data,
		dataType: 'json',
		success: (result) => {
			console.log(result)
			if (result) {
				$('#contact_form')[0].reset()
				$('#contact_form').removeClass('was-validated')
				$('#contact_form').find('.invalid-feedback').remove()
				$('#contact_form').find('.is-invalid').removeClass('is-invalid')
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Message sent successfully!</h4><p class="text-muted mx-4 mb-0">You have successfully sent your message!</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-success w-xs mb-1',
					cancelButtonText: 'Ok',
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(() => {
					refreshPage()
				})
			} else {
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
				})
			}
		},
	}).fail(() => {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">There was an error while sending your message. Please try again.</p></div></div>',
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}
