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
}

function logout(page) {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/moscwhoj.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
			'<h4>Are you sure you want to logout?</h4>' +
			'</div>',
		showCancelButton: true,
		confirmButtonText: 'Yes!',
		cancelButtonText: 'No, cancel!',
		confirmButtonClass: 'btn btn-primary w-xs me-2 mt-2',
		cancelButtonClass: 'btn btn-danger w-xs mt-2',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (!result.value) return false

		switch (page) {
			case 'logout':
				localStorage.clear()
				window.location.href = baseURL + 'logout'
				break
			case 'sis':
				localStorage.clear()
				window.location.href = baseURL + 'sis'
				break
			case 'vass':
				localStorage.clear()
				window.location.href = baseURL + 'vass'
				break
			case 'osssac':
				localStorage.clear()
				window.location.href = baseURL + 'osssac'
				break
			default:
				return false
		}
	})
}
