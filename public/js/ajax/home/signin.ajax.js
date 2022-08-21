$(function () {
	$('#signin_form').on('submit', function (e) {
		e.preventDefault()

		if ($('#signin_form')[0].checkValidity()) {
			console.log($('#user_no').val())
			console.log($('#password-input').val())
		}
	})
})
