const baseURL = 'http://localhost/myPUPQC/'
const apiURL = 'https://mypupqc-api.azurewebsites.net/mypupqc/v1/'
// Token
const TOKEN = localStorage.getItem('TOKEN')

// AJAX Headers
const AJAX_HEADERS = {
	Accept: 'application/json',
	Authorization: `Bearer ${TOKEN}`,
}
