$(function () {
	$('#signin_form').on('submit', function (e) {
		e.preventDefault()

		if ($('#signin_form')[0].checkValidity()) {
			console.log(`Student/Employee Number: ${$('#user_no').val()}`)
			console.log(`Password: ${$('#password-input').val()}`)
		}
	})
})
