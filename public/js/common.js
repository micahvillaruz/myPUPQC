// * prod = production, dev = development
const webEnv = 'dev'
const apiEnv = 'prod'

const baseURL = webEnv === 'prod' ? 'https://www.mypupqc.live/' : 'http://localhost/myPUPQC/'
const apiURL =
	apiEnv === 'prod'
		? 'https://mypupqc-api.azurewebsites.net/mypupqc/v1/'
		: 'http://localhost:3600/mypupqc/v1/'
// Token
const TOKEN = localStorage.getItem('TOKEN')

// AJAX Headers
const AJAX_HEADERS = {
	Accept: 'application/json',
	Authorization: `Bearer ${TOKEN}`,
	ContentType: 'application/x-www-form-urlencoded',
}

const refreshPage = () => {
	return setTimeout(() => {
		location.reload()
	}, 1000)
}

function logout(page) {
	let msg = ''

	switch (page) {
		case 'logout':
			msg = 'You will be redirected to Home page.'
			break
		case 'sis':
			msg = 'You will be redirected to PUP SIS login page.'
			break
		case 'vass':
			msg = 'You will be redirected to PUP VASS login page.'
			break
		case 'osssac':
			msg = 'You will be redirected to PUP OSSSAC page.'
			break
		default:
			return false
	}

	Swal.fire({
		html: `
		<div class="mt-3">
			<lord-icon
				src="https://cdn.lordicon.com/moscwhoj.json"
				trigger="loop"
				colors="primary:#f7b84b,secondary:#f06548"
				style="width:100px;height:100px"
			></lord-icon>
			<h4>Are you sure you want to logout?</h4>
			<p class="mx-4 mb-0">${msg}</p>
		</div>
		`,
		showCancelButton: true,
		confirmButtonText: 'Yes!',
		cancelButtonText: 'No, cancel!',
		confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
		cancelButtonClass: 'btn btn-ghost-dark waves-effect waves-light mt-2',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (!result.value) return false

		localStorage.clear()
		window.location.href = baseURL + page
	})
}

// Function to handle password input change
function handlePasswordInputChange() {
	var passwordInput = document.getElementById('password-input')
	var password = passwordInput.value
	var message = document.getElementById('password-contain')

	// Validate password and show/hide validation messages
	var lowercase = /[a-z]/.test(password)
	var uppercase = /[A-Z]/.test(password)
	var number = /[0-9]/.test(password)
	var specialChar = /[!@#$%^&-]/.test(password)
	var length = password.length >= 8 && password.length <= 24

	// Apply validation classes to the password validation messages
	toggleValidationClass('pass-lower', lowercase)
	toggleValidationClass('pass-upper', uppercase)
	toggleValidationClass('pass-number', number)
	toggleValidationClass('pass-special', specialChar)
	toggleValidationClass('pass-length-min', length)
	toggleValidationClass('pass-length-max', length && password.length <= 24)

	// Show/hide the password validation container
	message.style.display = password ? 'block' : 'none'
}

// Function to toggle validation class for a given element
function toggleValidationClass(elementId, isValid) {
	var element = document.getElementById(elementId)
	if (isValid) {
		element.classList.add('valid')
		element.classList.remove('invalid')
	} else {
		element.classList.add('invalid')
		element.classList.remove('valid')
	}
}

// Add event listener for password input change
document.getElementById('password-input').addEventListener('input', handlePasswordInputChange)

function changePassLogout() {
	localStorage.clear()
	sessionStorage.clear()
	window.location.href = baseURL + 'auth/signin'
}

function adjustTime(date) {
	// Tanginang time time to, eto reference: https://stackoverflow.com/questions/7556591/is-the-javascript-date-object-always-one-day-off
	date = new Date(date)
	const year = date.getFullYear()
	const month = date.getMonth() + 1
	const day = date.getDate()
	var newDate = new Date(`${year}/${month}/${day} PST`) // PST is the timezone of the server
	return new Date(newDate.getTime() + Math.abs(newDate.getTimezoneOffset() * 60000))
}
