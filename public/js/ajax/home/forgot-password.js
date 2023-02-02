$(() => {
	console.log('forgot password')

	$('#forgotPasswordForm').submit((e) => {
		e.preventDefault()

		if ($('#forgotPasswordForm')[0].checkValidity()) {
			// No Validation Error

			forgotPassword()
		}
	})
})

forgotPassword = () => {
	const form = new FormData($('#forgotPasswordForm')[0])

	$.ajax({
		url: apiURL + 'reset-password-request',
		type: 'POST',
		data: {
			email_address: form.get('email_address'),
		},
		success: (data) => {
			console.log(data)
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done!</h4><p class="text-muted mx-4 mb-0">Details of the reset password are sent in your email. You will be redirected in 5 seconds to the Login Page</p></div></div>',
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-success w-xs mb-1',
				cancelButtonText: 'Ok',
				buttonsStyling: !1,
				showCloseButton: !0,
			}).then(function () {
				setTimeout(() => {
					window.location.href = baseURL + 'signin'
				}, 5000)
			})
		},
		error: (error) => {
			if (error.responseJSON.error === true) {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">There is no email address existing like that in the system.</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-danger w-xs mb-1',
					cancelButtonText: 'Dismiss',
					buttonsStyling: !1,
					showCloseButton: !0,
				})
			}
		},
	})
}
