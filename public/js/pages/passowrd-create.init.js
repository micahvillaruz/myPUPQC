Array.from(document.querySelectorAll('form .auth-pass-inputgroup')).forEach(function (s) {
	Array.from(s.querySelectorAll('.password-addon')).forEach(function (t) {
		t.addEventListener('click', function (t) {
			var e = s.querySelector('.password-input')
			'password' === e.type ? (e.type = 'text') : (e.type = 'password')
		})
	})
})
var password = document.getElementById('password-input'),
	confirm_password = document.getElementById('confirm-password-input'),
	old_password = document.getElementById('old-password-input')
function validatePassword() {
	password.value != confirm_password.value
		? confirm_password.setCustomValidity("Passwords Don't Match")
		: confirm_password.setCustomValidity('')
	old_password.setCustomValidity('')
}
