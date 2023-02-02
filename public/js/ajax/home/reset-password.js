$(() => {
	let token = $('.password-form-body').attr('id')
	// verifyToken(token)

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
			console.log(data)
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
		url: apiURL + 'reset-password/' + token,
		type: 'POST',
		data: {
			token: token,
			password: form.get('password'),
		},
		success: (data) => {
			console.log(data)
			if (data.error === true) {
			} else {
			}
		},
	})
}
