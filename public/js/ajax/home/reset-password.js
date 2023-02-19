$(() => {
	let token = $('.password-form-body').attr('id')
	verifyToken(token)

	$('#resetPasswordForm').on('submit', (e) => {
		e.preventDefault()

		if ($('#resetPasswordForm')[0].checkValidity()) {
			// No Validation Error

			resetPassword(token)
		}
	})
})

verifyToken = (token) => {
	$.ajax({
		url: apiURL + 'verify-reset-password/' + token,
		type: 'GET',
		success: (data) => {
			if (data.error === true) {
				$('.password-form-body').html(`
                    <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                        <i class="ri-error-warning-line label-icon"></i><strong>${data.message}.</strong>
                    </div>
                    <div>
                        <a href="/forgot-password" class="btn btn-primary w-100">Return to Forgot Password Page</a>
                    </div>
                `)
			}
		},
	})
}

resetPassword = (token) => {
	const form = new FormData($('#resetPasswordForm')[0])

	// for (var pair of form.entries()) {
	// 	console.log(pair[0] + ': ' + pair[1])
	// }

	// ? Check if password and retype_password are same
	if (form.get('password') !== form.get('retype_password')) {
		$('#password_error').html(`
            <div class="alert alert-danger alert-dismissible alert-label-icon label-arrow fade show" role="alert">
                <i class="ri-error-warning-line label-icon"></i>Passwords are not the same.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `)
		setTimeout(function () {
			document.getElementById('password_error').style.display = 'none'
		}, 10000)

		return
	}

	$.ajax({
		url: apiURL + 'reset-password',
		type: 'POST',
		data: {
			token: token,
			password: form.get('password'),
		},
		success: (data) => {
			console.log(data)
			Swal.fire({
				html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done!</h4><p class="text-muted mx-4 mb-0">${data.message}</p></div></div>`,
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-success w-xs mb-1',
				cancelButtonText: 'Ok',
				buttonsStyling: !1,
				showCloseButton: !0,
			}).then(function () {
				setTimeout(() => {
					window.location.href = baseURL + 'signin'
				}, 1000)
			})
		},
		error: (error) => {
			if (error.responseJSON.error === true) {
				Swal.fire({
					html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">${error.responseJSON.message}</p></div></div>`,
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
